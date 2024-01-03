<?php
session_start();
include 'koneksi.php';



$username = $_POST['username'];
$password = $_POST['pass'];

$sql = "SELECT * FROM petugas WHERE username = '$username' AND pass = '$password'";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query) > 0 ) {
    $data = mysqli_fetch_array($query);
    

    $_SESSION['id_petugas'] = $data['id_petugas'];
    $_SESSION['nama_petugas'] = $data['nama_petugas'];
    $_SESSION['level'] = $data['level'];

    if($data['level'] == 'admin') {
        header("Location:admin/admin.php");
    }elseif($data['level'] == 'petugas') {
        header("Location:petugas/petugas.php");
    }
}else {
    echo "<script>
    let warning = alert('Mohon maaf data yang anda masukkan salah!');
    window.location.assign('login_admin.php');
    
    </script>";
}

?>