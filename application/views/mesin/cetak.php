<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?php echo $title; ?>
        </title>
        <!-- panggil css print -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url( 'assets/css/print.css' ); ?>" media="screen">
        <!-- media print -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url( 'assets/css/print.css' ); ?>" media="print">
    </head>

    <body onload="print()">
        <!-- class cetak dari assets/css/cetak.css -->
        <div class="cetak">
            <h1>CETAK DATA PASIEN </h1>
            <table class="table table-striped">

                <tr>
                    <td width="25%">Nama Pasien </th>
                    <td>:
                        <?php echo $pasien->nama_pasien; ?>
                    </td>
                </tr>

                <tr>
                    <td>Kode Pasien</td>
                    <td>:
                        <?php echo $pasien->kode_pasien; ?>
                    </td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:
                        <?php echo $pasien->jenis_kelamin; ?>
                    </td>
                </tr>

                <tr>
                    <td>Tempat/Tanggal Lahir</td>
                    <td>:
                        <?php echo $pasien->tempat_lahir; ?>,
                        <?php echo date( 'd-m-Y', strtotime( $pasien->tanggal_lahir ) ); ?>
                    </td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>:
                        <?php echo $pasien->alamat; ?>
                    </td>
                </tr>

                <tr>
                    <td>Telephone</td>
                    <td>:
                        <?php echo $pasien->telephone; ?>
                    </td>
                </tr>

            </table>
        </div>
    </body>

</html>