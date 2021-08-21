<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Klinik Rahayu</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url("assets/vendor/fontawesome-free/css/all.min.css"); ?> " rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Link Datatables -->
	<!-- <link href="<?= base_url("assets/vendor/datatables/dataTables.bootstrap4.min.js"); ?>" rel="stylesheet"> -->

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

	<!-- Custom styles for this template-->
	<link href="<?= base_url("assets/css/styling.min.css"); ?>" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" id="sidebarToggler" href="#">
				<div class="sidebar-brand-text mx-3">KLINIK RAHAYU</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('maincontroller'); ?>">
					<i class="fas fa-fw fa-tachometer-alt color-icon-1"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Menu
			</div>

			<!-- Nav Item - Pages Collapse Menu -->

			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDokter">
					<i class="fas fa-fw fa-user-md color-icon-2"></i>
					<span>Dokter</span>
				</a>
				<div id="collapseDokter" class="collapse" aria-labelledby="collapseDokter" data-parent="#accordionSidebar">
					<div class="bg-whiter py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?= base_url('doktercontroller/data_dokter'); ?>">Daftar Dokter</a>
						<a class="collapse-item" href="<?= base_url('doktercontroller/dokter_spesialis'); ?>">Dokter Spesialis</a>
						<a class="collapse-item" href="<?= base_url('doktercontroller/jadwal_dokter'); ?>">Jadwal Dokter</a>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-fw fa-stethoscope color-icon-3"></i>
					<span>Klinik</span>
				</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="#">Poliklinik</a>
						<a class="collapse-item" href="#">Spesialis</a>
					</div>
				</div>
			</li>

			<!-- Nav Item - Utilities Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
					<i class="fas fa-fw fa-pills color-icon-4"></i>
					<span>Apotek</span>
				</a>
				<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="#">Data Obat</a>
						<a class="collapse-item" href="#">Tebus Obat</a>
					</div>
				</div>
			</li>

			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
					<i class="fas fa-fw fa-user-friends color-icon-5"></i>
					<span>Pasien</span>
				</a>
				<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="#">Pasien Baru</a>
						<a class="collapse-item" href="#">Pasien Lama</a>
					</div>
				</div>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="#">
					<i class="fas fa-fw fa-user-friends color-icon-8"></i>
					<span>Suppliers</span>
				</a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Pengaturan
			</div>

			<li class="nav-item">
				<a class="nav-link" href="index.html">
					<i class="fas fa-fw fa-user-plus color-icon-6"></i>
					<span>Karyawan</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="index.html">
					<i class="fas fa-fw fa-user color-icon-7"></i>
					<span>Profile</span></a>
			</li>

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand  bg-custom-1 navbar-light topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
								<img class="img-profile rounded-circle" src="<?= base_url("assets/img/undraw_profile.svg"); ?>">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Settings
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
									Activity Log
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->
