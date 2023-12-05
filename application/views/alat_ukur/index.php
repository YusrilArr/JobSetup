<!-- Buka form -->
<?php echo form_open( base_url( 'alat_ukur' ), 'class="form-horizontal"' ); ?>

<!-- button tambah pasien -->
<p>
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal-default">
        <i class="fa fa-plus"></i> Alat Ukur
    </button>
</p>

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
            <th width="10%">Kode Alat</th>
            <th width="20%">Deskripsi</th>
            <th width="15%">Jenis</th>
            <th width="15%">Fungsi</th>
            <th width="10%">Kalibrasi</th>
            <th width="10%">Exp. Date</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <!-- from Mesin.php, variable name pasien-->
        <?php foreach ( $tool as $key => $tool )
        { ?>
            <tr>
                <td>
                    <?php echo $key + 1; ?>
                </td>
                <td>
                    <?php echo $tool->id_mesin; ?>
                </td>
                <td>
                    <?php echo $mesin->nama_mesin; ?>
                </td>
                

                <td>
                    <div class="btn-group">
                        <!-- call controller -->
                        <a href="<?php echo base_url( 'alat_ukur/detail/' . $mesin->id_mesin ); ?>" class="btn btn-info btn-sm">
                            <i class="fa fa-laptop"></i> Detail
                        </a>


                        <!-- <a href="<?php echo base_url( 'mesin/cetak/' . $pasien->id_pasien ); ?>"
                            class="btn btn-success btn-sm" target="_blank">
                            <i class="fa fa-print"></i> Cetak
                        </a> -->

                        <a href="<?php echo base_url( 'alat_ukur/edit/' . $mesin->id_mesin ); ?>"
                            class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i> Edit
                        </a>

                        <a href="<?php echo base_url( 'alat_ukur/delete/' . $mesin->id_mesin ); ?>"
                            class="btn btn-danger btn-sm" onclick="return confirm('Yakin data akan dihapus!')">
                            <i class="fa fa-trash"></i> Hapus
                        </a>
                    </div>
                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>