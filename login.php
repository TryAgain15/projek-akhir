<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi - WWW.MALASNGODING.COM</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
	<h2>Login</h2>
	<br>
	<!-- cek pesan notifikasi -->
	<?php 
    include 'proses/koneksi.php';
	
 
// 	session_start();
// 	if (isset($_SESSION['username'])) {
//     header("Location: tambah.php");
// }
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
	<br/>
	<br/>
	<form method="post" action="proses/proseslogin.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" class="waves-effect waves-light btn" value="LOGIN" name="submit" id="submit">
				<a href="daftar.php" class="waves-effect waves-light btn">Buat Akun</a>
				</td>
			</tr>
		</table>			
	</form>
	</div>
</body>
</html>