<!-- edit open -->
<?php echo form_open( base_url( ( 'mesin/edit/' . $mesin->id_mesin ) ) ); ?>

<div class="form-group row">
    <label for="id_mesin" class="col-sm-2 col-form-label">Kode Mesin</label>
    <div class="col-sm-10">
        <input type="text" name="id_mesin" class="form-control" placeholder="Kode Mesin"
            value="<?php echo $mesin->id_mesin ?>" disabled>
    </div>
</div>

<div class="form-group row">
    <label for="nama_mesin" class="col-sm-2 col-form-label">Nama Mesin</label>
    <div class="col-sm-10">
        <input type="text" name="nama_mesin" class="form-control" placeholder="Nama Mesin"
            value="<?php echo $mesin->nama_mesin ?>" required>
    </div>
</div>

<div class="form-group row">
    <label for="ok" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-save"></i> Simpan Data
        </button>
        <button type="reset" class="btn btn-info">
            <i class="fa fa-times"></i> Reset Data
        </button>
        <a href="<?php echo base_url( 'mesin' ) ?>" class="btn btn-default">
            <i class="fa fa-backward"></i> Kembali
        </a>
    </div>
</div>

<!-- close form -->
<?php echo form_close() ?>