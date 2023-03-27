<?php
    if (isset($_POST['_token'])) {
        echo "<meta http-equiv='refresh' content='0; url=index.php?menu=login'>";
        $_SESSION['alert'] = [
            'type'      => 'success',
            'message'   =>'Akun berhasil ditambahkan!'
        ];
    }
?>

<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9">
                <div class="contact_join">
                    <h3 class="text-center">Pasundan Tourism</h3>
                    <form action="" data-form="validate" method="POST">
                        <input name="_token" type="hidden" value="<?= generateRandomString(60) ?>">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="single_input">
                                    <input type="text" placeholder="Nama Lengkap" required data-parsley-required-message="Nama lengkap harus diisi" data-parsley-trigger="keyup">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="single_input">
                                    <input type="text" placeholder="Username" required data-parsley-required-message="Username harus diisi" data-parsley-trigger="keyup">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="single_input">
                                    <input type="text" placeholder="Email" data-parsley-type-message="Email tidak valid" data-parsley-type="email" data-parsley-trigger="keyup" required data-parsley-required-message="Email harus diisi">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 input-group-icon">
                                <div class="single_input">
                                    <input type="password" placeholder="Kata Sandi" id="iPassword" required data-parsley-required-message="Kata sandi baru harus diisi" data-parsley-minlength-message="Panjang minimal 8 karakter" required data-parsley-minlength="8" data-parsley-trigger="keyup">
                                </div>
                                <div class="icon">
                                    <i class="fa fa-eye-slash togglePassword" aria-hidden="true" onclick="togglePassword(this, '#iPassword')"></i>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 input-group-icon">
                                <div class="single_input">
                                    <input type="password" placeholder="Konfirmasi Kata Sandi" id="iPasswordConfirm" data-parsley-required-message="Konfirmasi kata sandi harus diisi" data-parsley-equalto-message="Konfirmasi kata sandi harus sama" required data-parsley-equalto="#iPassword" data-parsley-trigger="keyup">
                                </div>
                                <div class="icon">
                                    <i class="fa fa-eye-slash togglePassword" aria-hidden="true" onclick="togglePassword(this, '#iPasswordConfirm')"></i>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="submit_btn">
                                    <button type="submit" class="boxed-btn4">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>