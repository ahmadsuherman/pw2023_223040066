<div class="content-wrapper" style="min-height: 774.805px;">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4 placeholder">Dashboard</span>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">

            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="small-box bg-primary">
                    <div class="inner">
                        <p>Total Kategori</p>
                        <h5 class="text-center"><?= $data['getCountTotalCategoryDashboard'][0]['total_category'] ?> Item</h5>
                    </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <p>Total Destinasi</p>
                        <h5 class="text-center"><?= $data['getCountTotalDestinationDashboard'][0]['total_destination'] ?> Item</h5>
                    </div>
                    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <p>Total Pengguna</p>
                        <h5 class="text-center"><?= $data['getCountTotalUserDashboard'][0]['total_user'] ?> Akun</h5>
                    </div>
                    
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-7">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah Pengguna Berdasarkan Tanggal</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="newUserDashboard"></canvas>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title"><?= count($data['getNewUserRegistrationDashboard']) ?> Destinasi Baru</h3>
                        </div>

                        <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <?php foreach($data['getNewDestinationDashboard'] as $key => $newDestination): ?>
                            <li class="item">

                                <div class="product-img">
                                    <img src="<?= BASE_URL ?>/uploads/img/destination/<?= $newDestination['image'] ?>" alt="Gambar <?= $newDestination['name'] ?>" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <span class="product-title"><?= $newDestination['name'] ?></span>
                                    <span class="badge badge-warning float-right"><?= getDateFormatDFYIndonesian($newDestination['created_at']) ?></span></span>
                                    <span class="product-description">
                                        <?= $newDestination['category_name'] ?>
                                    </span>
                                </div>
                            </li>
                            <?php endforeach; ?>

                        </ul>
                        </div>

                    </div>
                </div>

                
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-2">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title"><?= count($data['getNewUserRegistrationDashboard']) ?> Pengguna Baru Registasi</h3>
                        </div>

                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <?php foreach($data['getNewUserRegistrationDashboard'] as $key => $newUserRegistration): ?>
                                <li class="item">
                                    <div class="new-user ml-3">
                                        <span href="javascript:void(0)" class="product-title"><?= $newUserRegistration['name'] ?></span>
                                        <span class="badge badge-warning float-right"><?= getDateFormatDFYIndonesian($newUserRegistration['created_at']) ?></span></span>
                                        <span class="product-description m-auto">
                                            <?= $newUserRegistration['email'] ?>
                                        </span>
                                    </div>
                                </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>

                    </div>
                </div>
            
                <div class="col-md-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah Destinasi Berdasarkan Kategori</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="destinationGroupByCategoryDashboard"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah Kategori Berdasarkan Status</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="categoryGroupByIsActive"></canvas>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
</div>
