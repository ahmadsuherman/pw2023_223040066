<nav class="main-header navbar navbar-expand navbar-primary navbar-light">
    
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<img src="./assets/back-office/img/avatar.png" class="user-image img-circle elevation-2" alt="User Image">
					<span class="d-none d-md-inline">
					<?php if(isset($_SESSION['username'])) : echo $_SESSION['username']; endif; ?>
					</span>
				</a>
				<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
					<!-- User image -->
					<li class="user-header bg-primary">
						<img src="./assets/back-office/img/avatar.png" class="img-circle elevation-2 prof_image" alt="User Image">
						<p>
							<?php if(isset($_SESSION['username'])) : echo $_SESSION['username']; endif; ?>
                            <small><?php if(isset($_SESSION['username'])) : echo $_SESSION['username']; endif; ?>@mail.unpas.ac.id</small>
						</p>
					</li>
					<!-- Menu Footer-->
					<li class="user-footer">
						<a href="dashboard.php?menu=profile" class="btn btn-default btn-flat">Profile</a>
						<a href="dashboard.php?menu=logout" class="btn btn-default btn-flat float-right">Keluar</a>
					</li>
				</ul>
			</li>
    </ul>
</nav>