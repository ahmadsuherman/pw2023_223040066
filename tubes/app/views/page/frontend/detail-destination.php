<div class="content-wrapper">
    <div class="content p-2 pt-1 pb-1">
      <div class="container">
        <div class="row">

            <div class="col-md-12 mt-3">

                <div class="card card-widget">
                    <div class="card-header">
                        <div class="user-block">
                        <img class="img-circle" src="<?= BASE_URL ?>/img/default-profile.png" alt="User Image">
                        <span class="username text-primary"><?= $data['destination']['user_name_destination'] ?></span>
                        <span class="description"><i class="fa fa-tags fa-sm"></i> <?= $data['destination']['category_name']; ?> - <?= getUpdatedAtFormatDestination($data['destination']['updated_at']); ?></span>
                    </div>
                </div>

                <div class="card-body">
                    <h4 class="attachment-heading"><?= $data['destination']['name']; ?></h4>

                    <img style="min-width: 100%" class="img-fluid rounded float-left mb-2" src="<?= BASE_URL ?>/uploads/img/destination/<?= $data['destination']['image'] ?>" alt="Gambar <?= $data['destination']['name']; ?>">
                    
                    <p><?= htmlspecialchars_decode(stripslashes($data['destination']['description'])) ?></p>
                    <?php if(isset($_SESSION['user'])): ?>
                    <button id="likeButton" class="btn btn-<?= $data['checkLike'] == true ? 'primary' : 'default' ?> btn-sm"><i class="far fa-thumbs-up"></i> Suka</button>
                    <?php endif; ?>
                    <span class="float-right text-muted"><span id="likeCount"><?= count($data['likes']); ?></span> Suka - <span id="commentCount"><?= count($data['comments']) ?></span> Komentar</span>
                </div>

                <?php if(isset($_SESSION['user'])): ?>
                <div class="card-footer card-comments">
                <?php 
                    if(count($data['comments']) > 0):

                    foreach($data['comments'] as $comment): ?>
                    <div id="" class="card-comment">
                        <img class="img-circle img-sm" src="<?= BASE_URL ?>/img/default-profile.png" alt="User Image">
                        <div class="comment-text">
                        <span class="username">
                        <?= $comment['name']; ?>
                        <span class="text-muted float-right"><?= getUpdatedAtFormatDestination($comment['created_at']); ?></span>
                        </span>
                        <?= $comment['content'] ?>
                        </div>
                    </div>
                    
                    <?php endforeach; ?>
                    
                    <div id="cardComment" class="card-comment d-none">
                        <img class="img-circle img-sm" src="<?= BASE_URL ?>/img/default-profile.png" alt="User Image">
                        <div class="comment-text">
                        <span class="username">
                        <?= $_SESSION['user']['name'] ?>
                        <span class="text-muted float-right"><?= getUpdatedAtFormatDestination($comment['created_at']); ?></span>
                        </span>
                        <span id="commentSection"></span>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="card-comment">
                        <h4 class="text-center mt-2">Tidak ada komentar</h4>
                    </div>
                <?php endif; ?>
                    <form action="#" method="post" id="commentForm">
                        <img class="img-fluid img-circle img-sm" src="<?= BASE_URL ?>/img/default-profile.png" alt="Alt Text">

                        <div class="img-push">
                            <div class="input-group">
                            <input id="commentText"  type="text" name="message" placeholder="Type Message ..." class="form-control form-control-sm">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-warning btn-sm">Kirim</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>

                <?php else: ?>
                    <div class="mb-4">
                        <h5 class="text-center"><a href="<?= BASE_URL ?>/login">Login</a> untuk menyukai destinasi dan menambahkan komentar</h5>
                    </div>
                <?php endif; ?>
                </div>
            </div>

            <div class="col-md-12">
                <h5>Bagikan</h5>
            </div>
            <div class="col-md-4 mb-2">
                <button type="button" class="btn btn-success btn-block" onclick="shareTo('whatsapp')"><i class="fab fa-whatsapp"></i> Whatsapp</button>
            </div>
            <div class="col-md-4 mb-2">
                <button type="button" class="btn btn-primary btn-block" onclick="shareTo('telegram')"><i class="fab fa-telegram"></i> Telegram</button>
            </div>
            <div class="col-md-4 mb-4">
                <button type="button" class="btn btn-info btn-block" onclick="shareTo('twitter')"><i class="fab fa-twitter"></i> Twitter</button>
            </div>
            
            <div class="col-md-12">
                <div class="card-body" id="mapid"></div>
            </div>
        </div>
      </div>
    </div>
</div>