<div class="row">
    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-gradient-primary elevation-2"><i class="fas fa-folder-plus"></i></span>

            <div class="info-box-content">
                <span class="info-box-text"><b>Set Up Callender</b> </span>
                <span class="info-box-number">
                    <?php echo $setup->total_transaksi ?>
                    <small> Data</small>
                </span>
            </div>
        </div>
        <p class="btn btn-group btn-block">
            <a href="<?php echo base_url( 'setup' ) ?>" class="btn bg-gradient-danger">
                <i class="fas fa-server"></i> Data Transaksi
            </a>
        </p>
    </div>

    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-gradient-info elevation-3"><i class="fas fa-ruler-combined"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Master Specification</span>
                <span class="info-box-number">
                    <?php echo $master_spec->total_spec ?><small> Data</small>
                </span>
            </div>
        </div>
        <p class="btn btn-group btn-block">
            <a href="<?php echo base_url( 'master_spec' ) ?>" class="btn bg-gradient-danger">
                <i class="fa fa-server"></i> Data Master Spesifikasi
            </a>
        </p>
    </div>

    <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-gradient-warning elevation-2"><i class="fas fa-tools"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Tools</span>
                <span class="info-box-number">
                    <?php echo $alat_tools->total_tools ?> <small> Alat</small>
                </span>
            </div>
        </div>
        <p class="btn btn-group btn-block">
            <a href="<?php echo base_url( 'alat_tools' ) ?>" class="btn bg-gradient-danger">
                <i class="fas fa-server"></i> Data Tools
            </a>
        </p>
    </div>
</div>
<div>
    <p class="btn btn-group btn-block">
        <a href="<?php echo base_url( 'dashboard' ) ?>" class="btn bg-gradient-success ">
            <i class="fas fa-backward"></i> Kembali
        </a>
    </p>
</div>