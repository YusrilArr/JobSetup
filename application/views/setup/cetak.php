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
        <h1>
            <font size="5">Job Set Up Callender</font>
        </h1>
        <table style="border:none;">

            <tr style="height:2%">
                <td style="width:100px; border:none; ">
                    <font size="3">Nomor Mesin</font>
                </td>
                <td style="border: none;">
                    <font size="3">:
                        <?php echo $setup->no_mesin ?>
                    </font>

                </td>
                <td style="border: none; width:50px"></td>
                <td style="border: none;"> </td>
                <td style="width:140px; border:none; ">
                    <font size="3">No. Thickness Gauge </font>
                </td>
                <td style="width:140px; border:none; ">
                    <font size="3">:
                        <?php echo $setup->id_tool_thickness ?>
                    </font>

                </td>
            </tr>
            <tr style="height:2%">
                <td style="width:30px; border:none;">
                    <font size="3">Operator</font>
                </td>
                <td style="border: none;">
                    <font size="3">:
                        <?php echo ucwords( $setup->operator ) ?>
                    </font>
                </td>
                <td style="border: none;"></td>
                <td style="border: none;"> </td>
                <td style="width:130px; border:none;">
                    <font size="3">Thickness Kalibrasi</font>
                </td>
                <td style="width:80px; border:none">
                    <font size="3">:
                        <?php
                        $ok_kalibrasi_thickness = $setup->ok_kalibrasi_thickness;
                        $formattedDate          = date( 'd M Y', strtotime( $ok_kalibrasi_thickness ) );
                        // $formattedDate     = substr( $formattedDate, 0, 3 );
                        echo $formattedDate; ?>
                    </font>
                </td>
            </tr>
            <tr style="height:1%">
                <td style="width:30px; border:none;">
                    <font size="3">NIP</font>
                </td>
                <td style="border: none;">
                    <font size="3">:
                        <?php echo $setup->nip ?>
                    </font>
                </td>
                <td style="border: none;"></td>
                <td style="border: none;"> </td>
                <td style="width:80px; border:none;">
                    <font size="3">Expired Thickness</font>
                </td>
                <td style="width:100px; border:none">
                    <font size="3">:
                        <?php
                        $expired_thickness = $setup->expired_thickness;
                        $formattedDate     = date( 'd M Y', strtotime( $expired_thickness ) );
                        // $formattedDate     = substr( $formattedDate, 0, 3 );
                        echo $formattedDate; ?>
                    </font>
                </td>
            </tr>
            <tr style="height:1%">
                <td style="width:30px; border:none;">
                    <font size="3">Tanggal</font>
                </td>
                <td style="border: none;">
                    <font size="3">:
                        <?php
                        $tanggal_transaksi = $setup->tanggal_transaksi;
                        $formattedDate     = date( 'd M Y', strtotime( $tanggal_transaksi ) );
                        // $formattedDate     = substr( $formattedDate, 0, 3 );
                        echo $formattedDate; ?>
                    </font>
                </td>
                <td style="border: none;"></td>
                <td style="border: none;"> </td>
                <td style="width:80px; border:none;">
                    <font size="3">No. Steel Roll M</font>
                </td>
                <td style="width:100px; border:none">
                    <font size="3">:
                        <?php echo $setup->id_tool_width ?>
                    </font>
                </td>
            </tr>
            <tr>
                <td style="width:30px; border:none;">
                    <font size="3">Shift</font>
                </td>
                <td style="border: none;">
                    <font size="3">:
                        <?php echo $setup->shift ?>
                    </font>
                </td>
                <td style="border: none;"></td>
                <td style="border: none;"> </td>
                <td style="width:80px; border:none;">
                    <font size="3">Width Kalibrasi</font>
                </td>
                <td style="width:100px; border:none">
                    <font size="3">:
                        <?php
                        $ok_kalibrasi_width = $setup->ok_kalibrasi_width;
                        $formattedDate      = date( 'd M Y', strtotime( $ok_kalibrasi_width ) );
                        // $formattedDate     = substr( $formattedDate, 0, 3 );
                        echo $formattedDate; ?>
                    </font>
                </td>
            </tr>
            <tr>
                <td style="width:30px; border:none;">
                    <font size="3">Group</font>
                </td>
                <td style="border: none;">
                    <font size="3">:
                        <?php echo $setup->group ?>
                    </font>
                </td>
                <td style="border: none;"></td>
                <td style="border: none;"> </td>
                <td style="width:80px; border:none;">
                    <font size="3">Width Expired</font>
                </td>
                <td style="width:100px; border:none">
                    <font size="3">:
                        <?php
                        $expired_width = $setup->expired_width;
                        $formattedDate = date( 'd M Y', strtotime( $expired_width ) );
                        // $formattedDate     = substr( $formattedDate, 0, 3 );
                        echo $formattedDate; ?>
                    </font>
                </td>
            </tr>

        </table>
        <br>
        <table style="border:none;">
            <tr>
                <th colspan="5" style=" width:10%; text-align:cente; font-size:20px; border: none;">
                    Pemakaian Material
                </th>
            </tr>
            <tr style="height:1em;">
                <th colspan="2" style="text-align:center; font-size:15px;">Dipped Cord</th>
                <th colspan="1" style="text-align:cente; color:transparent; width:120px; border: none;"></th>
                <th colspan="2" style="text-align:center; font-size:15px;">Compound</th>

            </tr>
            <tr style="font-size:16px">
                <td>No. Spesifikasi</td>
                <td>
                    <?php echo $setup->no_spec ?>
                </td>
                <td style="border: none;"></td>
                </td>

                <td>Kode</td>
                <td>
                    <?php echo $setup->comp_code ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Supplier</td>
                <td>
                    <?php echo $setup->dc_supplier ?>
                </td>
                <td style="border: none;"></td>
                <td>Barcode No.</td>
                <td>
                    <?php echo $setup->comp_barcode ?> <!---sudah compound- -->
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Kode Item</td>
                <td>
                    <?php echo $setup->dc_item_code ?>
                </td>
                <td style="border: none;"></td>
                <td>Batch</td>
                <td>
                    <?php echo $setup->comp_batch ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>No. Barcode</td>
                <td>
                    <?php echo $setup->dc_barcode_no ?> <!---sudah Dipp Cord- -->
                </td>
                <td style="border: none;"></td>
                <td>Tgl/Bln/Grp/Line</td>
                <td>
                    <?php echo $setup->comp_tgl_bln_grp_line ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Tanggal Masuk</td>
                <td>
                    <?php
                    $dc_tanggal_masuk = $setup->dc_tanggal_masuk;
                    $formattedDate    = date( 'd M Y', strtotime( $dc_tanggal_masuk ) );
                    // $formattedDate     = substr( $formattedDate, 0, 3 );
                    echo $formattedDate; ?>
                </td>
                <td style="border: none;"></td>
                <td>Expired</td>
                <td>
                    <?php
                    $comp_expired  = $setup->comp_expired;
                    $formattedDate = date( 'd M Y', strtotime( $comp_expired ) );
                    // $formattedDate     = substr( $formattedDate, 0, 3 );
                    echo $formattedDate; ?> <!---compound Cord- -->
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>No Roll</td>
                <td>
                    <?php echo $setup->dc_no_roll ?>
                </td>
                <td style="border: none;"></td>

                <td>A</td>
                <td>
                    <?php echo $setup->comp_a ?> <!---compound- -->
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Expired</td>
                <td>
                    <?php
                    $dc_expired    = $setup->dc_expired;
                    $formattedDate = date( 'd M Y', strtotime( $dc_expired ) );
                    // $formattedDate     = substr( $formattedDate, 0, 3 );
                    echo $formattedDate; ?> <!---Dipped Cord- -->
                </td>
                <td style="border: none;"></td>
                <td>Output Ext. A</td>
                <td>
                    <?php echo $setup->comp_output_ext_a ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>A</td>
                <td>
                    <?php echo $setup->dc_a ?> <!---Dipped Cord- -->
                </td>
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;">

                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Spl (A)</td>
                <td>
                    <?php echo $setup->dc_spl_a ?>
                </td>
                <td style="border: none;"></td>
                <td style="border: none;">
                </td>
            </tr>
        </table>
        <br>
        <table style="border:none;">
            <tr>
                <th colspan="2" style="font-size:15px;  text-align:center;">Standard Produk</th>
                <th colspan="2" style="border: none;"></th>
                <th colspan="2" style="font-size:15px; text-align:center;">Actual Produk</th>
            </tr>
            <tr>
                <!-- <th colspan="2" style="text-align:center; font-size:15px; ">Produk</th> -->
                <!-- <td colspan="2" style="text-align:center; border:none;"></td> -->
                <!-- <th colspan="2" style="text-align:center; font-size:15px; ">Produk</th> -->
            </tr>
            <tr style="font-size:16px">
                <td style="width:200px;">Thickness Drive Side</td>
                <td>
                    <?php echo $setup->std_produk_ds . " mm" ?>
                </td>
                <td style="border: none;"></td>
                <td style="border: none;"> </td>
                <td style="width:200px;">Thickness Drive Side</td>
                <td>
                    <?php echo $setup->act_produk_ds . " mm" ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Thickness Center</td>
                <td>
                    <?php echo $setup->std_produk_ctr . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Thickness Center </td>
                <td>
                    <?php echo $setup->act_produk_ctr . " mm" ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Thickness Heather Side</td>
                <td>
                    <?php echo $setup->std_produk_hs . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Thickness Heather Side</td>
                <td>
                    <?php echo $setup->act_produk_hs . " mm" ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Width</td>
                <td>
                    <?php echo $setup->std_produk_width . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Width</td>
                <td>
                    <?php echo $setup->act_produk_width . " mm" ?>
                </td>
            </tr>
            <tr>
                <th colspan="2" style="text-align:center; font-size:16px">Proses</th>
                <td colspan="2" style="text-align:center; border:none;"></td>
                <th colspan="2" style="text-align:center; font-size:16px">Proses</th>
            </tr>
            <tr style="font-size:16px">
                <td>Fabric Tension Before Call</td>
                <td>
                    <?php echo $setup->std_proses_fabric_before_calender . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Fabric Tension Before Call</td>
                <td>
                    <?php echo $setup->act_proses_fabric_before_calender . " mm" ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Fabric Tension After Calender</td>
                <td>
                    <?php echo $setup->std_proses_fabric_after_calender . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Fabric Tension After Calender</td>
                <td>
                    <?php echo $setup->act_proses_fabric_after_calender . " mm" ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Gap Roll Drive Side 1&2</td>
                <td>
                    <?php echo $setup->std_proses_gaproll_ds_1_2 . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Gap Roll Drive Side 1&2</td>
                <td>
                    <?php echo $setup->act_proses_gaproll_ds_1_2 . " mm" ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Gap Roll Drive Side 2&3</td>
                <td>
                    <?php echo $setup->std_proses_gaproll_ds_2_3 . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Gap Roll Drive Side 2&3</td>
                <td>
                    <?php echo $setup->act_proses_gaproll_ds_2_3 . " mm" ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Gap Roll Drive Side 3&4</td>
                <td>
                    <?php echo $setup->std_proses_gaproll_ds_3_4 . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Gap Roll Drive Side 3&4</td>
                <td>
                    <?php echo $setup->act_proses_gaproll_ds_3_4 . " mm" ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Crossing Heather Side 1&4</td>
                <td>
                    <?php echo $setup->std_proses_crossing_hs_1_4 . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Crossing Heather Side 1&4</td>
                <td>
                    <?php echo $setup->act_proses_crossing_hs_1_4 . " mm" ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Crossing Drive Side 1&4</td>
                <td>
                    <?php echo $setup->std_proses_crossing_ds_1_4 . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Crossing Drive Side 1&4</td>
                <td>
                    <?php echo $setup->act_proses_crossing_ds_1_4 . " mm" ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Gap Roll Heather Side 1&2</td>
                <td>
                    <?php echo $setup->std_proses_gaproll_hs_1_2 . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Gap Roll Heather Side 1&2</td>
                <td>
                    <?php echo $setup->act_proses_gaproll_hs_1_2 . " mm" ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Gap Roll Heather Side 2&3</td>
                <td>
                    <?php echo $setup->std_proses_gaproll_hs_2_3 . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Gap Roll Heather Side 2&3</td>
                <td>
                    <?php echo $setup->act_proses_gaproll_hs_2_3 . " mm" ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Gap Roll Heather Side 3&4</td>
                <td>
                    <?php echo $setup->std_proses_gaproll_hs_3_4 . " mm" ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Gap Roll Heather Side 3&4</td>
                <td>
                    <?php echo $setup->act_proses_gaproll_hs_3_4 . " mm" ?>
                </td>

            </tr>
            <tr style="height:25px;">
                <td style="border:none"></td>
                <td style="border:none"></td>
                <td style="border:none"></td>
                <td style="border:none"></td>
                <td style="border:none"></td>
            </tr>
            <tr style="font-size:16px">
                <td>Appearance Treatment</td>
                <td>
                    <?php echo $setup->appr_treatment ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Penggantian & Kondisi Linear</td>
                <td>
                    <?php echo $setup->penggantian_kondisi_linear ?>
                </td>
            </tr>
            <tr style="font-size:16px">
                <td>Supply Treatment</td>
                <td>
                    <?php echo $setup->supply_treatment ?>
                </td>
                <td style="border:none;"></td>
                <td style="border:none;"> </td>
                <td>Quantity</td>
                <td>
                    <?php echo $setup->quantity . " m" ?>
                </td>
            </tr>
        </table>
        <br>
        <!-- <table style="font-size:10px; border:none;">
            <tr>
                <th colspan="1" style="font-size:12px; text-align:left; border: none;">* Note</th>
                <th colspan="1" style="color:#ffffff; border:none;"></th>
                <th colspan="1" style="border:none;"></th>

            </tr>
            <tr>
                <td style="width:250px; border:none;">
                    <b>-</b> Pada pemakaian <i>Compound Blend</i> diisi tanggal disposisinya saja
                </td>
                <td style="width:3px; border:none;"></td>
                <td style="border:none;">
                    <b>- OK</b>= Diterima
                </td>
            <tr>

                <td style="border:none;">
                    <b>- A</b>= <i>Appearance Check</i> mengacu pada limit Sample
                </td>
                <td style="border:none;"></td>
                <td style="border:none;">
                    <b>- NG</b>= Tidak Diterima
                </td>
            </tr>

            <tr>
                <td style="border:none;"><b>- Spl</b>= <i>Splace Dipped Cord</td>
                <td style="border:none;"></td>
                <td style="border:none;"><b>- (-)</b>= Tidak termasuk item check </td>
            </tr>
        </table> -->

    </div>
</body>


</html>