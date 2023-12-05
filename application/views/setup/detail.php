<div class="d-flex justify-content-between">
    <div class="butLeft">
        <a href="<?php echo base_url( 'setup' ) ?>" class="btn btn-success">
            <i class="fa fa-backward"> </i> Kembali
        </a>
    </div>
    <div class="butRight">
        <?php if ($this->session->userdata( 'akses_level' ) == 'Admin') { ?>
            <a href="<?php echo base_url( 'setup/edit_data/' . $setup->no_roll ) ?>" class="btn btn-warning">
                <i class="fa fa-print" style=""> </i> Edit
            </a>
        <?php } ?>
        <a href="<?php echo base_url( 'setup/cetak/' . $setup->no_roll ) ?>" class="btn btn-info ml-2" target="_blank">
            <i class="fa fa-print"> </i> Cetak
        </a>
    </div>

</div>

<p class="text-right">


</p>


<hr>


<table id="tre" style="width:100%" class="table table-hover">
    <thead>
        <tr class="bg-gradient-primary">
            <!-- <th colspan="2"></th> -->
            <th colspan="6" style="text-align:center; width:50%; font-size:23px;">Job Set Up Callender </th>
            <!-- <th colspan="2"></th> -->
        </tr>

    </thead>
    <tr>
        <td>Operator</td>
        <td>:
            <?php echo $setup->operator ?>
        </td>
        <td style="width:50px"></td>
        <td style="width:50px"> </td>
        <td>Nomor Mesin </td>
        <td style="width:50px">:
            <?php echo $setup->no_mesin ?>
        </td>
    </tr>
    <tr>
        <td>NIP</td>
        <td>:
            <?php echo $setup->nip ?>
        </td>
        <td></td>
        <td> </td>
        <td>Tanggal </td>
        <td>:
            <?php
            $tanggal_transaksi = $setup->tanggal_transaksi;
            $formattedDate     = date( 'd M Y  h:i:s', strtotime( $tanggal_transaksi ) );
            echo $formattedDate; ?>
        </td>
    </tr>
    <tr>
        <td>Shift</td>
        <td>:
            <?php echo $setup->shift ?>
        </td>
        <td></td>
        <td> </td>
        <td>Group </td>
        <td>:
            <?php echo $setup->group ?>
        </td>
    </tr>
</table>
<!-- <hr style="border: 0.5px solid gray; margin-bottom: 25px"> -->
<table id="tru" style="width:100%" class="table table-hover">
    <thead>

        <tr class="bg-gradient-primary">
            <th colspan="6" style="font-size:20px; padding-left:40px">Tools</th>
        </tr>
    </thead>
    <tr>
        <td style="width:180px">No. Thickness Gauge</td>
        <td>:
            <?php echo $setup->id_tool_thickness ?>
        </td>
        <td style="width:150px"></td>
        <td style="width:150px"> </td>
        <td>No. Steel Roll Meter </td>
        <td style="width:270px">:
            <?php echo $setup->id_tool_width ?>
        </td>
    </tr>
    <tr>
        <td>Thickness Kalibrasi</td>
        <td>:
            <?php
            $ok_kalibrasi_thickness = $setup->ok_kalibrasi_thickness;
            $formattedDate          = date( 'd M Y', strtotime( $ok_kalibrasi_thickness ) );
            echo $formattedDate; ?>
        </td>
        <td></td>
        <td> </td>
        <td>Width Kalibrasi </td>
        <td>:
            <?php
            $ok_kalibrasi_width = $setup->ok_kalibrasi_width;
            $formattedDate      = date( 'd M Y', strtotime( $ok_kalibrasi_width ) );
            echo $formattedDate; ?>
        </td>
    </tr>
    <tr>
        <td>Expired Thickness</td>
        <td>:
            <?php
            $expired_thickness = $setup->expired_thickness;
            $formattedDate     = date( 'd M Y', strtotime( $expired_thickness ) );
            echo $formattedDate; ?>
        </td>
        <td></td>
        <td> </td>
        <td>Expired Width </td>
        <td>:
            <?php
            $expired_width = $setup->expired_width;
            $formattedDate = date( 'd M Y', strtotime( $expired_width ) );
            echo $formattedDate; ?>
        </td>
    </tr>
