<div class="d-flex justify-content-between">
    <div>
        <a href="<?php echo base_url( 'alat_tools' ) ?>" class="btn btn-success">
            <i class="fa fa-backward"> </i> Kembali
        </a>
    </div>
    <div>
        <a href="<?php echo base_url( 'alat_tools/edit/' . $alat_tools->id_tool ) ?>" class="btn btn-warning">
            <i class="fa fa-edit"> </i> Edit Tool </a>
    </div>
</div>

<hr>



<table class="table table-striped">
    <thead>
        <tr>
            <th width="25%">No. ID Mesin </th>
            <th>:
                <?php echo $alat_tools->id_tool ?>
            </th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Tipe Tools</td>
            <td>:
                <?php echo $alat_tools->tipe_tool ?>
            </td>
        </tr>

        <tr>
            <td>Kategori</td>
            <td>:
                <?php echo $alat_tools->kategori ?>
            </td>
        </tr>

        <tr>
            <td>Stiker OK Kalibrasi</td>
            <td>:
                <?php
                $stiker_kalibrasi = $alat_tools->stiker_kalibrasi;
                $formattedDate    = date( 'd M Y', strtotime( $stiker_kalibrasi ) );
                // $formattedDate     = substr( $formattedDate, 0, 3 );
                echo $formattedDate; ?>
            </td>
        </tr>

        <tr>
            <td>Expired Date</td>
            <td>:
                <?php
                $expired_date  = $alat_tools->expired_date;
                $formattedDate = date( 'd M Y', strtotime( $expired_date ) );
                // $formattedDate     = substr( $formattedDate, 0, 3 );
                echo $formattedDate; ?>
            </td>
        </tr>

        <!-- <tr>
            <td>Ditambahkan Oleh</td>
            <td>:
                <?php echo $alat_tools->update_by ?>
            </td>
        </tr> -->

        <!-- <tr>
            <td>Tanggal Update</td>
            <td>:
                <?php echo $pasien->tanggal_update ?>
            </td>
        </tr> -->
    </tbody>
</table>