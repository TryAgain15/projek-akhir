<?php
include 'proses/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<title>Daftarkan Akun</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link rel="stylesheet" href="css/home.css">
</head>
<body>
    
    
<div class="center">
	<!-- cek pesan notifikasi -->
	<div class="container">
    <br>
	
    <div class="z-depth-1 lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;background-color: rgb(255,255,255,0.8); border-radius:5%;">
      <h2 class="black-text">Buat Akun</h2>
      <img src="image/daftar.png" alt="daftar" style="height: 400px; width:400px;">  
            
                <form action="proses/prosesdaftar.php" method="post">
                    <!-- <div class="card-content"> -->
                    <div class="input-field">
                      <input type="text" class="validate" name="username" id="username" data-length="30">
                      <label for="nama">Nama Lengkap</label>
                    </div>

                    <div class="input-field">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" >
                    </div>    

                    <div class="input-field">
                        <label for="password">Password </label>
                        <input type="password" name="password" id="password" >
<br><br><br><br>
                        <button type="submit" name="daftar" id="daftar" class="btn waves-effect waves-light">Daftarkan Akun</button>
                <br> <br><br>        <a href="login.php">Sudah Memiliki Akun?</a> <br> <br>
                    </div>
                    </div>
                  </form>
          
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
</body>
</html>
