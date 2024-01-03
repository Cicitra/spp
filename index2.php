<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin / Petugas | Pembayaran SPP.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <h4 class="text-center mb-4">Login Admin / Petugas</h4>
                <div class="card">
                    <div class="card-header">
                        <img src="logo-spp.jpg" width="100%" alt="">
                    </div>
                    <div class="card-body">
                        <form action="proses_login_petugas.php" method="post">
                            <div class="form-group mb-2">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control mt-2" placeholder="Masukkan username anda..." required="required">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Password</label>
                                <input type="password" name="pass" class="form-control mt-2" placeholder="Masukkan Password anda..." required="required">
                            </div>
                            <div class="form-group mt-4 mb-2">
                                <a href="proses-login-petugas.php"><button type="submit" class="btn btn-primary">LOGIN</button></a>
                            </div>
                            <a href="index.php">Login sebagai Siswa</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>