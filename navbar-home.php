<?php
include 'proses/koneksi.php';
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['sesi'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/mine.css">
</head>
<body>
    <!-- <body background="image/book-stacks.jpg" style="background-size:100%; background-repeat: unset;"> -->
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper brown">
                    <div class="container">
                        <img src="image/books.png" alt="logo" style="width: 50px; height: 50px; padding: 5px 5px 0px;" >
                        <a href="home.php" class="brand-logo">W-Novel</a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="profile.php">About Us</a></li>
                            <li> <a href="novel.php">List Novel</a> </li>
                            <li><a href="proses/logout.php">Logout</a></li>
                        </ul>
                        <!-- <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
                    </div>
            </div>
            </div>
        </nav>
    <!-- Side Nav -->
    <!-- <ul class="sidenav" id="mobile-demo"> -->
    <!-- <ul class="right hide-on-med-and-down batastop"> -->
        <!-- <li><a href="home.php">Home</a></li> -->
        <!-- <li><a href="profile.php">Profile</a></li> -->
    <!-- </ul> -->
</body>
<?php
}
else {
    echo "<script>
        alert('Anda Harus Login Dahulu!');
    </script>";
    header("location:login.php?pesan=belum_login");
}

?>
</html>