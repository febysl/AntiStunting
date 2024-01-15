<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Anti Stunting</title>

    <!-- Favicon -->
    <!-- <link rel="icon" href="img/favicon.png"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/css/magnific-popup.css">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets_frontend/favicon.png">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_frontend/css/responsive.css">

    <style>
        .pagination {
            text-align: unset;
            margin: unset;
            display: flex;
        }

        .header .nav li a {
            color: #A7CAFF;
            font-weight: 500;
            text-transform: capitalize;
        }

        .header .nav li {
            margin-right: 25px;
        }

        .section {
            padding: 60px 0;
        }

        .footer .copyright {
            background: #A7CAFF !important;
        }

        #scrollUp {
            background: #A7CAFF !important;
        }

        .preloader::before {
            width: 0;
        }

        .preloader::after {
            width: 100%;
            background: url('<?php echo base_url(); ?>assets_frontend/img/logo/loading.svg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media (min-width: 1280px) {
            .btn-menu-last {
                background: #A7CAFF !important;
                color: white !important;
                padding-left: 40px !important;
                padding-right: 40px !important;
                border-radius: 10px !important;
            }

            .header .nav li a {
                color: #A7CAFF;
                font-size: 20px;
                font-weight: 500;
                text-transform: capitalize;
                padding: 25px 12px;
                position: relative;
                display: inline-block;
                position: relative;
            }

            .header .nav li:last-child {
                margin-left: 30%;
            }
        }
    </style>

</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <!-- <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div> -->
    </div>
    <!-- End Preloader -->


    <!-- Header Area -->
    <header class="header">
        <!-- Topbar -->
        <div class="topbar" style="background: #A7CAFF; height: 90px;">
        </div>
        <!-- End Topbar -->
        
        <!-- Header Inner -->
        <div style="margin-top: -4%;">
            <div class="header-inner" style="width: 80%; margin: auto; border-radius: 20px; box-shadow: -2px 4px 8px 1px rgba(50,50,50,0.59); -webkit-box-shadow: -2px 4px 8px 1px rgba(50,50,50,0.59); -moz-box-shadow: -2px 4px 8px 1px rgba(50,50,50,0.59);">
                <div class="container">
                    <div class="inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12">
                                <!-- Start Logo -->
                                <div class="logo" style="text-align: center;">
                                    <a href="<?php echo base_url(); ?>"><img style="height: 100px; width: auto; text-align: center; margin-bottom: 10px;" src="<?php echo base_url(); ?>assets_frontend/img/logo/logo.png" alt="#"></a>
                                </div>
                                <!-- End Logo -->
                                <!-- Mobile Nav -->
                                <div class="mobile-nav"></div>
                                <!-- End Mobile Nav -->
                            </div>
                            <div class="col-lg-9 col-md-9 col-12" style="align-self: center;">
                                <!-- Main Menu -->
                                <div class="main-menu">
                                    <nav class="navigation">
                                        <ul class="nav menu">
                                            <li><a href="<?php echo base_url(); ?>home">Beranda </a></li>
                                            <li><a href="<?php echo base_url(); ?>home/edukasi">Edukasi</a></li>
                                            <li><a href="<?php echo base_url(); ?>home/tentang">Tentang</a></li>
                                            <li><a class="btn-menu-last" href="<?php echo base_url(); ?>home/login">Login</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->