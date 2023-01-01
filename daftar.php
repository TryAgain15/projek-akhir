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

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link rel="stylesheet" href="css/mine.css">
</head>
<body>
    
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <div class="card-action brown white-text">
                    <h3 align="center">Buat Akun</h3>
                </div>
            
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
                        <button type="submit" name="daftar" id="daftar" class="btn waves-effect waves-light">Daftar</button>
                    </div>
                    </div>
                  </form>
          
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
</body>
</html>
