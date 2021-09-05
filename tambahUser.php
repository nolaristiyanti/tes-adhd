<?php 

// jalankan session
session_start();

// cek session login admin
if (!isset($_SESSION["login_admin"])) {
	header("Location: index.php");
	exit;
}

// koneksi ke database
require 'functions.php';

if (isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo mysqli_error($conn);
		// echo 
		// 	"
		// 	<script>
		// 		alert('user berhasil ditambahkan');
		// 		document.location.href = 'listUser.php';
		// 	</script>
		// 	";
	} else {
		echo mysqli_error($conn);
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah User</title>
	<style>
		label {
			display: block;
		}
		#wrapper {
		    width:950px;
		    height:auto;
		    padding: 13px;
		    margin-right:auto;
		    margin-left:auto;
		    background-color:#fff;
		}
	</style>
</head>
<body bgcolor='#e1e1e1'>

<a href="logout.php" class="logout">Logout</a> | <a href="admin.php">Home</a> | <a href="listUser.php">User</a>

<div id='wrapper'>

<h1>Halaman Registrasi</h1>

<form action="" method="post">
	<ul>
		<li>
			<label for="fullname">Nama Lengkap :</label>
			<input type="text" name="user_fullname" id="fullname" autofocus autocomplete="off" required>
		</li>
		<li>
			<label for="phone">No Hp. :</label>
			<input type="text" name="user_phone" id="phone" autocomplete="off" required>
		</li>
		<li>
			<label for="username">Username :</label>
			<input type="text" name="username" id="username" autocomplete="off" required>
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password" required>
		</li>
		<li>
			<label for="password2">Konfirmasi password :</label>
			<input type="password" name="password2" id="password2" required>
		</li>
		<li>
			<button type="submit" name="register">Register</button>
		</li>
	</ul>
</form>

</div>
</body>
</html>