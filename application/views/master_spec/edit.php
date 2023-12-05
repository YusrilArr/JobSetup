<!-- edit open -->
<?php echo form_open( base_url( ( 'master_spec/edit/' . $master_spec->no_spec ) ) ); ?>

<div class="row">
    <div class="col">



        <div class="form-group row">
            <label for="no_spec" class="col-sm-2 col-form-label">Nomor Spesifikasi</label>
            <div class="col-sm-10">
                <input type="text" name="no_spec" class="form-control col-md-6"
                    value="<?php echo $master_spec->no_spec ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="thick_drive_side" class="col-sm-2 col-form-label">Thickness Drive Side (mm)</label>
            <div class="col-sm-10">
                <input type="text" name="thick_drive_side" class="form-control col-md-6"
                    value="<?php echo $master_spec->thick_drive_side ?>" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="thick_center" class="col-sm-2 col-form-label">Thickness Center (mm)</label>
            <div class="col-sm-10">
                <input type="text" name="thick_center" class="form-control col-md-6"
                    value="<?php echo $master_spec->thick_center ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="thick_heather_side" class="col-sm-2 col-form-label">Thickness Heater Side (mm)</label>
            <div class="col-sm-10">
                <input type="text" name="thick_heather_side" class="form-control col-md-6"
                    value="<?php echo $master_spec->thick_heather_side ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="width" class="col-sm-2 col-form-label">Width (mm)</label>
            <div class="col-sm-10">
                <input type="text" name="width" class="form-control col-md-6" value="<?php echo $master_spec->width ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="fabric_before_calender" class="col-sm-2 col-form-label">Fabric Tension Before Calender
                (Kg)</label>
            <div class="col-sm-10">
                <input type="text" name="fabric_before_calender" class="form-control col-md-6"
                    value="<?php echo $master_spec->fabric_before_calender ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="fabric_after_calender" class="col-sm-2 col-form-label">Fabric Tension After Calender
                (Kg)</label>
            <div class="col-sm-10">
                <input type="text" name="fabric_after_calender" class="form-control col-md-6"
                    value="<?php echo $master_spec->fabric_after_calender ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="crossing_hs_1_4" class="col-sm-2 col-form-label">Crossing Heather Side 1&4</label>
            <div class="col-sm-10">
                <input type="text" name="crossing_hs_1_4" class="form-control col-md-6"
                    value="<?php echo $master_spec->crossing_hs_1_4 ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="crossing_ds_1_4" class="col-sm-2 col-form-label">Crossing Drive Side 1&4</label>
            <div class="col-sm-10">
                <input type="text" name="crossing_ds_1_4" class="form-control col-md-6"
                    value="<?php echo $master_spec->crossing_ds_1_4 ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="gaproll_ds_1_2" class="col-sm-2 col-form-label">Gap Roll Drive Side 1-2</label>
            <div class="col-sm-10">
                <input type="text" name="gaproll_ds_1_2" class="form-control col-md-6"
                    value="<?php echo $master_spec->gaproll_ds_1_2 ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="gaproll_ds_2_3" class="col-sm-2 col-form-label">Gap Roll Drive Side 2-3</label>
            <div class="col-sm-10">
                <input type="text" name="gaproll_ds_2_3" class="form-control col-md-6"
                    value="<?php echo $master_spec->gaproll_ds_2_3 ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="gaproll_ds_3_4" class="col-sm-2 col-form-label">Gap Roll Drive Side 3-4</label>
            <div class="col-sm-10">
                <input type="text" name="gaproll_ds_3_4" class="form-control col-md-6"
                    value="<?php echo $master_spec->gaproll_ds_3_4 ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="gaproll_hs_1_2" class="col-sm-2 col-form-label">Gap Roll Heather Side 1-2</label>
            <div class="col-sm-10">
                <input type="text" name="gaproll_hs_1_2" class="form-control col-md-6"
                    value="<?php echo $master_spec->gaproll_hs_1_2 ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="gaproll_hs_2_3" class="col-sm-2 col-form-label">Gap Roll Heather Side 2-3</label>
            <div class="col-sm-10">
                <input type="text" name="gaproll_hs_2_3" class="form-control col-md-6"
                    value="<?php echo $master_spec->gaproll_hs_2_3 ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="gaproll_hs_3_4" class="col-sm-2 col-form-label">Gap Roll Heather Side 3-4</label>
            <div class="col-sm-10">
                <input type="text" name="gaproll_hs_3_4" class="form-control col-md-6"
                    value="<?php echo $master_spec->gaproll_hs_3_4 ?>">
            </div>
        </div>
    </div>
</div>





<div class="form-group row">
    <label for="ok" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-save"></i> Simpan Data
        </button>
        <!-- <button type="reset" class="btn btn-info">
            <i class="fa fa-times"></i> Reset Data
        </button> -->
        <a href="<?php echo base_url( 'master_spec' ) ?>" class="btn btn-default">
            <i class="fa fa-backward"></i> Kembali
        </a>
    </div>
</div>

<!-- close form -->
<?php echo form_close() ?>