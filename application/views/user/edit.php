<!-- edit open -->
<?php echo form_open( base_url( ( 'user/edit/' . $user->id_user ) ) ); ?>

<div class="form-group row">
    <label for="nama_user" class="col-sm-2 col-form-label">Nama User</label>
    <div class="col-sm-10">
        <input type="text" name="nama_user" class="form-control" placeholder="Nama User"
            value="<?php echo $user->nama_user ?>" required>
    </div>
</div>

<div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
        <input type="text" name="username" class="form-control" placeholder="Username"
            value="<?php echo $user->username ?>" disabled>
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        <input type="password" name="password" class="form-control" placeholder="Password"
            value="<?php echo set_value( 'password' ) ?>">
        <small class="text-danger">
            Minimal 6 karakter maksimal 32 karakter atau biarkan kosong </small>
    </div>
</div>

<div class="form-group row">
    <label for="akses_level" class="col-sm-2 col-form-label">Hak Akses</label>
    <div class="col-sm-10">
        <select name="akses_level" class="form-control">
            <option value="Admin"> Admin</option>
            <option value="User" <?php if ($user->akses_level == "User")
            {
            echo "Selected";
            } ?>> User</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="akses_level" class="col-sm-2 col-form-label">Status </label>
    <div class="col-sm-10">
        <select name="user_status" class="form-control">
            <option value="Aktif"> Aktif</option>
            <option value="NonAktif" <?php if ($user->user_status == "NonAktif")
            {
            echo "Selected";
            } ?>> NonAktif
            </option>
        </select>
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
        <a href="<?php echo base_url( 'user' ) ?>" class="btn btn-default">
            <i class="fa fa-backward"></i> Kembali
        </a>
    </div>
</div>

<!-- close form -->
<?php echo form_close() ?>