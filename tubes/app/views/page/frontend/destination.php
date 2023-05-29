<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Main content -->
    <div class="content p-2">
      <div class="container">

        <div class="row">
          <div class="col-12">
          <h3 class="pt-1 pb-1" style="font-family: 'Playfair Display';">Daftar Destinasi</h3>
          </div>
          <div class="col-12">
          <div class="row d-flex justify-content-center">
          <?php foreach($data['dataDestinations'] as $key => $newDestination){ ?>
              <div class="col-md-3">
                <div class="card mb-2 bg-gradient-dark">
                  <img height="280" class="card-img-top img-rounded" src="<?= BASE_URL ?>/uploads/img/destination/<?= $newDestination['image'] ?>" alt="Gambar <?= $newDestination['name']; ?>">
                  
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <a href="<?= BASE_URL ?>/destinations/show/<?= $newDestination['uid']?>" class="text-white">
                  <h5 class="text-white " style="font-size: 24px; font-weight: bold;"><?= $newDestination['name']; ?></h5>
                  <h6 class="text-white "> <i class="fa fa-tags fa-sm"></i> <?= $newDestination['category_name']; ?></h6>
                  
                  <h5>Terakhir diperbarui <?= getUpdatedAtFormatDestination($newDestination['updated_at']); ?></h5>
                
                  </a>
                  </div>
                </div>
              </div>
          <?php } ?>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-1 m-auto">
              <nav>
                <ul class="pagination">
                  <li class="page-item <?= $data['pageNow'] == 1 ? "disabled" : ""; ?>" aria-disabled="true" aria-label="« Previous">
                    <a class="page-link" href="?page=1" rel="next" aria-label="« Previous">‹</a>
                  </li>
                  <?php for ($i = 1; $i <= $data['totalPage']; $i++) { ?>
                    <li class="page-item">
                      <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                  <?php } ?>
                  <li class="page-item <?= $data['pageNow'] == $data['totalPage'] ? "disabled" : ""; ?>">
                    <a class="page-link" href="?page=<?php echo $data['totalPage']; ?>" rel="next" aria-label="Next »">›</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          </div>
        </div>
        
        <!-- /.row -->
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  