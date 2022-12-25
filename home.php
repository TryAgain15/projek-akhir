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

    <!-- Bookmark  -->
    <div class="row batasan">
    <div class="col s4 center batas ">
        <img src="image/a1.png" alt="1" >
    </div>
    <div class="col s4 center batas ">
        <img src="image/a2.png" alt="1" >
    </div>
    <div class="col s4 center batas ">
        <img src="image/a3.png" alt="1" >
    </div>
    </div>

    <div class="row">
    <div class="col m4 center tek">
    Kelengkapan Buku Rekomendasi <br> Novel dengan Judul yang <br> Menarik dari berbagai genre
    </div>
    <div class="col s4 center tek">
    Dapatkan Reward dalam <br> Setiap Kali Membeli Buku <br> dengan Limit Tertentu
    </div>
    <div class="col s4 center tek">
    Penawaran Menarik dan Harga <br> yang Terjangkau dari <br> Setiap Toko
    </div>
    </div>
    <!-- Akhir Bookmark -->

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

    <!-- FOOTER -->
    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12 ">
                <h5 class="white-text">Tentang W-Novel</h5>
                <p class="grey-text text-lighten-4">W-Novel adalah tempat dimana para pecinta novel dapat mencari novel dengan mudah. Kamu bisa menemukan berbagai macam novel yang menarik dari novel romance, sci-fi, fiksi, ilmiah ataupun novel fantasi disini</p>
              </div>
              <div class="col l4 offset-l2 s12">
              <a href="profile.php"> <h5 class="white-text"> About Us </h5></a>
                </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container center text-xl-right">
            © 2023 Copyright
            </div>
          </div>
        </footer>
    <!-- END FOOTER -->
</body>
</html>