<h5>Halaman tambah data Petugas.</h5>
<a href="?url=petugas" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-tambah-petugas" method="post">
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Username</label>
        <input type="text" name="username" class="form-control mb-3" required="required" placeholder="Masukkan Username anda...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Password</label>
        <input type="password" name="pass" class="form-control mb-4" required="required" placeholder="Masukkan kata sandi...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control mb-4" required="required" placeholder="Masukkan nama petugas...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Level Petugas</label>
        <select name="level" id="" class="form-control" required>
            <option value="" >-- Pilih Level Petugas--</option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
        </select>
    </div>
    <div class="form-group mb-4 mt-5 d-flex justify-content-end">
        <button type="submit" class="btn btn-success me-2">Simpan</button>
        <button type="reset" class="btn btn-secondary pe-4 ps-4"> Reset </button>
    </div>
</form>