</table>
<!-- <hr style="border: 0.5px solid gray; margin-bottom: 25px"> -->
<table id="tru" style="width:100%;" class="table table-hover ">
    <thead>
        <tr class="bg-primary">
            <th colspan="5" style=" width:100%; text-align:cente; font-size:20px; padding-left:40px ">Pemakaian Material
            </th>
        </tr>
        <tr class="bg-gradient-warning" id="rem">
            <th colspan="2" style="text-align:center; font-size:18px;">Dipped Cord</th>
            <th colspan="1" style="text-align:center; font-size:18px;width:100px" class="bg-white"></th>
            <th colspan="2" style="text-align:center; font-size:18px;">Compound</th>

        </tr>
    </thead>
    <tr>
        <td style="width:150px">No. Spesifikasi</td>
        <td style="width:110px">:
            <?php echo $setup->no_spec ?>
        </td>
        <td></td>

        <td>Kode</td>
        <td>:
            <?php echo $setup->comp_code ?>
        </td>
    </tr>
    <tr>
        <td>Supplier</td>
        <td>:
            <?php echo $setup->dc_supplier ?>
        </td>
        <td></td>
        <td>Barcode No.</td>
        <td>:
            <?php echo $setup->comp_barcode ?> <!---sudah compound- -->
        </td>
    </tr>
    <tr>
        <td>Kode Item</td>
        <td>:
            <?php echo $setup->dc_item_code ?>
        </td>
        <td></td>
        <td>Batch</td>
        <td>:
            <?php echo $setup->comp_batch ?>
        </td>
    </tr>
    <tr>
        <td>No. Barcode</td>
        <td>:
            <?php echo $setup->dc_barcode_no ?> <!---sudah Dipp Cord- -->
        </td>
        <td></td>
        <td>Tgl/Bln/Grp/Line</td>
        <td>:
            <?php echo $setup->comp_tgl_bln_grp_line ?>
        </td>
    </tr>
    <tr>
        <td>Tanggal Masuk</td>
        <td>:
            <?php
            $dc_tanggal_masuk = $setup->dc_tanggal_masuk;
            $formattedDate    = date( 'd M Y', strtotime( $dc_tanggal_masuk ) );
            echo $formattedDate; ?>
        </td>
        <td></td>
        <td>Expired</td>
        <td>: <!---compound Cord- -->
            <?php
            $comp_expired  = $setup->comp_expired;
            $formattedDate = date( 'd M Y', strtotime( $comp_expired ) );
            echo $formattedDate; ?>
        </td>
    </tr>
    <tr>
        <td>No Roll</td>
        <td>:
            <?php echo $setup->dc_no_roll ?>
        </td>
        <td></td>

        <td>A</td>
        <td>:
            <?php echo $setup->comp_a ?> <!---compound- -->
        </td>
    </tr>
    <tr>
        <td>Expired</td>
        <td>: <!---Dipped Cord- -->
            <?php
            $dc_expired    = $setup->dc_expired;
            $formattedDate = date( 'd M Y', strtotime( $dc_expired ) );
            echo $formattedDate; ?>
        </td>
        <td></td>
        <td>Output Ext. A</td>
        <td>:
            <?php echo $setup->comp_output_ext_a ?>
        </td>
        <td>
    </tr>
    <tr>
        <td>A</td>
        <td>:
            <?php echo $setup->dc_a ?> <!---Dipped Cord- -->
        </td>
        <td></td>
        <td></td>
        <td>

        </td>
    </tr>
    <tr>
        <td>Spl (A)</td>
        <td>:
            <?php echo $setup->dc_spl_a ?>
        </td>
        <td></td>
        <td></td>
        <td>
        </td>
    </tr>
</table>
<!-- <hr style="border: 0.5px solid gray; margin-bottom: 25px"> -->

