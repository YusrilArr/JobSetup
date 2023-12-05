<!-- Buka form -->
<?php echo form_open( base_url( 'mesin' ), 'class="form-horizontal"' ); ?>

<!-- button tambah mesin -->
<div class="mb-4">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <a href="<?php echo base_url( 'dashboard' ); ?>" class="btn btn-success mr-3"><b><i class="fas fa-backward"
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
            <th width="6%">NO</th>
            <th width="20%">KODE MESIN</th>
            <th width="40%">DESKRIPSI</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <!-- from Mesin.php, variable name pasien-->
        <?php foreach ($mesin as $key => $mesin) { ?>
            <tr>
                <td>
                    <?php echo $key + 1; ?>
                </td>
                <td>
                    <?php echo $mesin->id_mesin; ?>
                </td>
                <td>
                    <?php echo $mesin->nama_mesin; ?>
                </td>

                <td>
                    <div class="btn-group">
                        <!-- call controller -->
                        <a href="<?php echo base_url( 'mesin/detail/' . $mesin->id_mesin ); ?>" class="btn btn-info btn-sm">
                            <i class="fa fa-laptop"></i> Detail
                        </a>

                        <a href="<?php echo base_url( 'mesin/edit/' . $mesin->id_mesin ); ?>"
                            class="btn btn-warning btn-sm ml-3">
                            <i class="fa fa-edit"></i> Edit
                        </a>

                        <!-- <a href="<?php echo base_url( 'mesin/cetak/' . $mesin->id_mesin ); ?>"
                            class="btn btn-success btn-sm" target="_blank">
                            <i class="fa fa-print"></i> Cetak
                        </a> -->


                        <a href="<?php echo base_url( 'mesin/delete/' . $mesin->id_mesin ); ?>"
                            class="btn btn-danger btn-sm ml-3" onclick="return confirm('Yakin data akan dihapus!')">
                            <i class="fa fa-trash"></i> Hapus
                        </a>
                    </div>
                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>