
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
    <div class="center batasan">
        <P style="font-size: 50px;">
            MENGAPA HARUS PILIH KAMI?
        </P>
    </div>
    <div class="row">
    <div class="col s4 center batas ">
        <img src="image/a1.png" alt="1" >
    </div>
    <div class="col s4 center batas ">
        <img src="image/a2.png" alt="1" >
    </div>
    <div class="col s4 center batas ">
        <img src="image/a3.png" alt="1" >
    </div>
    
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
        
        <!-- Akhir Konten Header -->
        <!-- Awal Isi Konten -->
    </div>
    <?php
include 'rekomendasi.php';
?>
<div class="row">
    <div class="col m5 right">
    <a href="novel.php" class="waves-effect waves-light btn blue ">Tampilkan Semua Novel</a>    
    </div>
</div>
    <!-- Akhir Isi Konten -->

    <!-- FOOTER -->
<?php
include 'footer.php';
?>
    <!-- END FOOTER -->
    
</body>

</html>