<table id="tru" style="width:100%" class="table table-hover">
    <thead>
        <tr class="bg-gradient-primary">
            <th colspan="3" style="font-size:20px; padding-left:40px">Standard Produk</th>
            <th colspan="3" style="font-size:20px; text-align:right; padding-right:40px">Actual Produk</th>
        </tr>
        <tr class="bg-gradient-warning">
            <th colspan="2" style="text-align:center; font-size:18px;">Produk</th>
            <td colspan="2" style="text-align:center;" class="bg-white"></td>
            <th colspan="2" style="text-align:center;font-size:18px;">Produk</th>
        </tr>

    </thead>
    <tr>
        <td>Thickness Drive Side</td>
        <td>:
            <?php echo $setup->std_produk_ds . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Thickness Drive Side</td>
        <td>:
            <?php echo $setup->act_produk_ds . " mm" ?>
        </td>
    </tr>
    <tr>
        <td>Thickness Center</td>
        <td>:
            <?php echo $setup->std_produk_ctr . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Thickness Center </td>
        <td>:
            <?php echo $setup->act_produk_ctr . " mm" ?>
        </td>
    </tr>
    <tr>
        <td>Thickness Heather Side</td>
        <td>:
            <?php echo $setup->std_produk_hs . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Thickness Heather Side</td>
        <td>:
            <?php echo $setup->act_produk_hs . " mm" ?>
        </td>
    </tr>
    <tr>
        <td>Width</td>
        <td>:
            <?php echo $setup->std_produk_width . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Width</td>
        <td>:
            <?php echo $setup->act_produk_width . " mm" ?>
        </td>
    </tr>
    <thead>

        <tr class="bg-gradient-warning">
            <th colspan="2" style="text-align:center; font-size:18px;">Proses</th>
            <td colspan="2" style="text-align:center;" class="bg-white"></td>
            <th colspan="2" style="text-align:center; font-size:18px;">Proses</th>
        </tr>
    </thead>
    <tr>
        <td>Fabric Tension Before Calender</td>
        <td>:
            <?php echo $setup->std_proses_fabric_before_calender . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Fabric Tension Before Calender</td>
        <td>:
            <?php echo $setup->act_proses_fabric_before_calender . " mm" ?>
        </td>
    </tr>
    <tr>
        <td>Fabric Tension After Calender</td>
        <td>:
            <?php echo $setup->std_proses_fabric_after_calender . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Fabric Tension After Calender</td>
        <td>:
            <?php echo $setup->act_proses_fabric_after_calender . " mm" ?>
        </td>
    </tr>
    <tr>
        <td>Gap Roll Drive Side 1 & 2</td>
        <td>:
            <?php echo $setup->std_proses_gaproll_ds_1_2 . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Gap Roll Drive Side 1 & 2</td>
        <td>:
            <?php echo $setup->act_proses_gaproll_ds_1_2 . " mm" ?>
        </td>
    </tr>
    <tr>
        <td>Gap Roll Drive Side 2 & 3</td>
        <td>:
            <?php echo $setup->std_proses_gaproll_ds_2_3 . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Gap Roll Drive Side 2 & 3</td>
        <td>:
            <?php echo $setup->act_proses_gaproll_ds_2_3 . " mm" ?>
        </td>
    </tr>
    <tr>
        <td>Gap Roll Drive Side 3 & 4</td>
        <td>:
            <?php echo $setup->std_proses_gaproll_ds_3_4 . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Gap Roll Drive Side 3 & 4</td>
        <td>:
            <?php echo $setup->act_proses_gaproll_ds_3_4 . " mm" ?>
        </td>
    </tr>
    <tr>
        <td>Crossing Heather Side 1 & 4</td>
        <td>:
            <?php echo $setup->std_proses_crossing_hs_1_4 . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Crossing Heather Side 1 & 4</td>
        <td>:
            <?php echo $setup->act_proses_crossing_hs_1_4 . " mm" ?>
        </td>
    </tr>
    <tr>
        <td>Crossing Drive Side 1 & 4</td>
        <td>:
            <?php echo $setup->std_proses_crossing_ds_1_4 . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Crossing Drive Side 1 & 4</td>
        <td>:
            <?php echo $setup->act_proses_crossing_ds_1_4 . " mm" ?>
        </td>
    </tr>
    <tr>
        <td>Gap Roll Heather Side 1 & 2</td>
        <td>:
            <?php echo $setup->std_proses_gaproll_hs_1_2 . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Gap Roll Heather Side 1 & 2</td>
        <td>:
            <?php echo $setup->act_proses_gaproll_hs_1_2 . " mm" ?>
        </td>
    </tr>
    <tr>
        <td>Gap Roll Heather Side 2 & 3</td>
        <td>:
            <?php echo $setup->std_proses_gaproll_hs_2_3 . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Gap Roll Heather Side 2 & 3</td>
        <td>:
            <?php echo $setup->act_proses_gaproll_hs_2_3 . " mm" ?>
        </td>
    </tr>
    <tr>
        <td>Gap Roll Heather Side 3 & 4</td>
        <td>:
            <?php echo $setup->std_proses_gaproll_hs_3_4 . " mm" ?>
        </td>
        <td></td>
        <td> </td>
        <td>Gap Roll Heather Side 3 & 4</td>
        <td>:
            <?php echo $setup->act_proses_gaproll_hs_3_4 . " mm" ?>
        </td>
    </tr>
