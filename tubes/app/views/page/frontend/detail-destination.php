<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="content p-2 pt-1 pb-1">
        
      <div class="container">

        <div class="row">
            <div class="col-md-12">
            <img style="min-width: 100%" class="img-fluid rounded float-left" src="<?= BASE_URL ?>/uploads/img/destination/<?= $data['destination']['image'] ?>" alt="Gambar <?= $data['destination']['name']; ?>">
            </div>
            <div class="col-md-12">
                <h2 class="font-weight-bold"><?= $data['destination']['name']; ?></h2> 
                <h5 class="font-weight-bold"> <i class="fa fa-tags fa-sm"></i> <?= $data['destination']['category_name']; ?> &nbsp
                <span class="h5 font-weight-bold"> <i class="fa fa-edit fa-sm"></i> <?= getUpdatedAtFormatDestination($data['destination']['updated_at']); ?></span></h5>
            </div>

            <div class="col-md-12">
            <?= htmlspecialchars_decode(stripslashes($data['destination']['description'])) ?>
            </div>
            <div class="col-md-12 mt-2">
                <h4>Bagikan</h4>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-success btn-block" onclick="shareTo('whatsapp')"><i class="fab fa-whatsapp"></i> Whatsapp</button>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-primary btn-block" onclick="shareTo('telegram')"><i class="fab fa-telegram"></i> Telegram</button>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-info btn-block" onclick="shareTo('twitter')"><i class="fab fa-twitter"></i> Twitter</button>
            </div>
            <!-- <div class="col-md-3">
                <button type="button" class="btn btn-primary btn-block" onclick="shareTo('facebook')"><i class="fab fa-facebook"></i> Facebook</button>
            </div> -->
            <div class="col-md-12 mt-4">
                <div class="card-body" id="mapid"></div>
            </div>
        </div>
        
        <!-- /.row -->
      </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->