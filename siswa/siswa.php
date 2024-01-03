<?php
session_start();
if(empty($_SESSION['nisn'])) {
    echo "<script>
    alert('Silahkan login sebagai siswa!');
    window.location.assign('../login_siswa.php');
    
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa page | Pembayaran SPP.</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
       
        <h3>Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-info">
            Anda login sebagai Siswa<b><?= $_SESSION['nama'];?></b> Aplikasi Pembayaran SPP
        </div>
        <a href="siswa.php" class="btn btn-primary">Siswa</a>
        <a href="siswa.php?url=logout" class="btn btn-primary">Logout</a>

        <div class="card mt-2">
            <div class="card-body">
                <!-- Content -->
                <?php 
                    $file = @$_GET['url'];
                    if(empty($file)) {
                        echo "<h4>Selamat datang di halaman Siswa.</h4>";
                        echo "Aplikasi pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswi disekolah.";
                        echo "<hr>";
                        include 'history-pembayaran.php';
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