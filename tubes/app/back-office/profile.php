<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Profile</span>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-3">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle mb-2" src="./assets/back-office/img/user4-128x128.jpg" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center m-auto"><?php if(isset($_SESSION['username'])) : echo $_SESSION['username']; endif; ?></h3>
                            <p class="text-muted text-center">Super Admin</p>
                            <div class="text-center">
                                <button class="btn btn-outline-primary btn-sm text-center" type="button"><i class="fa fa-edit"></i> Ubah Avatar</button>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Profile</h3>
                        </div>
                        <div class="card-body">
                            <strong>
                                <i class="fas fa-paper-plane mr-1"></i> Email </strong>
                            <p class="text-muted"> <?php if(isset($_SESSION['username'])) : echo $_SESSION['username']; endif; ?>@mail.unpas.ac.id </p>
                            <hr>
                            <strong>
                                <i class="fas fa-phone mr-1"></i> Telepon </strong>
                            <p class="text-muted"> +62 82118342147 </p>
                            <hr>
                            <strong>
                                <i class="far fa-file-alt mr-1"></i> NIK </strong>
                            <p class="text-muted">1234567890123456</p>
                            <hr>
                            <strong>
                                <i class="fas fa-map-marker-alt mr-1"></i> Alamat </strong>
                            <p class="text-muted">Jl. Dr. Setiabudi, Sukasari. Bandung</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <!-- <li class="nav-item">
                                    <a class="nav-link active" href="#activity" data-toggle="tab">Activity</a>
                                </li> -->
                                
                                <li class="nav-item">
                                    <a class="nav-link active" href="#settings" data-toggle="tab">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#password" data-toggle="tab">Kata Sandi</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- <div class="tab-pane" id="activity">
                                    <div class="timeline timeline-inverse">
                                        <div class="time-label">
                                            <span class="bg-danger"> 10 Feb. 2014 </span>
                                        </div>
                                        <div>
                                            <i class="fas fa-envelope bg-primary"></i>
                                            <div class="timeline-item">
                                                <span class="time">
                                                    <i class="far fa-clock"></i> 12:05 </span>
                                                <h3 class="timeline-header">
                                                    <a href="#">Support Team</a> sent you an email
                                                </h3>
                                                <div class="timeline-body"> Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora plaxo ideeli hulu weebly balihoo... </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="fas fa-user bg-info"></i>
                                            <div class="timeline-item">
                                                <span class="time">
                                                    <i class="far fa-clock"></i> 5 mins ago </span>
                                                <h3 class="timeline-header border-0">
                                                    <a href="#">Sarah Young</a> accepted your friend request
                                                </h3>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="fas fa-comments bg-warning"></i>
                                            <div class="timeline-item">
                                                <span class="time">
                                                    <i class="far fa-clock"></i> 27 mins ago </span>
                                                <h3 class="timeline-header">
                                                    <a href="#">Jay White</a> commented on your post
                                                </h3>
                                                <div class="timeline-body"> Take me to your leader! Switzerland is small and neutral! We are more like Germany, ambitious and misunderstood! </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="time-label">
                                            <span class="bg-success"> 3 Jan. 2014 </span>
                                        </div>
                                        <div>
                                            <i class="fas fa-camera bg-purple"></i>
                                            <div class="timeline-item">
                                                <span class="time">
                                                    <i class="far fa-clock"></i> 2 days ago </span>
                                                <h3 class="timeline-header">
                                                    <a href="#">Mina Lee</a> uploaded new photos
                                                </h3>
                                                <div class="timeline-body">
                                                    <img src="https://placehold.it/150x100" alt="...">
                                                    <img src="https://placehold.it/150x100" alt="...">
                                                    <img src="https://placehold.it/150x100" alt="...">
                                                    <img src="https://placehold.it/150x100" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="far fa-clock bg-gray"></i>
                                        </div>
                                    </div>
                                </div>
                                 -->
                                <div class="tab-pane active" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputName" placeholder="Name" value="<?php if(isset($_SESSION['username'])) : echo $_SESSION['username']; endif; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputUsername" placeholder="Username" value="<?php if(isset($_SESSION['username'])) : echo $_SESSION['username']; endif; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php if(isset($_SESSION['username'])) : echo $_SESSION['username']; endif; ?>@mail.unpas.ac.id.com">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputNIK" placeholder="NIK" value="1234567890123456">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Telepon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2" placeholder="Name" value="82118342147">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputAddress" placeholder="Address">Jl. Dr. Setiabudi, Sukasari. Bandu</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane" id="password">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Kata Sandi Lama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputCurentPassword" placeholder="Kata sandi lama" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Kata Sandi Baru</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputNewPassowrd" placeholder="Kata sandi baru" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="inputConfirmPassword" placeholder="Konfirmasi kata sandi" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-9">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
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