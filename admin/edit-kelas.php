<?php
include '../koneksi.php';
$id_kelas = $_GET['id_kelas'];
$sql = "SELECT * FROM kelas WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit data Kelas.</h5>
<a href="?url=kelas" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-edit-kelas&id_kelas=<?= $id_kelas;?>" method="post">
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Nama Kelas</label>
        <input value="<?= $data['nama_kelas'];?>" type="text" name="nama_kelas" class="form-control mb-3" required="required" placeholder="Masukkan Kelas...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Kompetensi Keahlian</label>
        <input value="<?= $data['kompetensi_keahlian'];?>" type="text" name="kompetensi_keahlian" class="form-control mb-4" required="required" placeholder="Ketikkan kompetensi keahlian...">
    </div>
    <div class="form-group mb-4 d-flex justify-content-end">
        <button type="submit" class="btn btn-success me-2">Simpan</button>
        <button type="reset" class="btn btn-secondary pe-4 ps-4"> Reset </button>
    </div>
</form>