</table>
<hr style="border: 0.5px solid gray; margin-bottom: 25px">
<table style="width:100%" class="table table-hover">
    <!-- <tr>
        <th colspan="2"></th>
        <th colspan="2" style="text-align:center; width:50%;"></th>
        <th colspan="2"></th>
    </tr> -->
    <tr>
        <td style="width:330px">Appearance Treatment</td>
        <td>:
            <?php echo $setup->appr_treatment ?>
        </td>
        <td style="width:250px"></td>
        <td> </td>
        <td>Penggantian & Kondisi Linear </td>
        <td style="width:290px">:
            <?php echo $setup->penggantian_kondisi_linear ?>
        </td>
    </tr>
    <tr>
        <td>Supply Treatment</td>
        <td>:
            <?php echo $setup->supply_treatment ?>
        </td>
        <td></td>
        <td> </td>
        <td>Quantity </td>
        <td>:
            <?php echo $setup->quantity . " m" ?>
        </td>
    </tr>

</table>

<!-- <hr style="border: 0.5px solid gray; margin-bottom: 25px"> -->




<!--  -->

<!-- <form>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputEmail4">Nomor Mesin</label>
            <input type="Text" class="form-control" id="inputEmail4" placeholder="Nomor Mesin"
                value="<?php echo $setup->no_mesin ?>">
        </div>
        <div class=" form-group col-md-3">
            <label for="inputTanggal">Tanggal</label>
            <input type="date" class="form-control" id="inputTanggal" placeholder="Tanggal"
                value="<?php echo $setup->tanggal_transaksi ?>">
        </div>
        <div class="form-group col-md-3">
            <label for="inputOperator">Operator</label>
            <input type="text" class="form-control" id="inputOperator" placeholder="Operator"
                value="<?php echo $setup->operator ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputShift">Shift</label>
            <select id="inputShift" class="form-control" value="<?php echo $setup->shift ?>">
                <option selected>Pilih</option>
                <option>Shift 1</option>
                <option>Shift 2</option>
                <option>Shift 3</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="inputGroup">Group</label>
            <input type="text" class="form-control" id="inputGroup" placeholder="Group"
                value="<?php echo $setup->group ?>">
        </div>
        <div class="form-group col-md-3">
            <label for="inputNip">NIP</label>
            <input type="text" class="form-control" id="inputNip" placeholder="NIP" value="<?php echo $setup->nip ?>">
        </div>
    </div>
    <hr style="border: 1px solid gray; margin-bottom: 15px"> -->

<!-- Set Up Tools -->
<!-- <fieldset>
        <legend style="margin-bottom:20px;text-align: center;"><b>Tools</b></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputThickness">No. Thickness Gauge</label>
                <input type="Text" class="form-control" id="inputThickness"
                    value="<?php echo $setup->id_tool_thickness ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputKalibrasiThick">Stiker OK Kalibrasi (Thickness)</label>
                <input type="date" class="form-control" id="inputKalibrasiThick"
                    value="<?php echo $setup->ok_kalibrasi_thickness ?>" disabled>
            </div>
            <div class="form-group col-md-3">
                <label for="expiredThickness">Thickness Gauge Expired</label>
                <input type="date" class="form-control" id="expiredThickness"
                    value="<?php echo $setup->expired_thickness ?>" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputWidth">No. Stell Roll Meter</label>
                <input type="Text" class="form-control" id="inputWidth" value="<?php echo $setup->id_tool_width ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputKalibrasiWidth">Stiker OK Kalibrasi (Width)</label>
                <input type="date" class="form-control" id="inputKalibrasiWidth"
                    value="<?php echo $setup->ok_kalibrasi_width ?>" disabled>
            </div>
            <div class="form-group col-md-3">
                <label for="expiredWidth">Steel Roll Meter Expired</label>
                <input type="date" class="form-control" id="expiredWidth" value="<?php echo $setup->expired_width ?>"
                    disabled>
            </div>
        </div>
    </fieldset>
    <hr style="border: 1px solid gray; margin-bottom: 15px"> -->


