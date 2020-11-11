<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
</head>

<body>

<div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                <a href="<?php echo base_url();?>admin/index"><h2 style="color:white; float:right">WisataKuy</h2></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="<?php echo base_url();?>admin/index"aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>user/index" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Data User
                                    </span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>admin/dataAdmin" aria-expanded="true"><i class="ti-pie-chart"></i><span>Data Admin</span></a>
                                </li>
                            <li>
                                <a href="#" aria-expanded="true"><i class="ti-palette"></i><span>Data Transaksi</span></a>
                                
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>wisata/index" aria-expanded="true"><i class="ti-slice"></i><span>Data Wisata</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="main-content">
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><?=$title?></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="<?php echo base_url();?>assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Hello, <?= $this->session->userdata('user');?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url();?>login/logout"><i class="fa fa-power-off"></i> &nbsp;&nbsp;&nbsp;&nbsp;Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>