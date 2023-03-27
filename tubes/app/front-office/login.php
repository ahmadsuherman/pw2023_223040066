<?php
    if (isset($_POST['_token'])) {
        $_SESSION['username'] = $_POST['username'];
        echo "<meta http-equiv='refresh' content='0; url=dashboard.php'>";
    }
?>


<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">   
            <div class="col-lg-8 col-md-9">
                
                <?php if(isset($_SESSION['alert'])) : ?>
                <div class="alert alert-<?=$_SESSION['alert']['type']?> alert-dismissible fade show" role="alert">
                <?=$_SESSION['alert']['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php unset($_SESSION['alert']); endif; ?>
                
                <div class="contact_join">
                    <h3 class="text-center">Pasundan Tourism</h3>
                    <form action="" data-form="validate" method="post" novalidate>
                        <input name="_token" type="hidden" value="<?= generateRandomString(60) ?>">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="single_input">
                                    <input name="username" type="text" placeholder="Username" required data-parsley-required-message="Username harus diisi" data-parsley-trigger="keyup"> 
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 input-group-icon">
                                <div class="single_input">
                                    <input name="password" type="password" placeholder="Kata Sandi" id="iPassword" required data-parsley-required-message="Kata sandi harus diisi" data-parsley-trigger="keyup">
                                </div>
                                <div class="icon">
                                    <i class="fa fa-eye-slash togglePassword" aria-hidden="true" onclick="togglePassword(this, '#iPassword')"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="submit_btn">
                                    <input  type="submit" name="simpan" class="btn-block boxed-btn4" value="Masuk"></input>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


