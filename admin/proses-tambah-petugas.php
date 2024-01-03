<?php

$username = $_POST['username'];
$pass = $_POST['pass'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

include '../koneksi.php';
$sql = "INSERT INTO petugas (username,pass,nama_petugas,level) VALUES('$username','$pass','$nama_petugas','$level')";
$query = mysqli_query($koneksi,$sql);

if($query) {
    header('location:?url=petugas');
}else {
    echo"<script>
    alert('Maaf data gagal disimpan , Silahkan coba lagi!');
    window.location.assign('?url=petugas');
    </script>";
}
?>