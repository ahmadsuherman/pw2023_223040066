<div class="content-wrapper">
    <div class="content p-2 pt-1 pb-1">
        
      <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-8 mt-3">
                    <div class="col-md-12">
                        <div id="isDemoAlert" class="alert alert-warning alert-dismissible fade show d-none" role="alert">
                            Akun demo tidak dapat menambah & mengubah data
                            <button onclick="isDemoCloseButton()" id="isDemoCloseButton" type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="">
                            <div class="card-header">
                                <div class="user-block">
                                <img class="img-circle" src="<?= getProfilePicture($data['destination']['user_avatar']) ?>" alt="User Image">
                                <span class="username text-primary"><?= $data['destination']['user_name_destination'] ?></span>
                                <span class="description"><i class="fa fa-tags fa-sm"></i> <?= $data['destination']['category_name']; ?> - <?= getDateFormatToAgo($data['destination']['updated_at']); ?></span>
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
                        <div id="getComments" class="card-footer card-comments">
                        
                        </div>
                        
                        <div class="card-footer">
                            <form action="#" method="post" id="commentForm">
                                <img class="img-fluid img-circle img-sm" src="<?= getProfilePicture($data['destination']['user_avatar']) ?>" alt="Default Photo Profile">

                                <div class="img-push">
                                    <div class="input-group">
                                    <input id="commentText"  type="text" name="message" placeholder="Tulis Komentar ..." class="form-control form-control-sm">
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
                    <div class="row p-2">
                        <div class="col-md-4 mb-2">
                            <button type="button" class="btn btn-success btn-block" onclick="shareTo('whatsapp')"><i class="fab fa-whatsapp"></i> Whatsapp</button>
                        </div>
                        <div class="col-md-4 mb-2">
                            <button type="button" class="btn btn-primary btn-block" onclick="shareTo('telegram')"><i class="fab fa-telegram"></i> Telegram</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-info btn-block" onclick="shareTo('twitter')"><i class="fab fa-twitter"></i> Twitter</button>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-12">
                        <div class="card-body" id="mapid"></div>
                    </div>
                </div>
                
                <div class="col-md-4 mt-3">
                    <div class="">
                        <div class="card-header">
                            <h4>
                            Destinasi Populer
                            </h4>
                        </div>

                        <div class="card-body">
                            <ul class="list-unstyled">
                                <?php foreach($data['destinationPopulers'] as $destinationPopulers): ?>
                                <li class="pb-2"><a href="<?= BASE_URL ?>/destinations/show/<?= $destinationPopulers['uid'] ?>" class="text-dark"><?= $destinationPopulers['name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="">
                        <div class="card-header">
                            <h4>
                            Destinasi Terbaru
                            </h4>
                        </div>

                        <div class="card-body">
                            <ul class="list-unstyled">
                                <?php foreach($data['newDestinations'] as $newDestination): ?>
                                <li class="pb-2"><a href="<?= BASE_URL ?>/destinations/show/<?= $newDestination['uid'] ?>" class="text-dark"><?= $newDestination['name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
      </div>
    </div>
</div>