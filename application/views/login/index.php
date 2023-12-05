<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aplikasi JobSetup | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="<?php echo base_url( 'assets/admin/plugins/fontawesome-free/css/all.min.css' ) ?> ">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet"
            href="<?php echo base_url( 'assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css' ) ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url( 'assets/admin/dist/css/adminlte.min.css' ) ?>">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <style type="text/css" media="screen">
            .login-box {
                min-width: 30px;
                border-radius: 5px !important;
            }
        </style>
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="<?php echo base_url( 'admin/login' ) ?>"><b>Aplikasi</b>JobSetup</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Masukkan Username dan Password </p>

                    <!-- Notifikasi -->
                    <?php
                    if ($this->session->flashdata( 'sukses' ))
                        { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="icon fas fa-check"></i>
                            <?php echo $this->session->flashdata( 'sukses' ); ?>
                        </div>
                    <?php } ?>

                    <?php
                    if ($this->session->flashdata( 'warning' ))
                        { ?>
                        <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="icon fas fa-check"></i>
                            <?php echo $this->session->flashdata( 'warning' ); ?>
                        </div>
                    <?php } ?>


                    <!-- Edit 01/03/2023, login kondisi -->
                    <?php
                    // validasi form jika ada error, 02/03/2023
                    echo validation_errors( ' <div class="alert alert-warning alert-dismissible">
                                         <button type="button" class="close" data-dismiss="alert"
                                          aria-hidden="true">&times;</button>
                                         <i class="icon fas fa-check"></i>', '</div>' );

                    // echo validation_errors('<div class="alert alert-success">', '</div>');
                    
                    // <!-- notifikasi gagal login -->
                    // if ( $this->session->flashdata( 'warning' ) ) {
                    //     echo '<div class="alert alert-warning">';
                    //     echo $this->session->flashdata( 'warning' );
                    //     echo '</div>';
                    //     }
                    
                    // notifikasi logout
                    // if ( $this->session->flashdata( 'sukses' ) ) {
                    //     echo '<div class="alert alert-success">';
                    //     echo $this->session->flashdata( 'sukses' );
                    //     echo '</div>';
                    //     }
                    
                    // form open login
                    echo form_open( base_url( 'login' ) );
                    ?>


                    <!-- <form action="../../index3.html" method="post">, diganti script diatas -->
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="UserName">
                        <div class=" input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>

                    <!-- </form> -->
                    <!-- pengganti </form> -->
                    <?php echo form_close(); ?>
                    <!-- /.social-auth-links -->
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>

    </body>

</html>