<!-- BOX DASHBOARD -->
<!-- Info boxes -->
<div class="row">

    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-3"><i class="fas fa-project-diagram"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Topping Callender</span>
                <!-- <span class="info-box-number">
                    <?php echo $setup->total_transaksi ?>
                    <small> Data</small>
                </span> -->
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <p class="btn btn-group btn-block">
            <a href="<?php echo base_url( 'topping_callender' ) ?>" class="btn btn-success">
                <i class="fas fa-share-square"></i> Setup
            </a>
            <!-- <a href="<?php echo base_url( '' ) ?>" class="btn btn-info">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a> -->
        </p>
    </div>

    <!-- <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-folder-plus"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Set Up Callender </span>
                <span class="info-box-number">
                    <?php echo $setup->total_transaksi ?>
                    <small> Data</small>
                </span>
            </div>
        </div>
        <p class="btn btn-group btn-block">
            <a href="<?php echo base_url( 'setup' ) ?>" class="btn btn-success">
                <i class="fas fa-server"></i> Data Transaksi
            </a>
        </p>
    </div> -->

    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-3"><i class="fas fa-industry"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Data Mesin </span>
                <span class="info-box-number">
                    <?php echo $mesin->total_mesin ?>
                    <small>Mesin</small>
                </span>
            </div>
        </div>
        <p class="btn btn-group btn-block">
            <a href="<?php echo base_url( 'mesin' ) ?>" class="btn btn-success">
                <i class="fas fa-dumpster"></i> Data Mesin
            </a>
        </p>
    </div>


    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <!-- <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-ruler-combined"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Master Specification</span>
                <span class="info-box-number">
                    <?php echo $master_spec->total ?><small> Data</small>
                </span>
            </div>
        </div>
        <p class="btn btn-group btn-block">
            <a href="<?php echo base_url( 'master_spec' ) ?>" class="btn btn-success">
                <i class="fa fa-thermometer"></i> Data Master Spesifikasi
            </a>
        </p>
    </div> -->
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-3"><i class="fas fa-user-friends"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">User </span>
                <span class="info-box-number">
                    <?php echo $user_tot->total_user ?>
                    <small> Orang</small>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <p class="btn btn-group btn-block">
            <a href="<?php echo base_url( 'user' ) ?>" class="btn btn-success">
                <i class="fa fa-lock"></i> Data User
            </a>
            <!-- <a href="<?php echo base_url( 'user' ) ?>" class="btn btn-info">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a> -->
        </p>
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->