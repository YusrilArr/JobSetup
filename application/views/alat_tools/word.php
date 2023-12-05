<?php
$nama_file = 'Laporan Tekanan Darah';
header( "Content-type: application/vnd.ms-word" );
header( "Content-Disposition: attachment; Filename=" . $nama_file . ".doc" );
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php echo $title ?>Document
        </title>
        <style type="text/css" media="screen">
            h1 {
                font-size: 13px;
                font-weight: bold;
                text-align: center;
            }

            table {
                border: solid thin #666;
                border-collapse: collapse;
            }

            td,
            th {
                padding: 6px 12px;
                text-align: left;
                vertical-align: top;
                border: solid thin #666;
            }
        </style>
    </head>

    <body>
        <h1>RIWAYAT TEKANAN DARAH DAN DENYUT NADI</h1>
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
                            <?php echo $denyut_nadi->denyut_nadi; ?>
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

    </body>

</html>