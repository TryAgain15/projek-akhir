<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang!</title>
    <link rel="stylesheet" href="css/mine.css">
    <link rel="stylesheet" href="css/materialize.css">
</head>
<!-- <body background="image/ryunosuke-kikuno-FKqxZ58bVjU-unsplash.jpg" style="background-attachment: fixed; background-size: 100%;"> -->
<body>
    <!-- Awal NAVBAR -->
    <?php
    include 'navbar.php'
    ?>

    <!-- Akhir NAVBAR -->

    
    <!-- Awal Jumbotron -->
    
    <!-- Akhir Jumbotron -->


    <!-- Awal Konten Header -->
    <div class="katamutiara z-depth-3 lightblue ">
        <p>" Jangan Malas Membaca Walau Hanya Sebatas Novel "</p>
    </div>
    <div class="container">
        <h3>PALING POPULER</h3>
    </div>
    <!-- Akhir Konten Header -->


    <!-- Awal Isi Konten -->
<?php
include 'rekomendasi.php';
?>
    <!-- Akhir Isi Konten -->
</body>
</html>