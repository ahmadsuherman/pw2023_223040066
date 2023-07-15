<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Kategori</span>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>/user">Daftar</a></li>
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
                            <h3 class="card-title">Ubah Pengguna</h3>
                        </div>
                        <form class="form-horizontal" data-form="validate" action="<?= BASE_URL ?>/user/update/<?= $data['user']['uid'] ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="submit">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="offset-3 col-md-6">
                                        <div id="imagepPreviewProfilePicture">
                                            <img class="profile-user-img img-fluid img-circle" src="<?= getProfilePicture($data['user']['avatar']) ?>" alt="Avatar <?= $data['user']['name']; ?>">
                                        </div>
                                        <input name="avatar" onchange="previewProfilePicture(event)" accept="image/*" type="file" style="position: absolute; bottom: 0; left: 0;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iName" class="col-form-label col-sm-3 text-lg-right text-left">Nama Lengkap</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iName" placeholder="Nama" name="name" required value="<?= $data['user']['name'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iEmail" class="col-form-label col-sm-3 text-lg-right text-left">Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="iEmail" placeholder="Email" name="email" required value="<?= $data['user']['email'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iLevel" class="col-form-label col-sm-3 text-lg-right text-left">Tipe Pengguna</label>
                                    <div class="col-sm-6">
                                        <select name="level" class="form-control" id="iLevel" required>
                                            <option <?= $data['user']['level'] == 'Admin' ? 'selected' : '';  ?> value="Admin">Admin</option>
                                            <option <?= $data['user']['level'] == 'Pengguna' ? 'selected' : '';  ?>  value="Pengguna">Pengguna</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-info mr-2"><i class="fa fa-save mr-1"></i> Simpan</button>
                                    <a href="<?= BASE_URL ?>/user" class="btn btn-default">Batal</a>
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