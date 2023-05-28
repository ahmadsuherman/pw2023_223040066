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
                <div class="col m-auto">
                    <div class="float-right">
                        <a href="<?= BASE_URL ?>/destination/create" class="btn btn-primary"> <i class="fa fa-plus-circle mr-1"></i> Buat Baru</a>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-11">
                <?php if(isset($_SESSION['alert'])) : ?>
                <div class="alert alert-<?=$_SESSION['alert']['type']?> alert-dismissible fade show" role="alert">
                <?=$_SESSION['alert']['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php unset($_SESSION['alert']); endif; ?>
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Destinasi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="dataTable table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-right" width="5">No</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($data['destinations'] as $key => $destination) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $destination['name']; ?></td>
                                        <td><?= $destination['category_name']; ?></td>
                                        <td><?= $destination['latitude']; ?></td>
                                        <td><?= $destination['longitude']; ?></td>
                                        
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <a href="<?= BASE_URL .'/destination/show/'. $destination['uid']?>" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a>
                                                <a href="<?= BASE_URL .'/destination/edit/'. $destination['uid']?>" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    endforeach;
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>