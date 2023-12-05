<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url( 'dashboard' ); ?>" class="brand-link">
        <img src="<?php echo base_url(); ?>assets/admin/dist/img/GTLOGOBiru.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">JobSetup</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url(); ?>assets/admin/dist/img/av2.png" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo base_url( 'profil' ); ?>" class="d-block">
                    <?php echo $this->session->userdata( 'nama' ); ?>
                    <br><small>
                        <?php echo $this->session->userdata( 'id_user' ); ?><br>
                        (
                        <?php echo $this->session->userdata( 'akses_level' ); ?>)
                    </small>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <!-- DASHBOARD PAGE -->
                <li class="nav-item">
                    <a href="<?php echo base_url( 'dashboard' ); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>

                <!-- JIKA LOGIN SEBAGAI ADMIN -->
                <!-- <?php if ($this->session->userdata( 'akses_level' ) == "Admin") { ?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-lock"></i>
                            <p>
                                Data User/Admin
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url( 'user' ); ?>" class="nav-link">
                                    <i class="fas fa-table nav-icon"></i>
                                    <p>Data User Admin</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url( 'user/tambah' ); ?>" class="nav-link">
                                    <i class="fas fa-plus-circle nav-icon"></i>
                                    <p>Tambah Data User</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?> -->

                <!-- MENU DATA DENYUT NADI, NON AKTIFKAN -->
                <!-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-heart"></i>
                        <p>
                            Denyut Nadi Pasien
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url( 'denyut_nadi' ); ?>" class="nav-link">
                                <i class="fas fa-table nav-icon"></i>
                                <p>Denyut Nadi</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url( 'denyut_nadi/tambah' ); ?>" class="nav-link">
                                <i class="fas fa-plus-circle nav-icon"></i>
                                <p>Tambah Data Denyut Nadi</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <!-- MENU DATA SUHU TUBUH, NON AKTIFKAN DAHULU -->
                <!-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-thermometer"></i>
                        <p>
                            Suhu Tubuh Pasien
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url( 'suhu_tubuh' ); ?>" class="nav-link">
                                <i class="fas fa-table nav-icon"></i>
                                <p>Suhu Tubuh</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url( 'suhu_tubuh/tambah' ); ?>" class="nav-link">
                                <i class="fas fa-plus-circle nav-icon"></i>
                                <p>Tambah Data Suhu Tubuh</p>
                            </a>
                        </li>
                    </ul>
                </li> -->


                <!-- MENU DATA PASIEN -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Master Aplikasi
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url( 'mesin' ); ?>" class="nav-link">
                                <i class="fas fa-table nav-icon"></i>
                                <p>Data Mesin</p>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="<?php echo base_url( 'pasien/tambah' ); ?>" class="nav-link">
                                <i class="fas fa-plus-circle nav-icon"></i>
                                <p>Tambah Data Pasien</p>
                            </a>
                        </li> -->
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url( 'alat_tools' ); ?>" class="nav-link">
                                <i class="fas fa-table nav-icon"></i>
                                <p>Alat Ukur</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url( 'master_spec' ); ?>" class="nav-link">
                                <i class="fas fa-table nav-icon"></i>
                                <p>Master Spesifikasi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Panduan Sistem -->
                <li class="nav-item">
                    <a href="<?php echo base_url( 'panduan' ); ?>" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Buku Panduan
                        </p>
                    </a>
                </li>

                <!-- LOGOUT -->
                <li class="nav-item">
                    <a href="<?php echo base_url( 'login/logout' ); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <!-- <?php echo $title; ?> -->
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url( 'dashboard' ); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">
                            <?php echo $title; ?>
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- Row 156-737 -->

                <div class="col-md-12">
                    <!-- FROM TEMPLATE -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <?php echo $title; ?>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <!-- Notifikasi -->
                            <?php
                            if ($this->session->flashdata( 'sukses' )) { ?>

                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <i class="icon fas fa-check"></i>
                                    <?php echo $this->session->flashdata( 'sukses' ); ?>
                                </div>
                            <?php } ?>

                            <?php
                            if ($this->session->flashdata( 'gagal' )) { ?>

                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <i class="	fas fa-exclamation-triangle"></i>
                                    <?php echo $this->session->flashdata( 'gagal' ); ?>
                                </div>
                            <?php } ?>

                            <!-- Validasi error -->
                            <?php echo validation_errors( ' <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <i class="icon fas fa-check"></i>', '</div>' ); ?>