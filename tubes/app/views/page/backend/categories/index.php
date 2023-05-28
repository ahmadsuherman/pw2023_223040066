<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Kategori</span>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Daftar</li>
                    </ol>
                </div>
                <div class="col m-auto">
                    <div class="float-right">
                        <a href="<?= BASE_URL ?>/category/create" class="btn btn-primary"> <i class="fa fa-plus-circle mr-1"></i> Buat Baru</a>  
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
                            <h3 class="card-title">Daftar Kategori</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="dataTable table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-right" width="5">No</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($data['categories'] as $key => $category) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $category['name']; ?></td>
                                        <td>
                                            <?php if($category['is_active']){
                                                echo "<span class='badge badge-primary'>Aktif</span>";
                                            } else{
                                                echo "<span class='badge badge-danger'>Tidak Aktif</span>";
                                            }
                                            ?>
                                            </td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="dashboard.php?menu=detail-categories&id=1" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a> -->
                                                <a href="<?= BASE_URL .'/category/edit/'. $category['uid']?>" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                                
                                                <?php if($category['is_active']){ ?>
                                                    <button href="javascript:;" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Non Aktifkan"><i class="fas fa-fw fa-toggle-on" onclick="updateStatus('<?= $category['uid'] ?>' , '<?=  $category['name'] ?>')"></i></button>
                                                <?php } else{ ?> 
                                                    <button href="javascript:;" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Aktifkan"><i class="fas fa-fw fa-toggle-off" onclick="updateStatus('<?= $category['uid'] ?>' , '<?=  $category['name'] ?>')"></i></button>
                                                <?php }
                                                ?> 
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