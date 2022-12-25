<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang!</title>
    <link rel="stylesheet" href="css/materialize.css">
    <!-- MINE -->
    <link rel="stylesheet" href="css/mine.css">
    <!-- Mine End -->

</head>
<body>
    <!-- Awal NAVBAR -->
    <?php
    include 'navbar-home.php'
    ?>

    <!-- Akhir NAVBAR -->
<div class="sambutan">
    <div class="teks">
    <p>Selamat Datang di 
Website W-Novel</p>
    </div>
</div>
    
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
    
    
    <!-- Bookmark  -->
    <div class="col m4 center">
        <img src="image/a1.png" alt="1" class="mark">
    </div>


    <!-- Akhir Bookmark -->


    <!-- Awal Isi Konten -->
<?php
include 'rekomendasi.php';
?>
    <!-- Akhir Isi Konten -->
</body>
</html>