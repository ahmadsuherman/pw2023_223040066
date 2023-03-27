<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="./assets/logo-2.png" alt="Pasundan Tourism Logo" widht="150" height="50">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">home</a></li>
                                        <li><a class="" href="index.php?menu=about">Tentang Kami</a></li>
                                        <li><a class="" href="index.php?menu=destination">Destinasi</a></l/li>
                                        <li><a class="" href="index.php?menu=blog">Blog</a></l/li>
                                        <li><a class="" href="index.php?menu=contact">Kontak Kami</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="social_wrap d-flex align-items-center justify-content-end">
                                <div class="number">
                                    <p> <i class="fa fa-phone"></i> +62 821 1837 0988</p>
                                </div>
                                <div class="social_links d-none d-xl-block">
                                    <ul>
                                    <?php
                                        if(isset($_SESSION['username'])) { ?> <li><a href="dashboard.php"> Dashboard </a></li> 
                                        <?php } else {?> 
                                        
                                            <li><a href="index.php?menu=login"> Login </a></li>
                                            <li><a href="index.php?menu=register"> Daftar </a></li>
                                        
                                        <?php
                                        }
                                    ?>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="seach_icon">
                            <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->