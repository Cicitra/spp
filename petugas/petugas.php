<?php
session_start();
if(empty($_SESSION['id_petugas'])) {
    echo "<script>
    alert('Silahkan login sebagai admin!');
    window.location.assign('../login_admin.php');
    
    </script>";
}
if($_SESSION['level'] != 'petugas') {
    echo "<script>
    alert('Anda bukan admin!');
    window.location.assign('../login_admin.php');
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas page | Pembayaran SPP.</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
       
        <h3>Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-info">
            Anda login sebagai Petugas <b><?= $_SESSION['nama_petugas'];?></b> Aplikasi Pembayaran SPP
        </div>
        <a href="petugas.php" class="btn btn-primary">Petugas</a>
        <a href="petugas.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
        <a href="petugas.php?url=logout" class="btn btn-primary">Logout</a>

        <div class="card mt-2">
            <div class="card-body">
                <!-- Content -->
                <?php 
                    $file = @$_GET['url'];
                    if(empty($file)) {
                        echo "<h4>Selamat datang di halaman Petugas.</h4>";
                        echo "Aplikasi pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswi disekolah.";
                    }else {
                        include $file.'.php';
                    }
                ?>
                <!-- End content -->
            </div>
        </div>
    </div>
    


<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>