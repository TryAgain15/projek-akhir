<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="mine.css">
    <link rel="stylesheet" href="css/materialize.css">
</head>
<body>
    <!-- Awal NAVBAR -->
    <?php
    include 'navbar.php'
    ?>
    <!-- Akhir NAVBAR -->

    
    <!-- Awal Jumbotron -->
    
    <!-- Akhir Jumbotron -->


    <!-- Awal Konten Header -->
    <div class="konten">
        <p>REKOMENDASI NOVEL</p>
    </div>
    <div class="katamutiara z-depth-3 lightblue ">
    <p>" Jangan Malas Membaca Walau Hanya Sebatas Novel "</p>
    </div>
    <!-- Akhir Konten Header -->


    <!-- Awal Isi Konten -->
<?php
include 'novel.php';
?>
    <!-- Akhir Isi Konten -->
</body>
</html>