<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job Setup</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="d-flex justify-content-between">
        <p style="font-size:25px;"><b>Job Setup Callender</b></p>

        <p>

            <!-- <a href="<?php echo base_url( 'setup/cetak/' ) ?>" class="btn btn-primary" target="_blank">
                    <i class="fa fa-print"> </i> Cetak
                </a> -->

            <a href="<?php echo base_url( 'setup' ) ?>" class="btn btn-info">
                <i class="fa fa-backward"> </i> Kembali
            </a>
        </p>
    </div>

    <hr style="border: 1px solid gray; margin-bottom: 30px">
    <?php echo form_open( base_url( ( 'setup/edit/' . $setup->no_roll ) ) ); ?>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="no_mesin">Nomor Mesin</label>
            <input type="Text" value="<?php echo $setup->no_mesin ?>" class="form-control" name="no_mesin" id="no_mesin"
                placeholder="Nomor Mesin" required>
        </div>
        <div class="form-group col-md-3">
            <label for="tanggal_transaksi">Tanggal</label>
            <input type="text" class="form-control" value="<?php echo $setup->tanggal_transaksi ?>"
                name="tanggal_transaksi" id="tanggal_transaksi" placeholder="Tanggal" readonly>
            <input type="hidden" class="form-control" name="hidden_tanggal" id="hidden_tanggal" placeholder="Tanggal"
                readonly>

        </div>
        <div class="form-group col-md-3">
            <label for="operator">Operator</label>
            <input type="text" value="<?php echo $setup->operator ?>" class="form-control" name="operator" readonly
                id="operator" placeholder="Operator">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="shift">Shift</label>
            <input type="text" value="<?php echo $setup->shift ?>" class="form-control" name="shift" id="shift"
                readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="group">Group</label>
            <input type="text" value="<?php echo $setup->group ?>" class="form-control" name="group" id="group"
                placeholder="Cth : A / B / C">
        </div>
        <div class="form-group col-md-3">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" value="<?php echo $setup->nip ?>" readonly name="nip" id="nip"
                placeholder="NIP">
        </div>


    </div>
    <div>

    </div>
    <hr style="border: 1px solid gray; margin-bottom: 15px">

    <!-- Set Up Tools -->
    <fieldset>
        <legend style="margin-bottom:20px;text-align: center;"><b>Tools</b></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="id_tool_thickness">Thickness Gauge</label>
                <!-- <select class="form-control" id="id_tool_thickness" name="id_tool_thickness">
                        <option value="" disabled selected>Loading tools...</option>
                    </select> -->
                <input type="Text" value="<?php echo $setup->id_tool_thickness ?>" class="form-control"
                    name="id_tool_thickness" id="id_tool_thickness" placeholder="Thickness" readonly>
                <div id="search_result"></div>

            </div>

            <div class="form-group col-md-3">
                <label for="ok_kalibrasi_thickness">Stiker OK Kalibrasi (Thickness)</label>
                <input type="date" value="<?php echo $setup->ok_kalibrasi_thickness ?>" class="form-control"
                    name="ok_kalibrasi_thickness" id="ok_kalibrasi_thickness" readonly>
            </div>
            <div class="form-group col-md-3">
                <label for="expired_thickness">Thickness Gauge Expired</label>
                <input type="date" value="<?php echo $setup->expired_thickness ?>" class="form-control"
                    name="expired_thickness" id="expired_thickness" readonly>
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="id_tool_width">Stell Roll Meter</label>
                <input type="Text" value="<?php echo $setup->id_tool_width ?>" class="form-control" name="id_tool_width"
                    id="id_tool_width" placeholder="Width" readonly>
            </div>
            <div class="form-group col-md-3">
                <label for="ok_kalibrasi_width">Stiker OK Kalibrasi (Width)</label>
                <input type="date" value="<?php echo $setup->ok_kalibrasi_width ?>" class="form-control"
                    name="ok_kalibrasi_width" id="ok_kalibrasi_width" readonly placeholder="Stiker OK Kalibrasi ">
            </div>
            <div class="form-group col-md-3">
                <label for="expired_width">Steel Roll Meter Expired</label>
                <input type="date" value="<?php echo $setup->expired_width ?>" readonly class="form-control"
                    name="expired_width" id="expired_width" placeholder="Steel Roll Meter Expired">
            </div>
        </div>


    </fieldset>
    <hr style="border: 1px solid gray; margin-bottom: 15px">


    <!-- -->
    <!-- Set Up Pemakaian Material -->
    <fieldset>
        <legend style="margin-bottom:20px;text-align: center;"><b>Pemakaian Material</b></legend>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="no_roll">Nomor Roll</label>
                <input type="Text" value="<?php echo $setup->no_roll ?>" class="form-control" name="no_roll"
                    id="no_roll" readonly placeholder="Nomor Roll">
            </div>
            <div class="form-group col-md-2">
                <label for="item_code">Nomor Kode Item</label>
                <input type="text" value="<?php echo $setup->item_code ?>" class="form-control" name="item_code"
                    id="item_code" placeholder="Nomor Kode Item" readonly>
            </div>
            <div class="form-group col-md-2">
                <label for="no_spec">Nomor Spesifikasi</label>
                <input type="text" value="<?php echo $setup->no_spec ?>" class="form-control" name="no_spec"
                    id="no_spec" readonly placeholder="Nomor Spesifikasi">
            </div>
        </div>
        <hr>

        <!-- Set Up Pemakaian Material Dipped Cord -->
        <legend style="font-size:1.25em;margin-bottom:20px"><i>Dipped Cord</i></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="dc_supplier">Supplier</label>
                <input type="Text" value="<?php echo $setup->dc_supplier ?>" class="form-control" name="dc_supplier"
                    id="dc_supplier" placeholder="Supplier">
            </div>
            <div class="form-group col-md-3">
                <label for="dc_item_code">Kode Item</label>
                <input type="text" value="<?php echo $setup->dc_item_code ?>" class="form-control" name="dc_item_code"
                    id="dc_item_code" placeholder="Kode Item">
            </div>
            <div class="form-group col-md-3">
                <label for="dc_barcode_no">Nomor Barcode</label>
                <input type="text" value="<?php echo $setup->dc_barcode_no ?>" class="form-control" name="dc_barcode_no"
                    id="dc_barcode_no" placeholder="Nomor Barcode">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="dc_tanggal_masuk">Tanggal Masuk</label>
                <input type="date" value="<?php echo $setup->dc_tanggal_masuk ?>" class="form-control"
                    name="dc_tanggal_masuk" id="dc_tanggal_masuk" placeholder="Tanggal Masuk">
            </div>
            <div class="form-group col-md-3">
                <label for="dc_no_roll">Nomor Roll</label>
                <input type="text" value="<?php echo $setup->dc_no_roll ?>" class="form-control" name="dc_no_roll"
                    id="dc_no_roll" placeholder="Nomor Roll">
            </div>
            <div class="form-group col-md-3">
                <label for="dc_expired">Expired</label>
                <input type="date" value="<?php echo $setup->dc_expired ?>" class="form-control" name="dc_expired"
                    id="dc_expired" placeholder="Expired">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="dc_a">A</label>
                <select id="dc_a" name="dc_a" class="form-control">
                    <option disabled selected>Pilih</option>
                    <option value="OK" <?php echo ( $setup->dc_a === "OK" ) ? 'selected' : ''; ?>>OK</option>
                    <option value="NG" <?php echo ( $setup->dc_a === "NG" ) ? 'selected' : ''; ?>>NG</option>
                    <option value="-" <?php echo ( $setup->dc_a === "-" ) ? 'selected' : ''; ?>>-</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="dc_spl_a">Spl. (A)</label>
                <select id="dc_spl_a" value="<?php echo $setup->shift ?>" name="dc_spl_a" class="form-control">
                    <option disabled selected>Pilih</option>
                    <option value="OK" <?php echo ( $setup->dc_spl_a === "OK" ) ? 'selected' : ''; ?>>OK</option>
                    <option value="NG" <?php echo ( $setup->dc_spl_a === "NG" ) ? 'selected' : ''; ?>>NG</option>
                    <option value="-" <?php echo ( $setup->dc_spl_a === "-" ) ? 'selected' : ''; ?>>-</option>
                </select>
            </div>
        </div>
        <hr>

        <!-- Set Up Pemakaian Material Compound -->
        <legend style="font-size:1.25em;margin-bottom:20px;"><i>Compound</i></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="comp_code">Kode</label>
                <input type="Text" value="<?php echo $setup->comp_code ?>" class="form-control" name="comp_code"
                    id="comp_code" placeholder="Kode">
            </div>
            <div class="form-group col-md-3">
                <label for="comp_barcode">Nomor Barcode</label>
                <input type="text" value="<?php echo $setup->comp_barcode ?>" class="form-control" name="comp_barcode"
                    id="comp_barcode" placeholder="Nomor Barcode">
            </div>
            <div class="form-group col-md-3">
                <label for="comp_batch">Batch</label>
                <input type="text" value="<?php echo $setup->comp_batch ?>" class="form-control" name="comp_batch"
                    id="comp_batch" placeholder="Batch">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="comp_tgl_bln_grp_line">Tgl/Bln/Grp/Line</label>
                <input type="Text" value="<?php echo $setup->comp_tgl_bln_grp_line ?>" class="form-control"
                    name="comp_tgl_bln_grp_line" id="comp_tgl_bln_grp_line" placeholder="Contoh : 30/12/3/MC13">
            </div>
            <div class="form-group col-md-3">
                <label for="comp_expired">Expired</label>
                <input type="date" value="<?php echo $setup->comp_expired ?>" class="form-control" name="comp_expired"
                    id="comp_expired" placeholder="Expired">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="comp_a">A</label>
                <select id="comp_a" name="comp_a" class="form-control">
                    <option selected disabled>Pilih</option>
                    <option value="OK" <?php echo ( $setup->comp_a === "OK" ) ? 'selected' : ''; ?>>OK</option>
                    <option value="NG" <?php echo ( $setup->comp_a === "NG" ) ? 'selected' : ''; ?>>NG</option>
                    <option value=" -" <?php echo ( $setup->comp_a === "-" ) ? 'selected' : ''; ?>>-</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="comp_output_ext_a">Out-Put Ext. (A)</label>
                <select id="comp_output_ext_a" value="<?php echo $setup->shift ?>" name="comp_output_ext_a"
                    class="form-control">
                    <option selected disabled>Pilih</option>
                    <option value="OK" <?php echo ( $setup->comp_output_ext_a === "OK" ) ? 'selected' : ''; ?>>OK</option>
                    <option value="NG" <?php echo ( $setup->comp_output_ext_a === "NG" ) ? 'selected' : ''; ?>>NG</option>
                    <option value="-" <?php echo ( $setup->comp_output_ext_a === "-" ) ? 'selected' : ''; ?>>-</option>
                </select>
            </div>
        </div>
        <div>
            <table>
                <tr>
                    <th colspan="1">Note</th>
                    <th colspan="1" style="color:#ffffff">Note</th>
                    <th colspan="1"></th>

                </tr>
                <tr>
                    <td>
                        <b>-</b> Pada pemakaian <i>Compound Blend</i> diisi tanggal disposisinya saja
                    </td>
                    <td></td>
                    <td>
                        <b>-</b> OK = Diterima
                    </td>
                <tr>

                    <td>
                        <b>-</b> A = <i>Appearance Check</i> mengacu pada limit Sample
                    </td>
                    <td></td>
                    <td>
                        <b>-</b> NG = Tidak Diterima
                    </td>
                </tr>
                </tr>
                <tr>
                    <td><b>-</b> Spl = <i>Splace Dipped Cord</td>
                    <td></td>
                    <td><b>-</b> (-) = Tidak termasuk item check </td>
                </tr>
            </table>

        </div>

    </fieldset>


    <!-- <hr style="border: 1px solid gray; margin-bottom: 15px">
        <fieldset>
            <legend style="margin-bottom:20;text-align: center;"><b>Standard</b></legend>
        
        
            <legend style="font-size:1.25em;margin-bottom:20px;"><i>Product</i></legend>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="std_produk_ds">Thickness Drive Side</label>
                    <input type="Text" class="form-control" name="std_produk_ds" id="std_produk_ds" placeholder="milimeter">
                </div>
                <div class="form-group col-md-2">
                    <label for="std_produk_ctr">Thickness Center</label>
                    <input type="text" class="form-control" name="std_produk_ctr" id="std_produk_ctr" placeholder="milimeter">
                </div>
        
                <div class="form-group col-md-2">
                    <label for="std_produk_hs">Thickness Heater Side</label>
                    <input type="Text" class="form-control" name="std_produk_hs" id="std_produk_hs" placeholder="milimeter">
                </div>
                <div class="form-group col-md-2">
                    <label for="std_produk_width">Width</label>
                    <input type="text" class="form-control" name="std_produk_width" id="std_produk_width"
                        placeholder="milimeter">
                </div>
            </div>
        
            <legend style="font-size:1.25em;margin-bottom:20px;"><i>Process</i></legend>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="std_proses_fabric_before_calender">Fabric Tension Before Calender</label>
                    <input type="Text" class="form-control" name="std_proses_fabric_before_calender"
                        id="std_proses_fabric_before_calender" placeholder="milimeter">
                </div>
                <div class="form-group col-md-3">
                    <label for="std_proses_fabric_after_calender">Fabric Tension After Calender</label>
                    <input type="text" class="form-control" name="std_proses_fabric_after_calender"
                        id="std_proses_fabric_after_calender" placeholder="milimeter">
                </div>
        
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="std_proses_gaproll_ds_1_2">Gap Roll Drive Side 1&2</label>
                    <input type="text" class="form-control" name="std_proses_gaproll_ds_1_2" id="std_proses_gaproll_ds_1_2"
                        placeholder="milimeter">
                </div>
                <div class="form-group col-md-3">
                    <label for="std_proses_gaproll_ds_2_3">Gap Roll Drive Side 2&3</label>
                    <input type="text" class="form-control" name="std_proses_gaproll_ds_2_3" id="std_proses_gaproll_ds_2_3"
                        placeholder="milimeter">
                </div>
                <div class="form-group col-md-3">
                    <label for="std_proses_gaproll_ds_3_4">Gap Roll Drive Side 3&4</label>
                    <input type="text" class="form-control" name="std_proses_gaproll_ds_3_4" id="std_proses_gaproll_ds_3_4"
                        placeholder="milimeter">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="std_proses_crossing_hs_1_4">Crossing Heather Side 1&4</label>
                    <input type="text" class="form-control" name="std_proses_crossing_hs_1_4" id="std_proses_crossing_hs_1_4"
                        placeholder="milimeter">
                </div>
                <div class="form-group col-md-3">
                    <label for="std_proses_crossing_ds_1_4">Crossing Drive Side 1&4</label>
                    <input type="text" class="form-control" name="std_proses_crossing_ds_1_4" id="std_proses_crossing_ds_1_4"
                        placeholder="milimeter">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="std_proses_gaproll_hs_1_2">Gap Roll Heather Side 1&2</label>
                    <input type="text" class="form-control" name="std_proses_gaproll_hs_1_2" id="std_proses_gaproll_hs_1_2"
                        placeholder="milimeter">
                </div>
                <div class="form-group col-md-3">
                    <label for="std_proses_gaproll_hs_2_3">Gap Roll Heather Side 2&3</label>
                    <input type="text" class="form-control" name="std_proses_gaproll_hs_2_3" id="std_proses_gaproll_hs_2_3"
                        placeholder="milimeter">
                </div>
                <div class="form-group col-md-3">
                    <label for="std_proses_gaproll_hs_3_4">Gap Roll Heather Side 3&4</label>
                    <input type="text" class="form-control" name="std_proses_gaproll_hs_3_4" id="std_proses_gaproll_hs_3_4"
                        placeholder="milimeter">
                </div>
        
            </div>
        
        
        
        </fieldset> -->

    <hr style="border: 1px solid gray; margin-bottom: 15px">
    <fieldset>
        <legend style="margin-bottom:20;text-align: center;"><b>Actual</b></legend>

        <!-- Actual Produk -->
        <legend style="font-size:1.25em;margin-bottom:20px;"><i>Product</i></legend>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="act_produk_ds">Thickness Drive Side</label>
                <input type="Text" value="<?php echo $setup->act_produk_ds ?>" class="form-control" name="act_produk_ds"
                    id="act_produk_ds" placeholder="milimeter">
            </div>
            <div class="form-group col-md-2">
                <label for="act_produk_ctr">Thickness Center</label>
                <input type="text" value="<?php echo $setup->act_produk_ctr ?>" class="form-control"
                    name="act_produk_ctr" id="act_produk_ctr" placeholder="milimeter">
            </div>

            <div class="form-group col-md-2">
                <label for="act_produk_hs">Thickness Heater Side</label>
                <input type="Text" value="<?php echo $setup->act_produk_hs ?>" class="form-control" name="act_produk_hs"
                    id="act_produk_hs" placeholder="milimeter">
            </div>
            <div class="form-group col-md-2">
                <label for="act_produk_width">Width</label>
                <input type="text" value="<?php echo $setup->act_produk_width ?>" class="form-control"
                    name="act_produk_width" id="act_produk_width" placeholder="milimeter">
            </div>
        </div>

        <!-- Actual Proses -->
        <legend style="font-size:1.25em;margin-bottom:20px;"><i>Process</i></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="act_proses_fabric_before_calender">Fabric Tension Before Calender</label>
                <input type="Text" value="<?php echo $setup->act_proses_fabric_before_calender ?>" class="form-control"
                    name="act_proses_fabric_before_calender" id="act_proses_fabric_before_calender"
                    placeholder="milimeter">
            </div>
            <div class="form-group col-md-3">
                <label for="act_proses_fabric_after_calender">Fabric Tension After Calender</label>
                <input type="text" value="<?php echo $setup->act_proses_fabric_after_calender ?>" class="form-control"
                    name="act_proses_fabric_after_calender" id="act_proses_fabric_after_calender"
                    placeholder="milimeter">
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="act_proses_gaproll_ds_1_2">Gap Roll Drive Side 1&2</label>
                <input type="text" value="<?php echo $setup->act_proses_gaproll_ds_1_2 ?>" class="form-control"
                    name="act_proses_gaproll_ds_1_2" id="act_proses_gaproll_ds_1_2" placeholder="milimeter">
            </div>
            <div class="form-group col-md-3">
                <label for="act_proses_gaproll_ds_2_3">Gap Roll Drive Side 2&3</label>
                <input type="text" value="<?php echo $setup->act_proses_gaproll_ds_2_3 ?>" class="form-control"
                    name="act_proses_gaproll_ds_2_3" id="act_proses_gaproll_ds_2_3" placeholder="milimeter">
            </div>
            <div class="form-group col-md-3">
                <label for="act_proses_gaproll_ds_3_4">Gap Roll Drive Side 3&4</label>
                <input type="text" value="<?php echo $setup->act_proses_gaproll_ds_3_4 ?>" class="form-control"
                    name="act_proses_gaproll_ds_3_4" id="act_proses_gaproll_ds_3_4" placeholder="milimeter">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="act_proses_crossing_hs_1_4">Crossing Heather Side 1&4</label>
                <input type="text" value="<?php echo $setup->act_proses_crossing_hs_1_4 ?>" class="form-control"
                    name="act_proses_crossing_hs_1_4" id="act_proses_crossing_hs_1_4" placeholder="milimeter">
            </div>
            <div class="form-group col-md-3">
                <label for="act_proses_crossing_ds_1_4">Crossing Drive Side 1&4</label>
                <input type="text" value="<?php echo $setup->act_proses_crossing_ds_1_4 ?>" class="form-control"
                    name="act_proses_crossing_ds_1_4" id="act_proses_crossing_ds_1_4" placeholder="milimeter">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="act_proses_gaproll_hs_1_2">Gap Roll Heather Side 1&2</label>
                <input type="text" value="<?php echo $setup->act_proses_gaproll_hs_1_2 ?>" class="form-control"
                    name="act_proses_gaproll_hs_1_2" id="act_proses_gaproll_hs_1_2" placeholder="milimeter">
            </div>
            <div class="form-group col-md-3">
                <label for="act_proses_gaproll_hs_2_3">Gap Roll Heather Side 2&3</label>
                <input type="text" value="<?php echo $setup->act_proses_gaproll_hs_2_3 ?>" class="form-control"
                    name="act_proses_gaproll_hs_2_3" id="act_proses_gaproll_hs_2_3" placeholder="milimeter">
            </div>
            <div class="form-group col-md-3">
                <label for="act_proses_gaproll_hs_3_4">Gap Roll Heather Side 3&4</label>
                <input type="text" value="<?php echo $setup->act_proses_gaproll_hs_3_4 ?>" class="form-control"
                    name="act_proses_gaproll_hs_3_4" id="act_proses_gaproll_hs_3_4" placeholder="milimeter">
            </div>
        </div>

    </fieldset>

    <hr style="border: 1px solid gray; margin-bottom: 15px">

    <fieldset>
        <div class="form-row">

            <div class="form-group col-md-2">
                <label for="appr_treatment">Appearance Treatment</label>
                <select id="appr_treatment" name="appr_treatment" class="form-control">
                    <option value="<?php echo $setup->shift ?>" selected disabled>Pilih</option>
                    <option value="OK" <?php echo ( $setup->appr_treatment === "OK" ) ? 'selected' : ''; ?>>OK</option>
                    <option value="NG" <?php echo ( $setup->appr_treatment === "NG" ) ? 'selected' : ''; ?>>NG</option>
                    <option value="-" <?php echo ( $setup->appr_treatment === "-" ) ? 'selected' : ''; ?>>-</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="penggantian_kondisi_linear">Penggantian & Kondisi Linier</label>
                <select id="penggantian_kondisi_linear" name="penggantian_kondisi_linear" class="form-control">
                    <option value="<?php echo $setup->shift ?>" selected disabled>Pilih</option>
                    <option value="OK" <?php echo ( $setup->penggantian_kondisi_linear === "OK" ) ? 'selected' : ''; ?>>OK
                    </option>
                    <option value="NG" <?php echo ( $setup->penggantian_kondisi_linear === "NG" ) ? 'selected' : ''; ?>>NG
                    </option>
                    <option value="-" <?php echo ( $setup->penggantian_kondisi_linear === "-" ) ? 'selected' : ''; ?>>-
                    </option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="supply_treatment">Supply Treatment</label>
                <select id="supply_treatment" name="supply_treatment" class="form-control">
                    <option value="<?php echo $setup->shift ?>" selected disabled>Pilih</option>
                    <option value="OK" <?php echo ( $setup->supply_treatment === "OK" ) ? 'selected' : ''; ?>>OK</option>
                    <option value="NG" <?php echo ( $setup->supply_treatment === "NG" ) ? 'selected' : ''; ?>>NG</option>
                    <option value="-" <?php echo ( $setup->supply_treatment === "-" ) ? 'selected' : ''; ?>>-</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="quantity">Quantity</label>
                <input type="text" value="<?php echo $setup->quantity ?>" class="form-control" name="quantity"
                    id="quantity" placeholder="Meter">
            </div>
            <div class="form-group col-md-3">
                <label for="tag_identified">Tag Identitas & Barcode</label>
                <select id="tag_identified" name="tag_identified" class="form-control">
                    <option value="<?php echo $setup->shift ?>" selected disabled>Pilih</option>
                    <option value="OK" <?php echo ( $setup->tag_identified === "OK" ) ? 'selected' : ''; ?>>OK</option>
                    <option value="NG" <?php echo ( $setup->tag_identified === "NG" ) ? 'selected' : ''; ?>>NG</option>
                    <option value="-" <?php echo ( $setup->tag_identified === "-" ) ? 'selected' : ''; ?>>-</option>
                </select>
            </div>

        </div>
        <div>
            <table>
                <tr>
                    <th colspan="1">Note</th>
                    <th colspan="1" style="color:#ffffff">Note</th>
                    <th colspan="1"></th>

                </tr>
                <tr>
                    <td>
                        <b>-</b> OK = Diterima
                    </td>
                    <td>
                    </td>
                    <td></td>
                <tr>

                    <td>
                        <b>-</b> NG = Tidak Diterima
                    </td>
                    <td>
                    </td>
                    <td></td>
                </tr>
                </tr>
                <tr>
                    <td><b>-</b> (-) = Tidak termasuk item check </td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

        </div>

    </fieldset>

    <button type="button" value="Submit" id="EditButton" data-toggle="modal" data-target="#EditModal"
        class="btn btn-primary mt-5" style="width:100%">Simpan Perubahan</button>
    <!-- Modal -->
    <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Yakin ingin menyimpan perubahan?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        $(document).ready(function () {
            // Inisialisasi modal
            $('#EditModal').modal({
                show: false
            });

            // Menampilkan modal ketika tombol dengan id #EditButton diklik
            $('#EditButton').click(function () {
                $('#EditModal').modal('show');
            });
        });
    </script> -->
    <script>
        $(document).ready(function () {
            // Inisialisasi modal
            $('#EditModal').modal({
                show: false
            });

            // Menampilkan modal ketika tombol dengan id #EditButton diklik
            $('#EditButton').click(function () {
                $('#EditModal').modal('show');
            });

            // Event handler ketika modal ditutup
            $('#EditModal').on('hidden.bs.modal', function (e) {
                // Menghapus overlay
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            });
            $('#EditModal').on('hidden.bs.modal', function (e) {
                // Menghapus overlay
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

                // Mengembalikan overflow-y pada body
                $('body').css('overflow-y', 'auto');
            });
        });
    </script>
    <?= form_close() ?>
    </hr>
</body>

</html>