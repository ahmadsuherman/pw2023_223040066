<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Kategori</span>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>/category">Daftar</a></li>
                        <li class="breadcrumb-item active">Ubah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row d-flext justify-content-center">
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
                            <h3 class="card-title">Ubah Kategori</h3>
                        </div>
                        <form data-form="validate" class="form-horizontal" action="<?= BASE_URL ?>/category/update/<?= $data['category']['uid'] ?>" method="post">
                            <input type="hidden" name="submit">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="iName" class="col-form-label col-sm-3 text-lg-right text-left">Nama</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iName" placeholder="Nama" required value="<?= $data['category']['name']; ?>" name="name">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button name="submit" type="submit" class="btn btn-info mr-2"><i class="fa fa-save mr-1"></i> Simpan</button>
                                    <a href="<?= BASE_URL ?>/category" class="btn btn-default">Batal</a>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>