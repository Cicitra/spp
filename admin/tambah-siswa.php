<h5>Halaman tambah data Siswa.</h5>
<a href="?url=siswa" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-tambah-siswa" method="post">
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> NISN</label>
        <input type="number" name="nisn" class="form-control mb-3" required="required" placeholder="Masukkan NISN anda...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> NIS</label>
        <input type="number" name="nis" class="form-control mb-3" required="required" placeholder="Masukkan NIS anda...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Nama</label>
        <input type="text" name="nama" class="form-control mb-3" required="required" placeholder="Masukkan Nama anda...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Kelas</label>
        <select name="id_kelas" class="form-control" required>
            <option value="">-- Pilih Kelas --</option>
            <?php 
            include '../koneksi.php';
            $kelas = mysqli_query($koneksi,"SELECT * FROM kelas ORDER BY nama_kelas ASC");
            foreach($kelas as $data_kelas) {
            ?>
            <option value="<?= $data_kelas['id_kelas'];?>"><?= $data_kelas['nama_kelas'];?></option>
            <?php };?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Alamat</label>
        <textarea type="text" name="alamat" class="form-control mb-3" required="required">

        </textarea>
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> No Telp</label>
        <input type="number" name="no_telp" maxlength="12" class="form-control mb-3" required="required" placeholder="Masukkan Nomor telepon...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Nominal SPP</label>
        <select name="id_spp" class="form-control" required>
            <option value="">-- Pilih Nominal --</option>
            <?php 
            include '../koneksi.php';
            $spp = mysqli_query($koneksi,"SELECT * FROM spp ORDER BY nominal ASC");
            foreach($spp as $data_spp) {
            ?>
            <option value="<?= $data_spp['id_spp'];?>"><?= $data_spp['tahun'];?> - <?= "Rp." . number_format($data_spp['nominal'],2,',','.');?></option>
            <?php };?>
        </select>
    </div>
    <div class="form-group mb-4 mt-5 d-flex justify-content-end">
        <button type="submit" class="btn btn-success me-2">Simpan</button>
        <button type="reset" class="btn btn-secondary pe-4 ps-4"> Reset </button> 
    </div>
   
</form>