<!-- Set Up Pemakaian Material -->
<!-- <fieldset>
        <legend style="margin-bottom:20px;text-align: center;"><b>Pemakaian Material</b></legend>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputNoRoll">Nomor Roll</label>
                <input type="Text" class="form-control" id="inputNoRoll" value="<?php echo $setup->no_roll ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="noKodeItem">Nomor Kode Item</label>
                <input type="text" class="form-control" id="noKodeItem" value="<?php echo $setup->item_code ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="noSpec">Nomor Spesifikasi</label>
                <input type="text" class="form-control" id="noSpec" value="<?php echo $setup->no_spec ?>">
            </div>
        </div>
        <hr> -->

<!-- Set Up Pemakaian Material Dipped Cord -->
<!-- <legend style="font-size:1.25em;margin-bottom:20px"><i>Dipped Cord</i></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputSupplier">Supplier</label>
                <input type="Text" class="form-control" id="inputSupplier" value="<?php echo $setup->dc_supplier ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputDcitemCode">Kode Item</label>
                <input type="text" class="form-control" id="inputDcitemCode" value="<?php echo $setup->dc_item_code ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputBarcode">Nomor Barcode</label>
                <input type="text" class="form-control" id="inputBarcode" value="<?php echo $setup->dc_barcode_no ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputTglMasuk">Tanggal Masuk</label>
                <input type="datetime-local" class="form-control" id="inputTglMasuk"
                    value="<?php echo $setup->dc_tanggal_masuk ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputDcRoll">Nomor Roll</label>
                <input type="text" class="form-control" id="inputDcRoll" value="<?php echo $setup->dc_no_roll ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputDcExpired">Expired</label>
                <input type="datetime-local" class="form-control" id="inputDcExpired"
                    value="<?php echo $setup->dc_expired ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputDcA">A</label>
                <select id="inputDcA" class="form-control">
                    <option selected>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputDcSplA">Spl. (A)</label>
                <select id="inputDcSplA" class="form-control">
                    <option selected>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
        </div>
        <hr> -->

<!-- Set Up Pemakaian Material Compound -->
<!-- <legend style="font-size:1.25em;margin-bottom:20px;"><i>Compound</i></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputCompCode">Kode</label>
                <input type="Text" class="form-control" id="inputCompCode" value="<?php echo $setup->comp_code ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputCompBarcode">Nomor Barcode</label>
                <input type="text" class="form-control" id="inputCompBarcode"
                    value="<?php echo $setup->comp_barcode ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputCompBatch">Batch</label>
                <input type="text" class="form-control" id="inputCompBatch" value="<?php echo $setup->comp_batch ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputCompTgl">Tgl/Bln/Grp/Line</label>
                <input type="Text" class="form-control" id="inputCompTgl"
                    value="<?php echo $setup->comp_tgl_bln_grp_line ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputCompExpired">Expired</label>
                <input type="date" class="form-control" id="inputCompExpired"
                    value="<?php echo $setup->comp_expired ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputCompA">A</label>
                <select id="inputCompA" class="form-control">
                    <option selected>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputCompExtA">Out-Put Ext. (A)</label>
                <select id="inputCompExtA" class="form-control">
                    <option selected>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
        </div>

    </fieldset>


    <hr style="border: 1px solid gray; margin-bottom: 15px">

    <fieldset>
        <legend style="margin-bottom:20;text-align: center;"><b>Standard</b></legend> -->

<!-- Standar Produk -->
<!-- <legend style="font-size:1.25em;margin-bottom:20px;"><i>Product</i></legend>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputThicknessDS">Thickness Drive Side</label>
                <input type="Text" class="form-control" id="inputThicknessDS"
                    value="<?php echo $setup->std_produk_ds ?>" disabled>
            </div>
            <div class="form-group col-md-2">
                <label for="inputThickCenter">Thickness Center</label>
                <input type="text" class="form-control" id="inputThickCenter"
                    value="<?php echo $setup->std_produk_ctr ?>" disabled>
            </div>

            <div class="form-group col-md-2">
                <label for="inputThicknessHS">Thickness Heater Side</label>
                <input type="Text" class="form-control" id="inputThicknessHS"
                    value="<?php echo $setup->std_produk_hs ?>" disabled>
            </div>
            <div class="form-group col-md-2">
                <label for="inputStdWidth">Width</label>
                <input type="text" class="form-control" id="inputStdWidth"
                    value="<?php echo $setup->std_produk_width ?>" disabled>
            </div>
        </div> -->
