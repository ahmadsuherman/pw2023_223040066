<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Pengguna</span>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php?menu=users">Daftar</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-3">
                    <div class="card card-primary card-outline">
                    <div class="card-header">
                            <h3 class="card-title">Foto Profil</h3>
                        </div>
                        
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle mb-2" src="./assets/back-office/img/user4-128x128.jpg" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center m-auto"><?php if(isset($_SESSION['username'])) : echo $_SESSION['username']; endif; ?></h3>
                            <p class="text-muted text-center">Super Admin</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Detail Pengguna</h3>
                        </div>
                        <div class="card-body">
                            <dl class="row">
                            <dt class="col-sm-4"><i class="fas fa-user mr-1"></i> Username</dt>
                            <dd class="col-sm-8">ahmadsuherman</dd>
                            <dt class="col-sm-4"><i class="fas fa-paper-plane mr-1"></i> Email</dt>
                            <dd class="col-sm-8">ahmad.223040066@mail.unpas.ac.id</dd>
                            
                            <dt class="col-sm-4"><i class="far fa-file-alt mr-1"></i> NIK</dt>
                            <dd class="col-sm-8">1234567890123456</dd>
                            <dt class="col-sm-4"><i class="fas fa-phone mr-1"></i> Nomor Telepon</dt>
                            <dd class="col-sm-8">+62 82118342147</dd>
                            <dt class="col-sm-4"><i class="fas fa-map-marker-alt mr-1"></i> Alamat</dt>
                            <dd class="col-sm-8">Jl. Dr. Setiabudi, Sukasari. Bandung
                            </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>