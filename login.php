<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="center">
	<!-- cek pesan notifikasi -->
	<div class="container">
		<br>
		<div class="z-depth-1 lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;background-color: rgb(255,255,255,0.8); border-radius:10%;">
			<h2 class="black-text">Login</h2>
			<img src="image/login.png" alt="login" style="height: 300px; width:300px;">
			<br>
<?php 
    include 'proses/koneksi.php';
	session_start();
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username atau password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login terlebih dahulu";
		}else if($_GET['pesan'] == "terdaftar"){
			echo "Akun anda sudah terdaftar. Mohon untuk masuk dengan akun yang sudah didaftarkan !";
		}
	}
	?>



<form class="col s12" method="post" action="proses/proseslogin.php">
  <div class='row'>
	<div class='col s12'>
	</div>
  </div>

  <div class='row'>
	<div class='input-field col s12'>
	  <input class='validate' type='text' name='username' id='username' />
	  <label for='username'>Username</label>
	</div>
  </div>

  <div class='row'>
	<div class='input-field col s12'>
	  <input class='validate' type='password' name='password' id='password' />
	  <label for='password'>Password</label>
	</div>
  </div>
  <center>
  <button type="submit" name="submit" id="submit" class="btn waves-effect waves-light">Login</button>
  <br><br><br>
	<a href="daftar.php">Belum Punya Akun?</a>
	<br><br>
  </center>
</form>
</div>
</div>
</div>

<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>