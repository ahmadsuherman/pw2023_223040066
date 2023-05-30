<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Main content -->
    <div class="content p-2">
      <div class="container">

        <div class="row mt-3">
            <div class="col-md-10 offset-md-1">
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
                                    <div class="float-right"><?= getUpdatedAtFormatDestination($destination['updated_at']); ?></div>
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
                    <h3 class="m-auto">Destinasi tidak ditemukan</h3>
                    <?php endif;  ?>
                    
                   
                    

                </div>
            </div>
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->