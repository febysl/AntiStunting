<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Anti Stunting - Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets_frontend/favicon.png">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="sidebar-brand-text mx-3" style="font-size: 13px;">Halaman Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php if ($_SESSION['role'] == 'posyandu') { ?>
                <li class="nav-item <?php if ($active == 'dataset') {
                                        echo 'active c-active';
                                    } ?>">
                    <a class="nav-link" href="<?php echo base_url(); ?>panel/daftar_dataset">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Data Balita</span></a>
                </li>

            <?php } else { ?>

                <li class="nav-item <?php if ($active == 'dashboard') {
                                        echo 'active c-active';
                                    } ?>">
                    <a class="nav-link" href="<?php echo base_url(); ?>panel">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'user') { ?>
                    <li class="nav-item <?php if ($active == 'datauser' || $active == 'dataset' || $active == 'datalatih') {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link <?php if ($active == 'datauser' || $active == 'dataset' || $active == 'datalatih') {
                                                echo 'c-active';
                                            } else {
                                                echo 'collapsed';
                                            } ?>" href="#" data-toggle="collapse" data-target="#collapseTwos" aria-expanded="true" aria-controls="collapseTwos">
                            <i class="fas fa-fw fa-list"></i>
                            <span>Data Master</span>
                        </a>
                        <div id="collapseTwos" class="collapse  <?php if ($active == 'datauser' || $active == 'dataset' || $active == 'datalatih') {
                                                                    echo 'show';
                                                                } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="py-2 collapse-inner rounded bg-white">
                                <a class="collapse-item" href="<?php echo base_url(); ?>panel/daftar_puskesmas">Data Puskesmas</a>
                                <a class="collapse-item" href="<?php echo base_url(); ?>panel/daftar_databalita">Data Anak</a>
                                <a class="collapse-item" href="<?php echo base_url(); ?>panel/daftar_grafik">Data Grafik</a>
                                <a class="collapse-item" href="<?php echo base_url(); ?>panel/daftar_peta">Data Peta</a>
                                <!-- <a class="collapse-item" href="<?php echo base_url(); ?>panel/daftar_datalatih">Data Latih</a> -->
                                <?php if ($_SESSION['role'] == 'admin') { ?>
                                    <!-- <a class="collapse-item" href="<?php echo base_url(); ?>panel/daftar_user">Data User</a> -->
                                <?php } ?>
                            </div>
                        </div>
                    </li>

                    <?php if ($_SESSION['role'] == 'admin') { ?>
                        <li class="nav-item <?php if ($active == 'klasifikasi') {
                                                echo 'active c-active';
                                            } ?>">
                            <a class="nav-link" href="<?php echo base_url(); ?>panel/pengujian_knn">
                                <i class="fas fa-fw fa-search"></i>
                                <span>Pengujian Stunting</span></a>
                        </li>
                    <?php } ?>

                <?php } ?>

                <li class="nav-item <?php if ($active == 'laporan') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link <?php if ($active == 'laporan') {
                                            echo 'c-active';
                                        } else {
                                            echo 'collapsed';
                                        } ?>" href="#" data-toggle="collapse" data-target="#collapseC" aria-expanded="true" aria-controls="collapseC">
                        <i class="fa-fw fa fa-file"></i>
                        <span>Laporan</span>
                    </a>
                    <div id="collapseC" class="collapse <?php if ($active == 'laporan') {
                                                            echo 'show';
                                                        } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded bg-white">
                            <a class="collapse-item" href="<?php echo base_url(); ?>panel/grafik_pengujian">Hasil Klasifikasi</a>
                            <a class="collapse-item" href="<?php echo base_url(); ?>panel/hasil_akurasi">Hasil Akurasi</a>
                        </div>
                    </div>
                </li>

            <?php } ?>

            <li class="nav-item <?php if ($active == 'data_admin') {
                                    echo 'active c-active';
                                } ?>">
                <a class="nav-link" href="<?php echo base_url(); ?>panel/data_admin">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profil</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-arrow-left"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="<?php echo $_SESSION['foto']; ?>">
                                <span class="ml-2 d-none d-lg-inline text-gray-600 small"><strong><?php echo $_SESSION['nama']; ?></strong></span>
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo base_url(); ?>panel/data_admin">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->