<!-- Buka form -->
<?php echo form_open( base_url( 'user' ), 'class="form-horizontal"' ); ?>

<!-- button tambah user -->
<div class="mb-4">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <a href="<?php echo base_url( 'dashboard' ); ?>" class="btn btn-success mr-3"><b><i class="fas fa-backward"
                style="">
            </i></b></a>

    <button style="width: 140px; height:40px" type="button" class="btn btn-success btn-lg" data-toggle="modal"
        data-target="#modal-default">
        <i class="fa fa-plus"></i> User Baru
    </button>

</div>

<?php
// Panggil form tambah
include( 'tambah.php' );
// -- closing form 
echo form_close()
    ?>


<table class="table table-bordered table-striped table-sm" id="example1">
    <thead>
        <tr>
            <th width="6%">No</th>
            <th width="10%">ID User</th>
            <th width="20%">Nama</th>
            <th width="20%">Username</th>
            <th width="10%">Level</th>
            <th width="10%">Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <!-- from user.php, variable name user-->
        <?php foreach ($user as $key => $user) { ?>
            <tr>
                <td>
                    <?php echo $key + 1; ?>
                </td>
                <td>
                    <?php echo $user->id_user ?>
                </td>
                <td>
                    <?php echo $user->nama_user ?>
                </td>
                <td>
                    <?php echo $user->username ?>
                </td>
                <td>
                    <?php echo $user->akses_level ?>
                </td>
                <td>
                    <?php echo $user->user_status ?>
                </td>
                <td>
                    <div class="btn-group">
                        <a href="<?php echo base_url( 'user/edit/' . $user->id_user ) ?>"
                            class="btn btn-warning btn-sm mr-3">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <a href="<?php echo base_url( 'user/delete/' . $user->id_user ) ?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin data akan dihapus!')">
                            <i class="fa fa-trash"></i> Hapus
                        </a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>