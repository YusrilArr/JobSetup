<!-- edit open -->
<?php echo form_open( base_url( 'profil' ) ); ?>

<div class="form-group row">
    <label for="nama_user" class="col-sm-2 col-form-label">Nama User</label>
    <div class="col-sm-10">
        <input type="text" name="nama_user" class="form-control" placeholder="Nama User" disabled
            value="<?php echo $user->nama_user ?>" required>
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">NIP</label>
    <div class="col-sm-10">
        <input type="text" name="email" class="form-control" disabled value="<?php echo $user->id_user ?>" required>
    </div>
</div>

<div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
        <input type="text" name="username" class="form-control" placeholder="Username"
            value="<?php echo $user->username ?>" disabled>
    </div>
</div>

<!-- <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        <input type="password" name="password" class="form-control" placeholder="Password"
            value="<?php echo set_value( 'password' ) ?>">
        <small class="text-danger">
            Minimal 6 karakter maksimal 32 karakter atau biarkan kosong </small>
    </div>
</div> -->

<div class="form-group row">
    <label for="akses_level" class="col-sm-2 col-form-label">Hak Akses</label>
    <div class="col-sm-10">
        <input type="text" name="akses_level" class="form-control" value="<?php echo $user->akses_level ?>" readonly>
    </div>
</div>

<!-- <div class="form-group row">
    <label for="ok" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-save"></i> Simpan Data
        </button>
        <button type="reset" class="btn btn-info">
            <i class="fa fa-times"></i> Reset Data
        </button>
        <a href="<?php echo base_url( 'user' ) ?>" class="btn btn-default">
            <i class="fa fa-backward"></i> Kembali
        </a>
    </div>
</div> -->

<!-- close form -->
<?php echo form_close() ?>