<!-- Buka form -->
<?php echo form_open( base_url( 'alat_tools' ), 'class="form-horizontal"' ); ?>

<!-- button tambah mesin -->
<div class="mb-4">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <a href="<?php echo base_url( 'topping_callender' ); ?>" class="btn btn-success mr-3"><b><i class="fas fa-backward"
                style="">
            </i></b></a>
    <button style="width: 90px; height:40px; text-align:left;" type="button" class="btn btn-success btn-lg"
        data-toggle="modal" data-target="#modal-default">
        <i class="fa fa-plus"></i>
        Add
    </button>
</div>


<?php
// Panggil form tambah
include 'tambah.php';
// -- closing form
echo form_close();
?>

<table class="table table-bordered table-striped table-sm" id="example1">
    <thead>
        <tr>
            <th width="4%">NO</th>
            <th width="15%">NOMOR ALAT</th>
            <th width="8%">TYPE</th>
            <!-- <th width="10%">FUNGSI</th> -->
            <th width="15%">STIKER OK KALIBRASI</th>
            <th width="14%">EXPIRED DATE</th>
            <!-- <th width="18%">DITAMBAHKAN OLEH</th> -->
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>

        <!-- -->
        <!-- from denyut_nadi.php, variable name denyut_nadi-->
        <?php foreach ($alat_tools as $key => $alat_tools) { ?>
            <tr>
                <td>
                    <?php echo $key + 1; ?>
                </td>
                <!-- Link detail pasien -->
                <td>
                    <?php echo $alat_tools->id_tool; ?>

                </td>
                <td>
                    <?php echo $alat_tools->tipe_tool; ?>
                </td>
                <!-- <td>
                    <?php echo $alat_tools->kategori; ?>
                </td> -->
                <td>
                    <?php
                    $stiker_kalibrasi = $alat_tools->stiker_kalibrasi;
                    $formattedDate    = date( 'd F Y', strtotime( $stiker_kalibrasi ) );
                    $formattedDate    = preg_replace_callback(
                        "/\b(\w)/",
                        function ($matches) {
                            return strtoupper( $matches[0] );
                            },
                        $formattedDate
                    );
                    echo $formattedDate; ?>
                </td>
                <td>
                    <?php
                    $expired_date  = $alat_tools->expired_date;
                    $formattedDate = date( 'd F Y', strtotime( $expired_date ) );
                    $formattedDate = preg_replace_callback(
                        "/\b(\w)/",
                        function ($matches) {
                            return strtoupper( $matches[0] );
                            },
                        $formattedDate
                    );
                    echo $formattedDate; ?>
                </td>
                <!-- <td>
                    <?php echo $alat_tools->update_by; ?>
                </td> -->
                <td>
                    <div class="btn-group ml-2">
                        <!-- CALL CONTROLLER, EXECUTION FUNCTION -->
                        <a href="<?php echo base_url( 'alat_tools/detail/' . $alat_tools->id_tool ); ?>"
                            class="btn btn-info btn-sm">
                            <i class="fa fa-laptop"></i> Detail
                        </a>

                        <!-- <a href="<?php echo base_url( 'alat_tools/cetak/' . $alat_tools->id_tool ); ?>"
                            class="btn btn-success btn-sm" target="_blank">
                            <i class="fa fa-print"></i> Cetak
                        </a> -->

                        <a href="<?php echo base_url( 'alat_tools/edit/' . $alat_tools->id_tool ); ?>"
                            class="btn btn-warning btn-sm ml-2">
                            <i class="fa fa-edit"></i> Edit
                        </a>

                        <a href="<?php echo base_url( 'alat_tools/delete/' . $alat_tools->id_tool ); ?>"
                            class="btn btn-danger btn-sm ml-2" onclick="return confirm('Yakin data akan dihapus!')">
                            <i class="fa fa-trash"></i> Hapus
                        </a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>