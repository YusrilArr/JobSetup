<div class="d-flex justify-content-between">
    <div class="a">
        <a href="<?php echo base_url( 'mesin' ) ?>" class="btn btn-success">
            <i class="fa fa-backward"> </i> Kembali
        </a>
    </div>

    <div class="b">
        <a href="<?php echo base_url( 'mesin/edit/' . $mesin->id_mesin ) ?>" class="btn btn-warning">
            <i class="fa fa-edit"> </i> Edit Tipe Mesin
        </a>

    </div>
</div>

<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th width="25%">Kode Mesin </th>
            <th>:
                <?php echo $mesin->id_mesin ?>
            </th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Nama Mesin</td>
            <td>:
                <?php echo $mesin->nama_mesin ?>
            </td>
        </tr>
    </tbody>
</table>
</hr>