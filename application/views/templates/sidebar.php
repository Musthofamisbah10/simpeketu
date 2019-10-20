	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href="index.html"><em class="fa fa-rocket"></em> Brand.name</a></h1>

				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link active" href="index.html"><em class="fa fa-dashboard"></em> Dashboard <span class="sr-only">(current)</span></a></li>
					<li class="parent nav-item"><a class="nav-link" data-toggle="collapse" href="#sub-item-1">
						<em class="fa fa-file-o">&nbsp;</em> Data Asrama <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><i class="fa fa-chevron-down"></i></span></a>
							<ul class="children collapse" id="sub-item-1">
								<li class="nav-item">
									<a class="nav-link" href="login.html">Data Pengurus</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="login.html">Data Anggota</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="login.html">Data Jabatan</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="login.html">Data Kadidat</a>
								</li>
							</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="charts.html"><em class="fa fa-bar-chart"></em> Grafik</a></li>
					<li class="nav-item"><a class="nav-link" href="widgets.html"><em class="fa fa-calendar-o"></em> Laporan</a></li>
				</ul>
				<a href="login.html" class="logout-button"><em class="fa fa-power-off"></em> Signout</a>
			</nav>
			
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Dashboard</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="images/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						<div class="username mt-1">
							<h4 class="mb-1">Username</h4>
							<h6 class="text-muted">Super Admin</h6>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
						<a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
						<a class="dropdown-item" href="#"><em class="fa fa-power-off mr-1"></em> Logout</a></div>
					</div>
					<div class="clear"></div>
				</header>