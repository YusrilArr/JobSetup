<!-- Ambil dari template admin -> General Element -> Horizontal form -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Tipe Mesin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="form-group row">
                    <label for="id_mesin" class="col-sm-2 col-form-label">Kode Mesin</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_mesin" class="form-control" placeholder="Kode Mesin"
                            value="<?php echo set_value( 'id_mesin' ) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_mesin" class="col-sm-2 col-form-label">Nama Mesin</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_mesin" class="form-control" placeholder="Nama Mesin"
                            value="<?php echo set_value( 'nama_mesin' ) ?>" required>
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