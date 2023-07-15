<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Profil</span>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            
            <div class="row d-flex justify-content-center">
                <div class="col-md-11">
                    <?php if(isset($_SESSION['alert'])) : ?>
                    <div class="alert alert-<?=$_SESSION['alert']['type']?> alert-dismissible fade show" role="alert">
                    <?=$_SESSION['alert']['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php unset($_SESSION['alert']); endif; ?>
                </div>
                <div class="col-md-3">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= getProfilePicture($data['user']['avatar'])?>" alt="Avatar <?= $data['user']['name']; ?>">
                            </div>
                            <strong>
                                <i class="fas fa-user mr-1"></i> Nama </strong>
                            <p class="text-muted"> <?= $data['user']['name']; ?> </p>
                            <hr>
                            <strong>
                                <i class="fas fa-paper-plane mr-1"></i> Email </strong>
                            <p class="text-muted"><?= $data['user']['email']; ?></p>
                         
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-primary card-outline">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#settings" data-toggle="tab">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#email" data-toggle="tab">Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#password" data-toggle="tab">Kata Sandi</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="settings">
                                    <form data-form="validate" class="form-horizontal" action="<?= BASE_URL ?>/profile/update" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="submit">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <div id="imagepPreviewProfilePicture">
                                                    <img class="profile-user-img img-fluid img-circle" src="<?= getProfilePicture($data['user']['avatar'])?>" alt="Avatar <?= $data['user']['name'] ?>">
                                                </div>
                                                <input name="avatar" onchange="previewProfilePicture(event)" accept="image/*" type="file" style="position: absolute; bottom: 0; left: 0;">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" id="inputName" placeholder="Nama" value="<?= $data['user']['name'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary"> <i class="fa fa-save"> </i> Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane" id="email">
                                <form data-form="validate" class="form-horizontal" action="<?= BASE_URL ?>/profile/updateEmail" method="post">
                                    <input type="hidden" name="submit">
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?= $data['user']['email']?>" required data-parsley-checkemail>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary"> <i class="fa fa-save"> </i> Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane" id="password">
                                    <form class="form-horizontal" data-form="validate" action="<?= BASE_URL ?>/profile/updatePassword" method="post">
                                        <input type="hidden" name="submit">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Kata Sandi Saat Ini</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="inputCurentPassword" placeholder="Kata sandi saat ini" value="" name="current_password" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Kata Sandi Baru</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="inputNewPassowrd" placeholder="Kata sandi baru" value="" name="password" required data-parsley-minlength="8">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Konfirmasi kata sandi" value="" name="password_confirm" required required data-parsley-equalto="#inputNewPassowrd">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-9">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> </i> Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>