<!-- Standar Proses -->
<!-- <legend style="font-size:1.25em;margin-bottom:20px;"><i>Process</i></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputFabricBeforeCall">Fabric Tension Before Calender</label>
                <input type="Text" class="form-control" id="inputFabricBeforeCall"
                    value="<?php echo $setup->std_proses_fabric_before_calender . " mm" ?>" disabled>
            </div>
            <div class="form-group col-md-3">
                <label for="inputFabricAfterCall">Fabric Tension After Calender</label>
                <input type="text" class="form-control" id="inputFabricAfterCall"
                    value="<?php echo $setup->std_proses_fabric_after_calender . " mm" ?>" disabled>
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputGapRoll1-2">Gap Roll Drive Side 1&2</label>
                <input type="text" class="form-control" id="inputGapRoll1-2"
                    value="<?php echo $setup->std_proses_gaproll_ds_1_2 . " mm" ?>" disabled>
            </div>
            <div class="form-group col-md-3">
                <label for="inputGapRoll2-3">Gap Roll Drive Side 2&3</label>
                <input type="text" class="form-control" id="inputGapRoll2-3"
                    value="<?php echo $setup->std_proses_gaproll_ds_2_3 . " mm" ?>" disabled>
            </div>
            <div class="form-group col-md-3">
                <label for="inputGapRoll3-4">Gap Roll Drive Side 3&4</label>
                <input type="text" class="form-control" id="inputGapRoll3-4"
                    value="<?php echo $setup->std_proses_gaproll_ds_3_4 . " mm" ?>" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputCrossingHS">Crossing Heather Side 1&4</label>
                <input type="text" class="form-control" id="inputCrossingHS"
                    value="<?php echo $setup->std_proses_crossing_hs_1_4 . " mm" ?>" disabled>
            </div>
            <div class="form-group col-md-3">
                <label for="inputCrossingDS">Crossing Drive Side 1&4</label>
                <input type="text" class="form-control" id="inputCrossingDS"
                    value="<?php echo $setup->std_proses_crossing_ds_1_4 . " mm" ?>" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputGapRollHS1-2">Gap Roll Heather Side 1&2</label>
                <input type="text" class="form-control" id="inputGapRollHS1-2"
                    value="<?php echo $setup->std_proses_gaproll_hs_1_2 . " mm" ?>" disabled>
            </div>
            <div class="form-group col-md-3">
                <label for="inputGapRollHS2-3">Gap Roll Heather Side 2&3</label>
                <input type="text" class="form-control" id="inputGapRollHS2-3"
                    value="<?php echo $setup->std_proses_gaproll_hs_2_3 . " mm" ?>" disabled>
            </div>
            <div class="form-group col-md-3">
                <label for="inputGapRollHS3-4">Gap Roll Heather Side 3&4</label>
                <input type="text" class="form-control" id="inputGapRollHS3-4"
                    value="<?php echo $setup->std_proses_gaproll_hs_3_4 . " mm" ?>" disabled>
            </div>
        </div>

    </fieldset>

    <hr style="border: 1px solid gray; margin-bottom: 15px">
    <fieldset>
        <legend style="margin-bottom:20;text-align: center;"><b>Actual</b></legend> -->

<!-- Actual Produk -->
<!-- <legend style="font-size:1.25em;margin-bottom:20px;"><i>Product</i></legend>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputActualThicknessDS">Thickness Drive Side</label>
                <input type="Text" class="form-control" id="inputActualThicknessDS"
                    value="<?php echo $setup->act_produk_ds . " mm" ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="inputActualThickCenter">Thickness Center</label>
                <input type="text" class="form-control" id="inputActualThickCenter"
                    value="<?php echo $setup->act_produk_ctr . " mm" ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="inputActualThicknessHS">Thickness Heater Side</label>
                <input type="Text" class="form-control" id="inputActualThicknessHS"
                    value="<?php echo $setup->act_produk_hs . " mm" ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="inputActualWidth">Width</label>
                <input type="text" class="form-control" id="inputActualWidth"
                    value="<?php echo $setup->act_produk_width . " mm" ?>">
            </div>
        </div> -->

