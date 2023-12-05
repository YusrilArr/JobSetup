<!-- Ambil dari template admin -> General Element -> Horizontal form -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> User Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="form-group row">
                    <label for="id_user" class="col-sm-2 col-form-label">Id. User</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_user" class="form-control" placeholder="Id. User"
                            value="<?php echo set_value( 'id_user' ) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_user" class="col-sm-2 col-form-label">Nama User</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_user" class="form-control" placeholder="Nama User"
                            value="<?php echo set_value( 'nama_user' ) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" placeholder="Username"
                            value="<?php echo set_value( 'username' ) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" placeholder="Password"
                            value="<?php echo set_value( 'password' ) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="akses_level" class="col-sm-2 col-form-label">Hak Akses</label>
                    <div class="col-sm-10">
                        <select name="akses_level" class="form-control">
                            <option value="Admin"> Admin</option>
                            <option value="User"> User</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="user_status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="user_status" class="form-control">
                            <option value="Aktive"> Aktif</option>
                            <option value="NonAktive"> Non Aktif</option>
                        </select>
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