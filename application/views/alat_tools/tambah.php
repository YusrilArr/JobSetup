<!-- Ambil dari template admin -> General Element -> Horizontal form -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> Tambah Tools</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <div class="form-group row">
          <label for="id_mesin" class="col-sm-2 col-form-label">Nomor Tools</label>
          <div class="col-sm-10">
            <input type="text" name="id_tool" class="form-control" placeholder="Masukkan Tools Number"
              value="<?php echo set_value( 'id_tool' ) ?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="tipe_tool" class="col-sm-2 col-form-label">Tipe Tool</label>
          <div class="col-sm-10">
            <select name="tipe_tool" id="tipe_tool" class="form-control">
              <!-- <option value="Pilih Tipe" disabled> Pilih Tipe</option> -->
              <option value="Thickness"> Thickness</option>
              <option value="Width"> Width</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
          <div class="col-sm-10">
            <select name="kategori" id="kategori" class="form-control">
              <!-- <option value="Pilih Tipe" disabled> Pilih Tipe</option> -->
              <option value="Topping Callender"> Topping Callender</option>
              <option value="Mixing"> Mixing</option>
              <option value="Curing"> Curing</option>
              <option value="Topping Donut"> Topping Donut</option>
            </select>
            <!-- <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Masukkan kategori tools"
              value="<?php echo set_value( 'kategori' ) ?>" required> -->
          </div>
        </div>

        <div class="form-group row">
          <label for="stiker_kalibrasi" class="col-sm-2 col-form-label">Stiker OK Kalibrasi</label>
          <div class="col-sm-10">
            <input type="date" name="stiker_kalibrasi" class="form-control"
              value="<?php echo set_value( 'stiker_kalibrasi' ) ?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="expired_date" class="col-sm-2 col-form-label">Expired Date</label>
          <div class="col-sm-10">
            <input type="date" name="expired_date" class="form-control"
              value="<?php echo set_value( 'expired_date' ) ?>" required>
          </div>
        </div>

        <!-- <div class="form-group row">
          <div class="col-sm-10">
            <input type="date" name="tanggal_create" class="form-control" placeholder="tanggal_create"
              value="<?php echo set_value( 'tanggal_create' ) ?>">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-10">
            <input type="date" name="tanggal_update" class="form-control" placeholder="tanggal_update"
              value="<?php echo set_value( 'tanggal_update' ) ?>">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-10">
            <input type="date" name="update_by" class="form-control" placeholder="update_by Date"
              value="<?php echo set_value( 'update_by' ) ?>">
          </div>
        </div> -->

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