<!-- Buka form -->
<?php echo form_open( base_url( 'master_spec' ), 'class="form-horizontal"' ); ?>

<!-- button tambah master_spec -->

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
            <th width="6%">NO</th>
            <th width="40%">Number Specification</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <!-- from pasien.php, variable name pasien-->
        <?php foreach ($master_spec as $key => $master_spec) { ?>
            <tr>
                <td>
                    <?php echo $key + 1; ?>
                </td>
                <td>
                    <?php echo $master_spec->no_spec; ?>
                </td>

                <td>
                    <div class="btn-group">
                        <!-- call controller -->
                        <a href="<?php echo base_url( 'master_spec/detail/' . $master_spec->no_spec ); ?>"
                            class="btn btn-info btn-sm">
                            <i class="fa fa-laptop"></i> Detail
                        </a>

                        <!-- <a href="<?php echo base_url( 'master_spec/cetak/' . $master_spec->no_spec ); ?>"
                            class="btn btn-success btn-sm ml-2" target="_blank">
                            <i class="fa fa-print"></i> Cetak
                        </a> -->

                        <?php if ($this->session->userdata( 'akses_level' ) == 'Admin') { ?>
                            <a href="<?php echo base_url( 'master_spec/edit/' . $master_spec->no_spec ); ?>"
                                class="btn btn-warning btn-sm ml-2">
                                <i class="fa fa-edit"></i> Edit
                            </a>

                            <a href="<?php echo base_url( 'master_spec/delete/' . $master_spec->no_spec ); ?>"
                                class="btn btn-danger btn-sm ml-2" onclick="return confirm('Yakin data akan dihapus!')">
                                <i class="fa fa-trash"></i> Hapus
                            </a>
                        <?php } ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>