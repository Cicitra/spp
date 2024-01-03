<?php

$id_petugas = $_GET['id_petugas'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

include '../koneksi.php';
$sql = "UPDATE petugas SET 
username='$username',
pass='$pass',
nama_petugas='$nama_petugas',
level='$level' WHERE id_petugas='$id_petugas'";
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