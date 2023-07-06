<?php


class AjaxController extends Controller
{  
    public function storeLike(){
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            
            $userUid = stripslashes(strip_tags(htmlspecialchars($_POST['user_id'], ENT_QUOTES)));
            $destinationUid = stripslashes(strip_tags(htmlspecialchars($_POST['destination_id'], ENT_QUOTES)));
        
            $user = $this->model('User')->findByUid($userUid);
            $destination = $this->model('Destination')->findByUid($destinationUid);
            
            $this->model('Like')->add(
                userId: $user['id'],
                destinationId: $destination['id'],
            );

            $data['likes'] = $this->model('Like')->getLikeDestination(uid: $destinationUid);
        
            $response = [
                'status' => 'success',
                'message' => 'Destinasi berhasil disukai!',
                'likeCount' => count($data['likes'])
            ];
    
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    public function voidLike(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            
            $userUid = stripslashes(strip_tags(htmlspecialchars($_POST['user_id'], ENT_QUOTES)));
            $destinationUid = stripslashes(strip_tags(htmlspecialchars($_POST['destination_id'], ENT_QUOTES)));
        
            $user = $this->model('User')->findByUid($userUid);
            $destination = $this->model('Destination')->findByUid($destinationUid);
            
            $this->model('Like')->void(
                userId: $user['id'],
                destinationId: $destination['id'],
            );

            $data['likes'] = $this->model('Like')->getLikeDestination(uid: $destinationUid);
        
            $response = [
                'status' => 'success',
                'message' => 'Destinasi berhasil tidak disukai!',
                'likeCount' => count($data['likes'])
            ];
    
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    public function getComment(){
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            
            $destinationUid = stripslashes(strip_tags(htmlspecialchars($_POST['destination_id'], ENT_QUOTES)));
            $userUid = stripslashes(strip_tags(htmlspecialchars($_POST['user_id'], ENT_QUOTES)));
            
            $user = $this->model('User')->findByUid($userUid);
            $offset = stripslashes(strip_tags(htmlspecialchars($_POST['offset'], ENT_QUOTES)));
            $limit = stripslashes(strip_tags(htmlspecialchars($_POST['limit'], ENT_QUOTES)));
            
            $data['comments'] = $this->model('Comment')->getCommentDestination(
                uid: $destinationUid,
                offset: $offset,
                limit: $limit,
            );

            $data['countTotalComment'] = $this->model('Comment')->countTotalCommentDestination(
                uid: $destinationUid
            );

            $comments = [];
            
            if(count($data['comments']) == 0):
                $comments = '<h4 class="text-center mt-4">Tidak ada komentar</h4>';
            else:
                foreach($data['comments'] as $comment):
                    $checkComment = $comment['user_id'] == $user['id'] ? '<div class="col-md-1 m-auto"><button onclick="deleteCommentButton(\'' . $comment['uid'] . '\')" id="deleteCommentButton" class="btn btn-danger btn-sm float-right"><i class="fa fa-trash"></i></button></div>' : '';

                    $comments[] = '<div class="card-comment">
                        <img class="img-circle img-sm" src="'.BASE_URL.'/img/default-profile.png" alt="User Image">
                        <div class="comment-text">
                        <span class="username">'
                        .$comment['name'].
                        '<span class="text-muted float-right">'.getDateFormatToAgo($comment['created_at']).'</span>
                        </span>
                        <div class="row">
                            <div class="col-md-11">'.$comment['content'].'</div>
                            '. $checkComment .'
                        </div>
                        </span>
                        </div>
                    </div>';
    
                endforeach;

                if(count($data['countTotalComment']) <= 5):
                    
                elseif(count($data['comments']) >= $limit):
                    array_push($comments, '<div class="text-center mt-4">
                        <button onclick="loadMoreButton()" class="btn btn-primary btn-sm" id="loadMoreButton">Tampilkan Komentar Lainnya</button>
                    </div>');
                else:
                    array_push($comments, '<div class="text-center mt-4">
                        <button onclick="LoadLessButton()" class="btn btn-primary btn-sm" id="LoadLessButton">Tampilkan Lebih Sedikit</button>
                    </div>');
                endif;
            endif;

            header('Content-Type: application/json');
            echo json_encode($comments);
        }
    }

    public function storeComment(){
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {

            $userUid = stripslashes(strip_tags(htmlspecialchars($_POST['user_id'], ENT_QUOTES)));
            $destinationUid = stripslashes(strip_tags(htmlspecialchars($_POST['destination_id'], ENT_QUOTES)));
            $content = stripslashes(strip_tags(htmlspecialchars($_POST['content'], ENT_QUOTES)));

            $user = $this->model('User')->findByUid($userUid);
            $destination = $this->model('Destination')->findByUid($destinationUid);
            
            $offset = stripslashes(strip_tags(htmlspecialchars($_POST['offset'], ENT_QUOTES)));
            $limit = stripslashes(strip_tags(htmlspecialchars($_POST['limit'], ENT_QUOTES)));
            
            $this->model('Comment')->add(
                userId: $user['id'],
                destinationId: $destination['id'],
                content: $content
            );
            
            $response = [
                'status' => 'success',
                'message' => 'Komentar berhasil ditambahkan!'
            ];
    
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    public function deleteComment(){
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {

            $uid = stripslashes(strip_tags(htmlspecialchars($_POST['uid'], ENT_QUOTES)));
            $this->model('Comment')->delete(uid: $uid);

            $response = [
                'status' => 'success',
                'message' => 'Komentar berhasil dihapus!'
            ];
    
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    public function getDestinations(){
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            
            $categoryUid = stripslashes(strip_tags(htmlspecialchars($_POST['category_uid'], ENT_QUOTES)));

            $user = $this->model('User')->findByUid($userUid);

            $data['comments'] = $this->model('Comment')->getCommentDestination(
                uid: $destinationUid,
                offset: $offset,
                limit: $limit,
            );

            $destinations = [];
            
            if(count($data['comments']) == 0):
                $comments = '<h4 class="text-center mt-4">Tidak ada komentar</h4>';
            else:
                foreach($data['comments'] as $comment):
                    $checkComment = $comment['user_id'] == $user['id'] ? '<div class="col-md-1 m-auto"><button onclick="deleteCommentButton(\'' . $comment['uid'] . '\')" id="deleteCommentButton" class="btn btn-danger btn-sm float-right"><i class="fa fa-trash"></i></button></div>' : '';

                    $comments[] = '<div class="card-comment">
                        <img class="img-circle img-sm" src="'.BASE_URL.'/img/default-profile.png" alt="User Image">
                        <div class="comment-text">
                        <span class="username">'
                        .$comment['name'].
                        '<span class="text-muted float-right">'.getDateFormatToAgo($comment['created_at']).'</span>
                        </span>
                        <div class="row">
                            <div class="col-md-11">'.$comment['content'].'</div>
                            '. $checkComment .'
                        </div>
                        </span>
                        </div>
                    </div>';
    
                endforeach;

                if(count($data['countTotalComment']) <= 5):
                    
                elseif(count($data['comments']) >= $limit):
                    array_push($comments, '<div class="text-center mt-4">
                        <button onclick="loadMoreButton()" class="btn btn-primary btn-sm" id="loadMoreButton">Tampilkan Komentar Lainnya</button>
                    </div>');
                else:
                    array_push($comments, '<div class="text-center mt-4">
                        <button onclick="LoadLessButton()" class="btn btn-primary btn-sm" id="LoadLessButton">Tampilkan Lebih Sedikit</button>
                    </div>');
                endif;
            endif;

            header('Content-Type: application/json');
            echo json_encode($comments);
        }
    }
}
?>