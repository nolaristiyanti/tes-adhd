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

// query tabel user
$user = query("SELECT user_fullname FROM user ORDER BY user_fullname ASC");

// cek apakah tombol register di klik
if (isset($_POST["register"])) {

	$user_fullname = $_POST["user_fullname"];
	$user = query("SELECT user_id FROM user WHERE user_fullname = '$user_fullname'");
	$_POST["user_fullname"] = $user[0]["user_id"];

	// panggil fungsi registrasi tes
	if (registrasiTes($_POST) > 0) {
		echo 
			"
			<script>
				alert('nama anak berhasil ditambahkan');
				document.location.href = 'listChild.php';
			</script>
			";
	} else {
		echo mysqli_error($conn);
		
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Anak</title>
</head>
<body>

<a href="logout.php" class="logout">Logout</a> | <a href="admin.php">Home</a> | <a href="listChild.php">Anak</a>

<h1>Halaman Tambah Data Anak</h1>

<form action="" method="post">
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>
				<label for="child_fullname">Nama Lengkap Anak :</label>
			</td>
			<td>
				<input type="text" name="child_fullname" id="child_fullname" autofocus autocomplete="off" required>
			</td>
		</tr>
		<tr>
			<td>
				Jenis Kelamin :
			</td>
			<td>
				<input type="radio" name="child_sex" id="Female" value="Female" required>
          		<label for="Female">Perempuan</label>
           		<br>
	            <input type="radio" name="child_sex" id="Male" value="Male">
	            <label for="Male">Laki-Laki</label>
			</td>
		</tr>
		<tr>
			<td>
				<label for="child_age">Umur Anak : </label>
			</td>
			<td>
				<input type="text" name="child_age" id="child_age" autocomplete="off" required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="user_fullname">Nama Orang Tua : </label>
			</td>
			<td>
				<select id="user_fullname" name="user_fullname" required>
		 			<?php foreach ($user as $row) : ?>
				 		<option value="<?= $row["user_fullname"]?>"><?= $row["user_fullname"]; ?></option>
					<?php endforeach; ?>
				 </select>
			</td>
		</tr>
	</table>

	<br>
	<button type="submit" name="register" value="admin">Tambah Data</button>
</form>
</body>
</html>