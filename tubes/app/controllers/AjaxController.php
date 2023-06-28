<?php


class AjaxController extends Controller
{  
    public function storeComment(){

    }

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
                'message' => 'Post berhasil disukai!',
                'likeCount' => count($data['likes'])
            ];
    
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
                'message' => 'Post berhasil tidak disukai!',
                'likeCount' => count($data['likes'])
            ];
    
            echo json_encode($response);
        }
    }
}
?>