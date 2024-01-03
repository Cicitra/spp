<?php

$id_pembayaran = $_GET['id_pembayaran'];

include '../koneksi.php';
$sql = "DELETE FROM pembayaran WHERE id_pembayaran='$id_pembayaran'";
$query = mysqli_query($koneksi,$sql);

if($query) {
    echo"<script>alert('Hapus transaksi berhasil!');
    window.location.assign('?url=pembayaran');
    </script>";
}else {
    echo"<script>
    alert('Maaf data gagal terhapus, Silahkan coba lagi!');
    window.history.go(-1);
    </script>";
}
?>