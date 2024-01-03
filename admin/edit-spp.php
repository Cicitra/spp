<?php
include '../koneksi.php';
$id_spp = $_GET['id_spp'];
$sql = "SELECT * FROM spp WHERE id_spp='$id_spp'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit data SPP.</h5>
<a href="?url=spp" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-edit-spp&id_spp=<?= $id_spp;?>" method="post">
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Tahun</label>
        <input value="<?= $data['tahun'];?>" type="number" name="tahun" maxlength="4" class="form-control mb-3" required="required" placeholder="Masukkan tahun ajaran">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Nominal</label>
        <input value="<?= $data['nominal'];?>" type="number" name="nominal" maxlength="13" class="form-control mb-4" required="required" placeholder="Masukkan besar nominal">
    </div>
    <div class="form-group mb-4 d-flex justify-content-end">
        <button type="submit" class="btn btn-success me-2">Simpan</button>
        <button type="reset" class="btn btn-secondary pe-4 ps-4"> Reset </button>
    </div>
</form>