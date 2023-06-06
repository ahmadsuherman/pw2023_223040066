<div class="content-wrapper">
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
      <div class="row mb-3 mt-3">
        <div class="col-12">
        <h3 class="pt-1 pb-1">Destinasi Terbaru</h3>
        </div>

        <?php foreach($data['newDestinations'] as $key => $newDestination){ 
          if ($key === 0) {
            ?> 
            <div class="col-md-6">
              <div class="card mb-2 bg-gradient-dark">
                <img height="510" class="card-img-top img-rounded" src="<?= BASE_URL ?>/uploads/img/destination/<?= $newDestination['image'] ?>" alt="Gambar <?= $newDestination['name']; ?>">
                <a href="<?= BASE_URL ?>/destinations/show/<?= $newDestination['uid']; ?>">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="text-white" style="font-size: 34px; font-weight: bold;"><?= $newDestination['name']; ?></h5>
                    <h6 class="text-white "> <i class="fa fa-tags fa-sm"></i> <?= $newDestination['category_name']; ?></h6>
                    <h5 class="text-white">Terakhir diperbarui <?= getUpdatedAtFormatDestination($newDestination['updated_at']); ?></h5>
                  </a>
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
                  <img width="100" height="250" class="card-img-top img-rounded" src="<?= BASE_URL ?>/uploads/img/destination/<?= $newDestination['image'] ?>" alt="Gambar <?= $newDestination['name']; ?>">
                  <a href="<?= BASE_URL ?>/destinations/show/<?= $newDestination['uid']; ?>">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="text-white" style="font-size: 24px; font-weight: bold;"><?= $newDestination['name']; ?></h5>
                    <h6 class="text-white "> <i class="fa fa-tags fa-sm"></i> <?= $newDestination['category_name']; ?></h6>
                    <h6 class="text-white">Terakhir diperbarui <?= getUpdatedAtFormatDestination($newDestination['updated_at']); ?></h6>
                  </a>
                  </div>
                </div>
              </div>
            <?php } ?>
        <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>