<div class="content-wrapper">
    <div class="content p-2">
        <div class="container">
        <div class="row mt-3">
            <div class="col-md-11">
                <div class="list-group">
                    <?php if(count($data['destinations']) > 0): ?>
                    <?php foreach($data['destinations'] as $destination): ?>
                    <div class="list-group-item">
                        <div class="row">
                            <div class="col-auto">
                                <img width="240" height="160" src="<?= BASE_URL ?>/uploads/img/destination/<?= $destination['image'] ?>" class="img-rounded border-0">
                            </div>
                            <div class="col px-4">
                                <div>
                                    <div class="float-right"><?= getDateFormatToAgo($destination['updated_at']); ?></div>
                                    <a href="<?= BASE_URL ?>/destinations/show/<?= $destination['uid'] ?>"><h3><?= $destination['name'] ?></h3></a>   
                                    <p><i class="fa fa-tags fa-sm"></i> <?= $destination['category_name']; ?></p>
                                    <span>
                                    <?= substr(strip_tags(htmlspecialchars_decode(stripslashes($destination['description']))),0,200) . "..." ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php endforeach ?>
                    <?php else: ?>
                    <section class="content text-center">
                    <div class="not-found-page" style="margin-top:10%;">
                        <div class="not-found-content">
                        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Destinasi tidak ditemukan.</h3>
                        </div>
                    </div>
                    </section>
                    
                    <?php endif;  ?>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>