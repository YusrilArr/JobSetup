<p class="text-right">
    <!-- Call Controller Denyut_nadi -->
    <a href="<?php echo base_url( 'denyut_nadi/riwayat/' . $pasien->id_pasien ) ?>" target="_blank"
        class="btn btn-success">
        <i class="fa fa-print"> </i> Cetak Riwayat </a>
    <!-- Call controller Denyut_nadi -->
    <a href="<?php echo base_url( 'denyut_nadi/export/' . $pasien->id_pasien ) ?>" class="btn btn-primary"
        target="_blank">
        <i class="fa fa-file-word"> </i> Export Word
    </a>
    <a href="<?php echo base_url( 'denyut_nadi' ) ?>" class="btn btn-info">
        <i class="fa fa-backward"> </i> Kembali
    </a>
</p>

<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th width="25%">Nama Pasien </th>
            <th>:
                <?php echo $pasien->nama_pasien ?>
            </th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Kode Pasien</td>
            <td>:
                <?php echo $pasien->kode_pasien ?>
            </td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:
                <?php echo $pasien->jenis_kelamin ?>
            </td>
        </tr>

        <tr>
            <td>Tempat/Tanggal Lahir</td>
            <td>:
                <?php echo $pasien->tempat_lahir ?>,
                <?php echo date( 'd-m-Y', strtotime( $pasien->tanggal_lahir ) ) ?>
            </td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:
                <?php echo $pasien->alamat ?>
            </td>
        </tr>

        <tr>
            <td>Telephone</td>
            <td>:
                <?php echo $pasien->telephone ?>
            </td>
        </tr>

        <!-- <tr>
            <td>Tanggal Update</td>
            <td>:
                <?php echo $pasien->tanggal_update ?>
            </td>
        </tr> -->
    </tbody>
</table>


<hr>
<h3>RIWAYAT DATA SUHU TUBUH</h3>
<hr>
<?php include( 'index.php' ) ?>
<!-- <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="25%">Waktu Pengukuran </th>
            <th>:
                <?php echo date( 'd-m-Y', strtotime( $denyut_nadi->tanggal_pengukuran ) ) ?> Jam
                <?php echo $denyut_nadi->jam_pengukuran ?>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Suhu Tubuh</td>
            <td class="<?php if ( $denyut_nadi->denyut_nadi <= 37 ) {
                echo 'bg-success';
                }
            elseif ( $denyut_nadi->denyut_nadi <= 38 ) {
                echo 'bg-warning';
                }
            else {
                echo 'bg-danger';
                } ?>">:
                <?php echo $denyut_nadi->denyut_nadi ?> °C
            </td>
        </tr>
        <tr>
            <td>Metode Pengukuran </td>
            <td>:
                <?php echo $denyut_nadi->metode_pengukuran ?>
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:
                <?php echo $denyut_nadi->keterangan ?>
            </td>
        </tr>
    </tbody>
</table> -->