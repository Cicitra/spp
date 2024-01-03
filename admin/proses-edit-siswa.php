<?php

$nisn_url = $_GET['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$spp = $_POST['id_spp'];

include '../koneksi.php';
$sql = "UPDATE siswa SET 
nis='$nis',
nama='$nama',
id_kelas='$kelas',
alamat='$alamat',
no_telp='$no_telp',
id_spp='$spp' 
WHERE nisn='$nisn_url'";
$query = mysqli_query($koneksi,$sql);

if($query) {
    header('location:?url=siswa');
}else {
    echo"<script>
    alert('Maaf data gagal diubah , Silahkan coba lagi!');
    window.location.assign('?url=siswa');
    </script>";
}
?>