<!-- Ambil dari template admin -> General Element -> Horizontal form -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Alat Ukur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="form-group row">
                    <label for="id_tool" class="col-sm-2 col-form-label">Kode Alat Ukur</label>
                    <div class="col-sm-5">
                        <input type="text" name="id_tool" class="form-control" placeholder="Kode Alat Ukur"
                            value="<?php echo set_value( 'id_tool' ) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_tool" class="col-sm-2 col-form-label">Nama Alat Ukur</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_tool" class="form-control" placeholder="Nama Alat Ukur"
                            value="<?php echo set_value( 'nama_tool' ) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fungsi_tool" class="col-sm-2 col-form-label">Fungsi</label>
                    <div class="col-sm-10">
                        <input type="text" name="fungsi_tool" class="form-control" placeholder="Fungsi"
                            value="<?php echo set_value( 'fungsi_tool' ) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kalibrasi_tool" class="col-sm-2 col-form-label">Stiker Kalibrasi</label>
                    <div class="col-sm-3">
                        <input type="date" name="kalibrasi_tool" class="form-control" placeholder="Stiker Kalibrasi"
                               value="<?php echo set_value( 'kalibrasi_tool' ) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="expdate_tool" class="col-sm-2 col-form-label">Expired Date</label>
                    <div class="col-sm-3">
                        <input type="date" name="expdate_tool" class="form-control" placeholder="Expired Date"
                               value="<?php echo set_value( 'expdate_tool' ) ?>" required>
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