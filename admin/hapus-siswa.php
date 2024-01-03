<?php

$nisn_url = $_GET['nisn'];

include '../koneksi.php';
$sql = "DELETE FROM siswa WHERE nisn='$nisn_url'";
$query = mysqli_query($koneksi,$sql);

if($query) {
    header('location:?url=siswa');
}else {
    echo"<script>
    alert('Maaf data gagal terhapus, Silahkan coba lagi!');
    window.location.assign('?url=siswa');
    </script>";
}
?>