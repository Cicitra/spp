<?php

$id_petugas = $_SESSION['id_petugas'];
$nisn = $_POST['nisn'];
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$id_spp = $_POST['id_spp'];
$jumlah_bayar = $_POST['jumlah_bayar'];

include '../koneksi.php';
$sql = "INSERT INTO pembayaran (
    id_petugas,
    nisn,
    tgl_bayar,
    bulan_dibayar,
    tahun_dibayar,
    id_spp,
    jumlah_bayar
    ) VALUES(
        '$id_petugas',
        '$nisn',
        '$tgl_bayar',
        '$bulan_dibayar',
        '$tahun_dibayar',
        '$id_spp',
        '$jumlah_bayar'
    )";
$query = mysqli_query($koneksi,$sql);

if($query) {
    header('location:?url=pembayaran');
}else {
    echo"<script>
    alert('Maaf data gagal disimpan , Silahkan coba lagi!');
    window.location.assign('?url=pembayaran');
    </script>";
}
?>