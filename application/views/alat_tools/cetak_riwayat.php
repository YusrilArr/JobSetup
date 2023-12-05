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
            <h1>DATA RIWAYAT TEKANAN DARAH DAN DENYUT NADI</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td width="25%">Nama Pasien </td>
                        <td>:
                            <?php echo $pasien->nama_pasien ?>
                        </td>
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
            <h3>RIWAYAT TEKANAN DARAH DAN DENYUT NADI</h3>
            <hr>
            <table class="table table-bordered table-striped table-sm" id="example1">
                <thead>
                    <tr>
                        <th width="6%">NO</th>
                        <th width="20%">KODE - PASIEN</th>
                        <th width="8%">TDS</th>
                        <th width="8%">TDD</th>
                        <th width="10%">DENYUT</th>
                        <th width="20%">KETERANGAN</th>
                        <th width="10%">PELAKSANA</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- from denyut_nadi.php, variable name denyut_nadi-->
                    <?php foreach ( $denyut_nadi as $key => $denyut_nadi ) { ?>
                        <tr>
                            <td>
                                <?php echo $key + 1; ?>
                            </td>
                            <!-- Link detail pasien -->
                            <td>
                                <?php echo $denyut_nadi->kode_pasien; ?> -
                                <?php echo $denyut_nadi->nama_pasien; ?>
                            </td>
                            <td>
                                <?php echo $denyut_nadi->tds; ?>
                            </td>
                            <td>
                                <?php echo $denyut_nadi->tdd; ?>
                            </td>
                            <td>
                                <?php echo $denyut_nadi->denyut_nadi ?>
                            </td>
                            <td>
                                <?php echo $denyut_nadi->keterangan; ?>
                            </td>
                            <td>
                                <?php echo $denyut_nadi->nama_user; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>

</html>