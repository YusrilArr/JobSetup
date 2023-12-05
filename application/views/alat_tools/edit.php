<!-- edit open -->
<?php echo form_open( base_url( ( 'alat_tools/edit/' . $alat_tools->id_tool ) ) ); ?>

<div class="form-group row">
    <label for="id_tool" class="col-sm-3 text-right">Nomor Mesin</label>
    <div class="col-sm-6">
        <!-- ambil data dari table js_tools -->
        <input type="text" name="id_tool" class="form-control" placeholder="Nomor Mesin"
            value="<?php echo $alat_tools->id_tool ?>" readonly>
    </div>
</div>

<div class="form-group row">
    <label for="tipe_tool" class="col-sm-3 text-right">Type</label>
    <div class="col-sm-6">
        <!-- ambil data dari table js_tools -->
        <input type="text" name="tipe_tool" class="form-control" placeholder="Cth : Thickness atau Width"
            value="<?php echo $alat_tools->tipe_tool ?>" readonly>
    </div>
</div>

<div class="form-group row">
    <label for="kategori" class="col-sm-3 text-right">Kategori</label>
    <div class="col-sm-6">
        <!-- ambil data dari table js_tools -->
        <input type="text" name="kategori" class="form-control" placeholder="Fungsi Alat"
            value="<?php echo $alat_tools->kategori ?>" readonly>
    </div>
</div>

<div class="form-group row">
    <label for="kalibrasi" class="col-sm-3 text-right">Stiker OK Kalibrasi</label>
    <div class="col-sm-6">
        <!-- ambil data dari table js_tools -->
        <input type="date" name="stiker_kalibrasi" class="form-control"
            value="<?php echo $alat_tools->stiker_kalibrasi ?>">
    </div>
</div>

<div class="form-group row">
    <label for="expired_date" class="col-sm-3 text-right">Expired Date</label>
    <div class="col-sm-6">
        <!-- ambil data dari table js_tools -->
        <input type="date" name="expired_date" class="form-control" value="<?php echo $alat_tools->expired_date ?>">
    </div>
</div>

<!-- <div class="form-group row">
    <label for="addby" class="col-sm-3 text-right">Ditambahkan Oleh</label>
    <div class="col-sm-6">
        
        <input type="text" name="addby" class="form-control" value="<?php echo $alat_tools->update_by ?>" disabled>
    </div>
</div> -->






<div class="form-group row">
    <label for="edit" class="col-sm-3 text-right"></label>
    <div class="col-sm-9">
        <a href="<?php echo base_url( 'alat_tools' ) ?>" class="btn btn-info">
            <i class="fa fa-backward"> </i> Kembali
        </a>
        <button class="btn btn-success" type="submit" name="submit" value="submit">
            <i class="fa fa-save"></i> Simpan Data
        </button>
        <!-- <button class="btn btn-default" type="reset" name="reset" value="reset">
            <i class="fa fa-times"></i> Reset Data
        </button> -->

    </div>
</div>

<?php echo form_close(); ?>