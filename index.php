<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa | Pembayaran SPP.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <h4 class="text-center mb-4">Login Siswa</h4>
                <div class="card">
                    <div class="card-header">
                        <img src="logo-spp.jpg" width="100%" alt="">
                    </div>
                    <div class="card-body">
                        <form action="proses-login-siswa.php" method="post">
                            <div class="form-group mb-2">
                                <label for="">NISN</label>
                                <input type="number" name="nisn" class="form-control mt-2" placeholder="Masukkan NISN anda..." required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">NIS</label>
                                <input type="number" name="nis" class="form-control mt-2" placeholder="Masukkan NIS anda..." required>
                            </div>
                            <div class="form-group mt-4 mb-2">
                                <button type="submit" class="btn btn-primary">LOGIN</button>
                            </div>
                            <a href="index2.php">Login sebagai administrator / Petugas</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>