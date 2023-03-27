<?php
if (isset($_POST['_token'])) {
    $_SESSION['alert'] = [
        'type'      => 'success',
        'message'   => $_POST['name'] . ' berhasil ditambahkan'
    ];
    echo "<meta http-equiv='refresh' content='0; url=dashboard.php?menu=users'>";
}
?>

<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Pengguna</span>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php?menu=users">Daftar</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row d-flext justify-content-center">
                <div class="col-11">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Pengguna</h3>
                        </div>
                        <form class="form-horizontal" action="" method="post">
                            <input name="_token" type="hidden" value="<?= generateRandomString(60) ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="iName" class="col-form-label col-sm-3 text-lg-right text-left">Nama Lengkap</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iName" placeholder="Nama lengkap" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iRole" class="col-form-label col-sm-3 text-lg-right text-left">Peran</label>
                                    <div class="col-sm-6">
                                       <select name="roles" class="form-control" id="iRole">
                                            <option value="">Pilih peran</option>
                                            <option value="">Admin</option>
                                            <option value="">Guest</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iUsername" class="col-form-label col-sm-3 text-lg-right text-left">Username</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iUsername" placeholder="Username" name="username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iEmail" class="col-form-label col-sm-3 text-lg-right text-left">Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="iEmail" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iPassword" class="col-form-label col-sm-3 text-lg-right text-left">Kata Sandi</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iPassword" placeholder="Kata sandi" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iPasswordConfirm" class="col-form-label col-sm-3 text-lg-right text-left">Konfirmasi Kata Sandi</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iPasswordConfirm" placeholder="Konfirmasi kata sandi" name="password_confirm">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="iNIK" class="col-form-label col-sm-3 text-lg-right text-left">NIK</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iNIK" placeholder="Nomor induk kependudukan" name="nik">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="iPhoneNumber" class="col-form-label col-sm-3 text-lg-right text-left">Nomor Telepon</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">+62</span>
                                            </div>
                                            <input type="number" id="iPhoneNumber" name="phone_number" class="form-control" placeholder="Nomor telepon" data-type="tel">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="iAddress" class="col-form-label col-sm-3 text-lg-right text-left">Alamat</label>
                                    <div class="col-sm-6">
                                        <textarea name="address" class="form-control" id="iAddress" cols="30" rows="3" placeholder="Alamat"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button name="submit" type="submit" class="btn btn-info mr-2"><i class="fa fa-save mr-1"></i> Simpan</button>
                                    <a href="dashboard.php?menu=users" class="btn btn-default">Batal</a>
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