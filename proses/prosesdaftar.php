<?php
include'koneksi.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
    
if(isset($_POST['daftar'])){

    $sql = 
    "INSERT INTO akun
        VALUES('','$username','$email','$password')";
    $query = mysqli_query($db, $sql);
    header("location:../login.php?pesan=terdaftar");
}
?>
