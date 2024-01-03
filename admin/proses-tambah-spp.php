<?php

$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

include '../koneksi.php';
$sql = "INSERT INTO spp (tahun,nominal) VALUES('$tahun','$nominal')";
$query = mysqli_query($koneksi,$sql);

if($query) {
    header('location:?url=spp');
}else {
    echo"<script>
    alert('Maaf data gagal disimpan , Silahkan coba lagi!');
    window.location.assign('?url=spp');
    </script>";
}
?>