<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div class="d-flex justify-content-between">
        <p style="font-size:25px;"><b>Job Setup Callender</b></p>

        <p>

            <!-- <a href="<?php echo base_url( 'setup/cetak/' ) ?>" class="btn btn-primary" target="_blank">
                <i class="fa fa-print"> </i> Cetak
            </a> -->

            <a href="<?php echo base_url( 'setup' ) ?>" class="btn btn-success">
                <i class="fa fa-backward"> </i> Kembali
            </a>
        </p>
    </div>

    <hr style="border: 1px solid gray; margin-bottom: 30px">
    <?= form_open( base_url( 'setup/tambah_data' ) ) ?>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="no_mesin">Nomor Mesin</label>
            <input type="Text" class="form-control" name="no_mesin" id="no_mesin" placeholder="Nomor Mesin" required>
        </div>
        <div class="form-group col-md-3">
            <label for="tanggal_transaksi">Tanggal</label>
            <input type="text" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi"
                placeholder="Tanggal" readonly>
            <input type="hidden" class="form-control" name="hidden_tanggal" id="hidden_tanggal" placeholder="Tanggal"
                readonly>
            <script>
                function updateRealtime() {
                    // Mendapatkan tanggal dan waktu sekarang
                    var today = new Date();

                    // Mengatur opsi untuk format tanggal dan waktu dalam bahasa Indonesia (id-ID) dan zona waktu Asia/Jakarta (WIB)
                    var options = { timeZone: 'Asia/Jakarta', hour12: false };
                    var formattedDate = today.toLocaleString('id-ID', options);

                    // Menetapkan nilai pada input readonly
                    document.getElementById('tanggal_transaksi').value = formattedDate;

                    // Menetapkan nilai pada hidden field dalam format datetime yang diharapkan oleh database
                    var year = today.getFullYear();
                    var month = String(today.getMonth() + 1).padStart(2, '0');
                    var day = String(today.getDate()).padStart(2, '0');
                    var hours = String(today.getHours()).padStart(2, '0');
                    var minutes = String(today.getMinutes()).padStart(2, '0');
                    var seconds = String(today.getSeconds()).padStart(2, '0');

                    var formattedDateTime = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
                    document.getElementById('hidden_tanggal').value = formattedDateTime;
                }

                // Panggil fungsi updateRealtime setiap detik
                setInterval(updateRealtime, 1000);

                // Panggil fungsi untuk memastikan nilai awal diatur saat halaman dimuat
                updateRealtime();
            </script>
        </div>
        <!-- <div class="form-group col-md-3">
            <label for="operator">Operator</label>
            <input type="text" class="form-control" name="operator" id="operator" placeholder="Operator">
        </div> -->
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="shift">Shift</label>
            <input type="text" class="form-control" name="shift" id="shift" readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="group">Group</label>
            <input type="text" class="form-control" name="group" id="group" placeholder="Cth : A / B / C">
        </div>
        <!-- <div class="form-group col-md-3">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP">
        </div> -->
        <script>
            // Menggunakan jQuery untuk mengisi Shift otomatis saat halaman dimuat
            $(document).ready(function () {
                $.ajax({
                    url: '<?php echo base_url( "setup/autoFillShift" ); ?>',
                    dataType: 'json',
                    success: function (data) {
                        $('#shift').val(data.shift);
                    }
                });
            });
        </script>

    </div>
    <div>

    </div>
    <hr style="border: 1px solid gray; margin-bottom: 15px">

    <!-- Set Up Tools -->
    <fieldset>
        <legend style="margin-bottom:20px;text-align: center;"><b>Tools</b></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <!-- <label for="id_tool_thickness">Thickness Gauge</label>
                <input type="Text" class="form-control" name="id_tool_thickness" id="id_tool_thickness"
                    placeholder="Thickness Number" required>
                <div id="search_result"></div> -->
                <label for="id_tool_thickness">Thickness Gauge</label><br>
                <select style="width: 150px; height:35px" name="id_tool_thickness">
                    <?php foreach ($thicknessTool as $tool) : ?>
                        <option value="<?php echo $tool['id_tool']; ?>">
                            <?php echo $tool['id_tool']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>

            </div>
            <div class="form-group col-md-3">
                <!-- <label for="id_tool_width">Stell Roll Meter</label>
                <input type="Text" class="form-control" name="id_tool_width" id="id_tool_width"
                    placeholder="Width Number" required> -->
                <label for="id_tool_width">Steel Roll Meter</label><br>
                <select style="width: 150px; height:35px" name="id_tool_width">
                    <?php foreach ($widthTool as $tools) : ?>
                        <option value="<?php echo $tools['id_tool']; ?>">
                            <?php echo $tools['id_tool']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <!--  -->
            <!-- <div class="form-group col-md-3">
                <label for="ok_kalibrasi_thickness">Stiker OK Kalibrasi (Thickness)</label>
                <input type="date" class="form-control" name="ok_kalibrasi_thickness" id="ok_kalibrasi_thickness">
            </div>
            <div class="form-group col-md-3">
                <label for="expired_thickness">Thickness Gauge Expired</label>
                <input type="date" class="form-control" name="expired_thickness" id="expired_thickness">
            </div> -->
            <!-- ada 3 validasi khusus yaitu no_spec, id_tool_thickness, id_tool_width, ketika user menginputkan data tapi tidak sesuai dengan validasi, maka akan muncul flashdata dan  -->
        </div>
        <div>
            <p>
                <font size="2"><u>Pilih nomor <b><i>Thickness Gauge</i></b> dan nomor <b><i>Stell Roll
                                Meter</i></b><br></u></font>
            </p>
        </div>
        <div class="form-row">
            <!-- <div class="form-group col-md-3">
                <label for="ok_kalibrasi_width">Stiker OK Kalibrasi (Width)</label>
                <input type="date" class="form-control" name="ok_kalibrasi_width" id="ok_kalibrasi_width"
                    placeholder="Stiker OK Kalibrasi ">
            </div>
            <div class="form-group col-md-3">
                <label for="expired_width">Steel Roll Meter Expired</label>
                <input type="date" class="form-control" name="expired_width" id="expired_width"
                    placeholder="Steel Roll Meter Expired">
            </div> -->
        </div>


    </fieldset>
    <hr style="border: 1px solid gray; margin-bottom: 15px">


    <!-- -->
    <!-- Set Up Pemakaian Material -->
    <fieldset>
        <legend style="margin-bottom:20px;text-align: center;"><b>Pemakaian Material</b></legend>
        <div class="form-row">
            <!-- <div class="form-group col-md-2">
                    <label for="no_roll">Nomor Roll</label>
                    <input type="Text" class="form-control" name="no_roll" id="no_roll" placeholder="Nomor Roll">
                </div> -->
            <div class="form-group col-md-2">
                <label for="item_code">Nomor Kode Item</label>
                <input type="text" class="form-control" name="item_code" id="item_code" placeholder="Nomor Kode Item"
                    autoComplete="off">
                <script>
                    $(document).ready(function () {
                        $('#no_spec').keyup(function () {
                            var search_term = $(this).val();
                            if (search_term.length >= 3) { // Adjust the minimum length as needed
                                $.ajax({
                                    url: '<?= base_url( 'setup/get_spec_autocomplete' ) ?>',
                                    method: 'post',
                                    data: { search_term: search_term },
                                    dataType: 'json',
                                    success: function (data) {
                                        // Handle the data and display suggestions (e.g., in a dropdown)
                                    }
                                });
                            }
                        });
                    });
                </script>
            </div>
            <div class="form-group col-md-2">
                <label for="no_spec">Nomor Spesifikasi</label>
                <input type="text" class="form-control" name="no_spec" id="no_spec" placeholder="Nomor Spesifikasi">
            </div>
        </div>
        <div>
            <p>
                <font size="2"><u>Pastikan <b>Nomor Spesifikasi </b> sesuai dengan data yang ada!</u></font>
            </p>
        </div>
        <hr>

        <!-- Set Up Pemakaian Material Dipped Cord -->
        <legend style="font-size:1.25em;margin-bottom:20px"><i>Dipped Cord</i></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="dc_supplier">Supplier</label>
                <input type="Text" class="form-control" name="dc_supplier" id="dc_supplier" placeholder="Supplier">
            </div>
            <div class="form-group col-md-3">
                <label for="dc_item_code">Kode Item</label>
                <input type="text" class="form-control" name="dc_item_code" id="dc_item_code" placeholder="Kode Item">
            </div>
            <div class="form-group col-md-3">
                <label for="dc_barcode_no">Nomor Barcode</label>
                <input type="text" class="form-control" name="dc_barcode_no" id="dc_barcode_no"
                    placeholder="Nomor Barcode">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="dc_tanggal_masuk">Tanggal Masuk</label>
                <input type="date" class="form-control" name="dc_tanggal_masuk" id="dc_tanggal_masuk"
                    placeholder="Tanggal Masuk">
            </div>
            <div class="form-group col-md-3">
                <label for="dc_no_roll">Nomor Roll</label>
                <input type="text" class="form-control" name="dc_no_roll" id="dc_no_roll" placeholder="Nomor Roll">
            </div>
            <div class="form-group col-md-3">
                <label for="dc_expired">Expired</label>
                <input type="date" class="form-control" name="dc_expired" id="dc_expired" placeholder="Expired">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="dc_a">A</label>
                <select id="dc_a" name="dc_a" class="form-control">
                    <option disabled selected>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="dc_spl_a">Spl. (A)</label>
                <select id="dc_spl_a" name="dc_spl_a" class="form-control">
                    <option disabled selected>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
        </div>
        <hr>

        <!-- Set Up Pemakaian Material Compound -->
        <legend style="font-size:1.25em;margin-bottom:20px;"><i>Compound</i></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="comp_code">Kode</label>
                <input type="Text" class="form-control" name="comp_code" id="comp_code" placeholder="Kode">
            </div>
            <div class="form-group col-md-3">
                <label for="comp_barcode">Nomor Barcode</label>
                <input type="text" class="form-control" name="comp_barcode" id="comp_barcode"
                    placeholder="Nomor Barcode">
            </div>
            <div class="form-group col-md-3">
                <label for="comp_batch">Batch</label>
                <input type="text" class="form-control" name="comp_batch" id="comp_batch" placeholder="Batch">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="comp_tgl_bln_grp_line">Tgl/Bln/Grp/Line</label>
                <input type="Text" class="form-control" name="comp_tgl_bln_grp_line" id="comp_tgl_bln_grp_line"
                    placeholder="Contoh : 30/12/3/MC13">
            </div>
            <div class="form-group col-md-3">
                <label for="comp_expired">Expired</label>
                <input type="date" class="form-control" name="comp_expired" id="comp_expired" placeholder="Expired">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="comp_a">A</label>
                <select id="comp_a" name="comp_a" class="form-control">
                    <option selected disabled>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="comp_output_ext_a">Out-Put Ext. (A)</label>
                <select id="comp_output_ext_a" name="comp_output_ext_a" class="form-control">
                    <option selected disabled>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
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
                <input type="Text" class="form-control" name="act_produk_ds" id="act_produk_ds" placeholder="milimeter">
            </div>
            <div class="form-group col-md-2">
                <label for="act_produk_ctr">Thickness Center</label>
                <input type="text" class="form-control" name="act_produk_ctr" id="act_produk_ctr"
                    placeholder="milimeter">
            </div>

            <div class="form-group col-md-2">
                <label for="act_produk_hs">Thickness Heater Side</label>
                <input type="Text" class="form-control" name="act_produk_hs" id="act_produk_hs" placeholder="milimeter">
            </div>
            <div class="form-group col-md-2">
                <label for="act_produk_width">Width</label>
                <input type="text" class="form-control" name="act_produk_width" id="act_produk_width"
                    placeholder="milimeter">
            </div>
        </div>

        <!-- Actual Proses -->
        <legend style="font-size:1.25em;margin-bottom:20px;"><i>Process</i></legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="act_proses_fabric_before_calender">Fabric Tension Before Calender</label>
                <input type="Text" class="form-control" name="act_proses_fabric_before_calender"
                    id="act_proses_fabric_before_calender" placeholder="milimeter">
            </div>
            <div class="form-group col-md-3">
                <label for="act_proses_fabric_after_calender">Fabric Tension After Calender</label>
                <input type="text" class="form-control" name="act_proses_fabric_after_calender"
                    id="act_proses_fabric_after_calender" placeholder="milimeter">
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="act_proses_gaproll_ds_1_2">Gap Roll Drive Side 1&2</label>
                <input type="text" class="form-control" name="act_proses_gaproll_ds_1_2" id="act_proses_gaproll_ds_1_2"
                    placeholder="milimeter">
            </div>
            <div class="form-group col-md-3">
                <label for="act_proses_gaproll_ds_2_3">Gap Roll Drive Side 2&3</label>
                <input type="text" class="form-control" name="act_proses_gaproll_ds_2_3" id="act_proses_gaproll_ds_2_3"
                    placeholder="milimeter">
            </div>
            <div class="form-group col-md-3">
                <label for="act_proses_gaproll_ds_3_4">Gap Roll Drive Side 3&4</label>
                <input type="text" class="form-control" name="act_proses_gaproll_ds_3_4" id="act_proses_gaproll_ds_3_4"
                    placeholder="milimeter">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="act_proses_crossing_hs_1_4">Crossing Heather Side 1&4</label>
                <input type="text" class="form-control" name="act_proses_crossing_hs_1_4"
                    id="act_proses_crossing_hs_1_4" placeholder="milimeter">
            </div>
            <div class="form-group col-md-3">
                <label for="act_proses_crossing_ds_1_4">Crossing Drive Side 1&4</label>
                <input type="text" class="form-control" name="act_proses_crossing_ds_1_4"
                    id="act_proses_crossing_ds_1_4" placeholder="milimeter">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="act_proses_gaproll_hs_1_2">Gap Roll Heather Side 1&2</label>
                <input type="text" class="form-control" name="act_proses_gaproll_hs_1_2" id="act_proses_gaproll_hs_1_2"
                    placeholder="milimeter">
            </div>
            <div class="form-group col-md-3">
                <label for="act_proses_gaproll_hs_2_3">Gap Roll Heather Side 2&3</label>
                <input type="text" class="form-control" name="act_proses_gaproll_hs_2_3" id="act_proses_gaproll_hs_2_3"
                    placeholder="milimeter">
            </div>
            <div class="form-group col-md-3">
                <label for="act_proses_gaproll_hs_3_4">Gap Roll Heather Side 3&4</label>
                <input type="text" class="form-control" name="act_proses_gaproll_hs_3_4" id="act_proses_gaproll_hs_3_4"
                    placeholder="milimeter">
            </div>
        </div>

    </fieldset>

    <hr style="border: 1px solid gray; margin-bottom: 15px">

    <fieldset>
        <div class="form-row">

            <div class="form-group col-md-2">
                <label for="appr_treatment">Appearance Treatment</label>
                <select id="appr_treatment" name="appr_treatment" class="form-control">
                    <option selected disabled>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="penggantian_kondisi_linear">Penggantian & Kondisi Linier</label>
                <select id="penggantian_kondisi_linear" name="penggantian_kondisi_linear" class="form-control">
                    <option selected disabled>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="supply_treatment">Supply Treatment</label>
                <select id="supply_treatment" name="supply_treatment" class="form-control">
                    <option selected disabled>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="quantity">Quantity</label>
                <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Meter">
            </div>
            <div class="form-group col-md-3">
                <label for="tag_identified">Tag Identitas & Barcode</label>
                <select id="tag_identified" name="tag_identified" class="form-control">
                    <option selected disabled>Pilih</option>
                    <option>OK</option>
                    <option>NG</option>
                    <option>-</option>
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



    <button type="submit" value="Submit" class="btn btn-primary mt-5" style="width:100%">Simpan Data</button>
    <?= form_close() ?>
    </hr>
</body>

</html>