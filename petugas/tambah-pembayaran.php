<?php
include '../koneksi.php';
$nisn = $_GET['nisn'];
$kekurangan = $_GET['kekurangan'];
$sql = "SELECT * FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Pembayaran SPP.</h5>
<a href="?url=pembayaran" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-tambah-pembayaran&nisn=<?= $nisn;?>" method="post">
<input name="id_spp" value="<?= $data['id_spp'];?>" type="hidden" class="form-control mb-4" required="required">
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Nama Petugas</label>
        <input value="<?= $_SESSION['nama_petugas'];?>" disabled class="form-control mb-3" required="required" placeholder="Masukkan Kelas...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> NISN</label>
        <input readonly name="nisn" value="<?= $data['nisn'];?>" type="text" class="form-control mb-4" required="required" placeholder="Ketikkan kompetensi keahlian...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Nama Siswa</label>
        <input disabled value="<?= $data['nama'];?>" type="text" class="form-control mb-4" required="required" placeholder="Ketikkan kompetensi keahlian...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Tanggal Bayar</label>
        <input type="date" name="tgl_bayar" class="form-control mb-4" required>
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Bulan Bayar</label>
        <select name="bulan_dibayar" class="form-control mb-4" required>
            <option value="">-- Pilih Bulan Dibayar --</option>
            <option value="januari">Januari</option>
            <option value="februari">Februari</option>
            <option value="maret">Maret</option>
            <option value="april">April</option>
            <option value="mei">Mei</option>
            <option value="juni">Juni</option>
            <option value="juli">Juli</option>
            <option value="agustus">Agustus</option>
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="desember">Desember</option>
        </select>
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Tahun Bayar</label>
        <select name="tahun_dibayar" class="form-control mb-4" required>
            <option value="">-- Pilih Tahun Bayar --</option>
            <?php 
            for($i=2010;$i<=date('Y');$i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-3"><span class="text-danger">*</span> Jumlah Bayar (Jumlah yang harus dibayar adalah <b><?= "Rp." . number_format($kekurangan,2,',','.')?></b>)</label>
        <input type="number" name="jumlah_bayar" max="<?= $kekurangan?>" class="form-control mb-4" required="required" placeholder="Ketikkan kompetensi keahlian...">
    </div>
    <div class="form-group mb-4 mt-5 d-flex justify-content-end">
        <button type="submit" class="btn btn-success me-2">Simpan</button>
        <button type="reset" class="btn btn-secondary pe-4 ps-4"> Reset </button>
    </div>
</form>