<!-- Ambil dari template admin -> General Element -> Horizontal form -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Tambah Spesifikasi Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="no_spec" class="form-control" placeholder="Nomor Spesifikasi"
                            value="<?php echo set_value( 'no_spec' ) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="thick_drive_side" class="form-control"
                            placeholder="Thickness Drive Side (mm)"
                            value="<?php echo set_value( 'thick_drive_side' ) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="thick_center" class="form-control" placeholder="Thickness Center (mm)"
                            value="<?php echo set_value( 'thick_center' ) ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="thick_heather_side" class="form-control"
                            placeholder="thick_heather_side" value="<?php echo set_value( 'thick_heather_side' ) ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="width" class="form-control" placeholder="Width">
                        <?php echo set_value( 'width' ) ?></input>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="fabric_before_calender" class="form-control"
                            placeholder="Fabric Tension Before Calender (Kg)"
                            value="<?php echo set_value( 'fabric_before_calender' ) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="fabric_after_calender" class="form-control"
                            placeholder="Fabric Tension Before Calender (Kg)"
                            value="<?php echo set_value( 'fabric_after_calender' ) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="fabric_before_calender" class="form-control"
                            placeholder="Fabric Tension After Calender (Kg)"
                            value="<?php echo set_value( 'fabric_before_calender' ) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="crossing_hs_1_4" class="form-control"
                            placeholder="Crossing Heather Side 1&4"
                            value="<?php echo set_value( 'crossing_hs_1_4' ) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="crossing_ds_1_4" class="form-control"
                            placeholder="Crossing Drive Side 1&4" value="<?php echo set_value( 'crossing_ds_1_4' ) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="gaproll_ds_1_2" class="form-control"
                            placeholder="Gap Roll Drive Side 1-2" value="<?php echo set_value( 'gaproll_ds_1_2' ) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="gaproll_ds_2_3" class="form-control"
                            placeholder="Gap Roll Drive Side 2-3" value="<?php echo set_value( 'gaproll_ds_2_3' ) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="gaproll_ds_3_4" class="form-control"
                            placeholder="Gap Roll Drive Side 3-4" value="<?php echo set_value( 'gaproll_ds_3_4' ) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="gaproll_hs_1_2" class="form-control"
                            placeholder="Gap Roll Heather Side 1-2" value="<?php echo set_value( 'gaproll_hs_1_2' ) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="gaproll_hs_2_3" class="form-control"
                            placeholder="Gap Roll Heather Side 2-3" value="<?php echo set_value( 'gaproll_hs_2_3' ) ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" name="gaproll_hs_3_4" class="form-control"
                            placeholder="Gap Roll Heather Side 3-4" value="<?php echo set_value( 'gaproll_hs_3_4' ) ?>">
                    </div>
                </div>

            </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <i class="fa fa-times"></i> Tutup
                </button>

                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan Data
                </button>

                <!-- <button type="reset" class="btn btn-warning">
                    <i class="fa fa-times"></i> Reset
                </button> -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->