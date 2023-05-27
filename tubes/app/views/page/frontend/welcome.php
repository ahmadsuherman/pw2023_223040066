<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />

<style>
    #mapid { min-height: 500px; }
</style> 
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container">

        <div class="row">
          <div class="col-12">
          <h3 class="mt-4 mb-4">Peta Destinasi</h3>
          </div>
          <div class="col-12">
          <div class="card-body" id="mapid"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
          <h3 class="mt-4 mb-4">Destinasi Terbaru</h3>
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
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>

<script>
        var map = L.map('mapid').setView([-2.4833826, 117.8902853], 5);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="#">Ahmad Suherman</a>'
        }).addTo(map);
        var markers = L.markerClusterGroup();

        <?php
        // Retrieve Grouped Locations
        $groupedLocations = $data['destinations'];
        if ($groupedLocations) {
            $markers = '';

            foreach ($groupedLocations as $group) {
                $coordinates = explode(';', $group['coordinates']);
                $coordinatesGroup = '';

                foreach ($coordinates as $coordinate) {
                    $coords = explode(',', $coordinate);
                    $latitude = $coords[0];
                    $longitude = $coords[1];
                    $coordinatesGroup .= "[$latitude, $longitude],";
                }

                $coordinatesGroup = rtrim($coordinatesGroup, ',');

                $category = $group['category_name'];
                $name = $group['name'];
                
                $markers .= "var coordinatesGroup = [$coordinatesGroup];
                            var category = '$category';
                            var content = '<strong>Nama: </strong>$name <br> <strong>Kategori: </strong>$category <br> ';
                            
                            var markerOptions = { 
                              title: name,
                              
                            };
                            var marker = L.marker(coordinatesGroup[0], markerOptions).bindPopup(content);
                            markers.addLayer(marker);";
            }

            echo $markers;
        } else {
            echo "console.log('Failed to retrieve grouped locations.');";
        }
        ?>

        map.addLayer(markers);
    </script>