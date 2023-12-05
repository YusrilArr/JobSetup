<!-- Buka form -->
<?php echo form_open( base_url( 'setup' ), 'class="form-horizontal"' ); ?>


<!-- button tambah setup -->
<!-- <p>
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal-default">
        <i class="fa fa-plus"></i> Tipe Mesin
    </button>
</p> -->
<div class="mb-4">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <a href="<?php echo base_url( 'topping_callender' ); ?>" class="btn btn-success mr-3"><b><i class="fas fa-backward"
                style="">
            </i></b></a>
    <a href="<?php echo base_url( 'setup/tambah_baru' ); ?>" class="btn btn-success"><b><i class="fa fa-plus" style="">
            </i> Add</b></a>
</div>



<table class="table table-bordered table-striped table-sm" id="example1">

    <thead>
        <tr>
            <th width="6%">NO</th>
            <th width="10%">NOMOR ROLL</th>
            <th width="13%">KODE ITEM</th>
            <th width="15%">NOMOR SPESIFIKASI</th>
            <th width="13%">NOMOR MESIN</th>
            <th width="16%">TANGGAL TRANSAKSI</th>
            <th width="30%" style="text-align: center;">ACTION</th>
            <!-- <th></th> -->
        </tr>
    </thead>

    <tbody>
        <!-- from Mesin.php, variable name pasien-->
        <?php foreach ($setup as $key => $setup) { ?>
            <tr>
                <td>
                    <?php echo $key + 1; ?>
                </td>
                <td>
                    <?php echo $setup->no_roll; ?>
                </td>
                <td>
                    <?php echo $setup->item_code; ?>
                </td>
                <td>
                    <?php echo $setup->no_spec; ?>
                </td>
                <td>
                    <?php echo $setup->no_mesin; ?>
                </td>
                <td>
                    <?php
                    $tanggal_transaksi = $setup->tanggal_transaksi;
                    $formattedDate     = date( 'd F Y', strtotime( $tanggal_transaksi ) );
                    $formattedDate     = preg_replace_callback(
                        "/\b(\w)/",
                        function ($matches) {
                            return strtoupper( $matches[0] );
                            },
                        $formattedDate
                    );
                    echo $formattedDate; ?>
                </td>


                <td style="text-align:center;">
                    <div class="btn-group">
                        <!-- call controller -->

                        <a href="<?php echo base_url( 'setup/detail/' . $setup->no_roll ); ?>" class="btn btn-info btn-sm">
                            <i class="fa fa-laptop"></i> Detail
                        </a>



                        <a href="<?php echo base_url( 'setup/cetak/' . $setup->no_roll ); ?>"
                            class="btn btn-success btn-sm ml-4 mr-4" target="_blank">
                            <i class="fa fa-print"></i> Cetak
                        </a>


                        <?php if ($this->session->userdata( 'akses_level' ) == 'Admin') { ?>

                            <!-- <a href="<?php echo base_url( 'setup/edit_data/' . $setup->no_roll ); ?>"
                                class="btn btn-warning btn-sm ml-2"><i class="fa fa-edit"></i> Edit</a> -->

                            <a href="<?php echo base_url( 'setup/delete/' . $setup->no_roll ); ?>" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin data akan dihapus!')">
                                <i class="fa fa-trash"></i> Hapus
                            </a>

                        <?php } ?>
                    </div>
                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>