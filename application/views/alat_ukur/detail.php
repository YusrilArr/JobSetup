<p class="text-right">
    <a href="<?php echo base_url( 'alat_ukur/edit/' . $mesin->id_mesin ) ?>" class="btn btn-success">
        <i class="fa fa-edit"> </i> Edit Tipe Mesin
    </a>
    <!-- <a href="<?php echo base_url( 'alat_ukur/cetak/' . $mesin->id_mesin ) ?>" class="btn btn-primary" target="_blank">
        <i class="fa fa-print"> </i> Cetak
    </a> -->
    <a href="<?php echo base_url( 'alat_ukur' ) ?>" class="btn btn-info">
        <i class="fa fa-backward"> </i> Kembali
    </a>
</p>

<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th width="25%">Kode Alat ukur </th>
            <th>:
                <?php echo $tool->id_tool ?>
            </th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Nama Alat Ukur</td>
            <td>:
                <?php echo $tool->nama_tool ?>
            </td>
        </tr>
    </tbody>
</table>
</hr>