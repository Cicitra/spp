<?php
include '../koneksi.php';
$nisn = $_GET['nisn'];
$sql = "SELECT * FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit data Siswa.</h5>
<a href="?url=siswa" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-edit-siswa&nisn=<?= $nisn;?>" method="post">
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> NISN</label>
        <input value="<?= $data['nisn'];?>" readonly disabled type="number" name="nis" class="form-control mb-3" required="required" placeholder="Masukkan NIS anda...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> NIS</label>
        <input value="<?= $data['nis'];?>"  type="number" name="nis" class="form-control mb-3" required="required" placeholder="Masukkan NIS anda...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Nama</label>
        <input value="<?= $data['nama'];?>" type="text" name="nama" class="form-control mb-3" required="required" placeholder="Masukkan Nama anda...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Kelas</label>
        <select name="id_kelas" class="form-control" required>
            <option value="<?= $data['id_kelas'];?>"><?= $data['nama_kelas'];?></option>
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
        <textarea name="alamat" class="form-control" required><?= $data['alamat'];?></textarea>
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> No Telp</label>
        <input value="<?= $data['no_telp'];?>" type="number" name="no_telp" maxlength="12" class="form-control mb-3" required="required" placeholder="Masukkan Nomor telepon...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Nominal SPP</label>
        <select name="id_spp" class="form-control" required>
            <option value="<?= $data['id_spp'];?>"><?= $data['tahun'];?> - <?= "Rp." . number_format($data['nominal'],2,',','.');?></option>
            <?php 
            include '../koneksi.php';
            $spp = mysqli_query($koneksi,"SELECT * FROM spp ORDER BY nominal ASC");
            foreach($spp as $data_spp) {
            ?>
            <option value="<?= $data_spp['id_spp'];?>"><?= $data_spp['tahun'];?> - <?= "Rp." . number_format($data_spp['nominal'],2,',','.');?></option>
            <?php };?>
        </select>
    </div>
    <div class="form-group mb-4 d-flex justify-content-end">
        <button type="submit" class="btn btn-success me-2">Simpan</button>
        <button type="reset" class="btn btn-secondary pe-4 ps-4"> Reset </button>
    </div>
</form>