<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Destinasi</span>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Daftar</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <?php if(isset($_SESSION['alert'])) : ?>
                <div class="col-12">
                    <div class="alert alert-<?=$_SESSION['alert']['type']?> alert-dismissible fade show" role="alert">
                    <?=$_SESSION['alert']['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                </div>
                <?php unset($_SESSION['alert']); endif; ?>
                
                <div class="col-md-2 mb-4">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-title">Gambar Destinasi</div>
                    </div>
                    <div class="card-body">
                        <img src="<?= BASE_URL ?>/uploads/img/destination/<?= $data['destination']['image'] ?>" alt="Gambar <?= $data['destination']['name'] ?>" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-title">Detail Destinasi</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr><th>Nama</th><td><?= $data['destination']['name'] ?></td></tr>
                                        <tr><th>Kategori</th><td><?= $data['destination']['category_name'] ?></td></tr>
                                        <tr><th>Deskripsi</th><td><?= htmlspecialchars_decode(stripslashes($data['destination']['description'])) ?></td></tr>
                                        <tr><th>Latitude</th><td><?= $data['destination']['latitude'] ?></td></tr>
                                        <tr><th>Longitude</th><td><?= $data['destination']['longitude'] ?></td></tr>
                                        <tr><th>Tgl Dibuat</th><td><?= $data['destination']['created_at'] ?></td></tr>  
                                        <tr><th>Tgl Diperbarui</th><td><?= $data['destination']['updated_at'] ?></td></tr>  
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <a href="<?= BASE_URL ?>/destination/edit/ <?= $data['destination']['uid'] ?>" id="edit-plant-<?= $data['destination']['uid'] ?>" class="btn btn-info">Ubah</a>
                        <button onclick="deleteData('<?= $data['destination']['uid'] ?>', '<?= $data['destination']['name'] ?>', 'Destinasi')" id="delete-plant-<?= $data['destination']['uid'] ?>" class="btn btn-danger">Hapus</button>
                        <a href="<?= BASE_URL ?>/destination" class="btn btn-link">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-title">Lokasi</div>
                    </div>
                    
                    <div class="card-body" id="mapid"></div>
                    
                </div>
            </div>
            </div>
        </div>
    </section>
</div>

