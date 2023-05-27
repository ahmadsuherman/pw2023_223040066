
<style>
    #mapid { min-height: 500px; }
</style> 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Main content -->
    <div class="content p-2">
      <div class="container">

        <div class="row">
          <div class="col-12">
          <h3 class="pt-1 pb-1">Peta Destinasi</h3>
          </div>
          <div class="col-12">
          <div class="card-body" id="mapid"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
          <h3 class="pt-1 pb-1">Destinasi Terbaru</h3>
          </div>

          <?php foreach($data['newDestinations'] as $key => $newDestination){ 
            if ($key === 0) {
              ?> 
              <div class="col-md-6">
                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="<?= BASE_URL ?>/back-office/img/photo1.png" alt="Gambar <?= $newDestination['name']; ?>">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white"><?= $newDestination['name']; ?></h5>
                  <a href="#" class="text-white">Terakhir diperbarui <?= getUpdatedAtFormatDestination($newDestination['updated_at']); ?></a>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row">
                
             <?php
            } else{
              ?>
                <div class="col-md-6">
                  <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="<?= BASE_URL ?>/back-office/img/photo1.png" alt="Gambar <?= $newDestination['name']; ?>">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-primary text-white"><?= $newDestination['name']; ?></h5>
                    <a href="#" class="text-white">Terakhir diperbarui <?= getUpdatedAtFormatDestination($newDestination['updated_at']); ?></a>
                    </div>
                  </div>
                </div>

              <?php
            }
          ?>
            
          <?php } ?>
          
              
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->