<!-- Actual Proses -->
<!-- <legend style="font-size:1.25em;margin-bottom:20px;"><i>Process</i></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputFabricBeforeActual">Fabric Tension Before Calender</label>
                <input type="Text" class="form-control" id="inputFabricBeforeActual"
                    value="<?php echo $setup->act_proses_fabric_before_calender . " mm" ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputFabricAfterActual">Fabric Tension After Calender</label>
                <input type="text" class="form-control" id="inputFabricAfterActual"
                    value="<?php echo $setup->act_proses_fabric_after_calender . " mm" ?>">
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputActualGapRoll1-2">Gap Roll Drive Side 1&2</label>
                <input type="text" class="form-control" id="inputActualGapRoll1-2"
                    value="<?php echo $setup->act_proses_gaproll_ds_1_2 . " mm" ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputActualGapRoll2-3">Gap Roll Drive Side 2&3</label>
                <input type="text" class="form-control" id="inputActualGapRoll2-3"
                    value="<?php echo $setup->act_proses_gaproll_ds_2_3 . " mm" ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputActualGapRoll3-4">Gap Roll Drive Side 3&4</label>
                <input type="text" class="form-control" id="inputActualGapRoll3-4"
                    value="<?php echo $setup->act_proses_gaproll_ds_3_4 . " mm" ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputActualCrossingHS">Crossing Heather Side 1&4</label>
                <input type="text" class="form-control" id="inputActualCrossingHS"
                    value="<?php echo $setup->act_proses_crossing_hs_1_4 . " mm" ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputActualCrossingDS">Crossing Drive Side 1&4</label>
                <input type="text" class="form-control" id="inputActualCrossingDS"
                    value="<?php echo $setup->act_proses_crossing_ds_1_4 . " mm" ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputActualGapRollHS1-2">Gap Roll Heather Side 1&2</label>
                <input type="text" class="form-control" id="inputActualGapRollHS1-2"
                    value="<?php echo $setup->act_proses_gaproll_hs_1_2 . " mm" ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputActualGapRollHS2-3">Gap Roll Heather Side 2&3</label>
                <input type="text" class="form-control" id="inputActualGapRollHS2-3"
                    value="<?php echo $setup->act_proses_gaproll_hs_2_3 . " mm" ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="inputActualGapRollHS3-4">Gap Roll Heather Side 3&4</label>
                <input type="text" class="form-control" id="inputActualGapRollHS3-4"
                    value="<?php echo $setup->act_proses_gaproll_hs_3_4 . " mm" ?>">
            </div>
        </div>

    </fieldset>

    <hr style="border: 1px solid gray; margin-bottom: 15px">

    <fieldset>
        <div class="form-row">

            <div class="form-group col-md-2">
                <label for="inputTreatment">Appearance Treatment</label>
                <select id="inputTreatment" class="form-control">
                    <option selected>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputKondisiLinier">Penggantian & Kondisi Linier</label>
                <select id="inputKondisiLinier" class="form-control">
                    <option selected>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputSupplyTreatment">Supply Treatment</label>
                <select id="inputSupplyTreatment" class="form-control">
                    <option selected>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputQuantity">Quantity</label>
                <input type="text" class="form-control" id="inputQuantity" placeholder="Meter">
            </div>
            <div class="form-group col-md-3">
                <label for="inputTagIdentitas">Tag Identitas & Barcode</label>
                <select id="inputTagIdentitas" class="form-control">
                    <option selected>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>

        </div>
    </fieldset>



    <button type="submit" class="btn btn-primary">Sign in</button>
</form> -->
</hr>

<style>
    #uno,
    #due th,
    #tre th {
        border-bottom-right-radius: 8px;
        border-bottom-left-radius: 8px;
        border-top-left-radius: 60px;
        border-top-right-radius: 60px;
    }

    #tru th {
        border-top-right-radius: 40px;
        border-top-left-radius: 40px;
        border-bottom-left-radius: 40px;
        border-bottom-right-radius: 40px;
    }

    #trim th {
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
    }

    #trim #rem {
        border-bottom-right-radius: 20px;
        border-bottom-left-radius: 20px;
    }
</style>