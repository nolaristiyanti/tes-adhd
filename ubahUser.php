<?php 

// jalankan session
session_start();

// cek session login admin
if (!isset($_SESSION["login_admin"])) {
	header("Location: index.php");
	exit;
}

// panggil file functions
require 'functions.php';

// ambil data di URL
$user_id = $_GET["user_id"];
// query data user berdasarkan id
$user = query("SELECT * FROM user WHERE user_id = $user_id")[0];

//  apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
	// cek apakah data berhasil diubah atau tidak
	if (ubahUser($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'listUser.php';
			</script>
			";
			
	} else {
		echo mysqli_error($conn);
	}
}

$disabled = "disabled";

if (isset($_POST["ubahPassword"])) {
	$disabled = "";
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Ubah data user</title>
	<style>
		.link {
		  background: none!important;
		  border: none;
		  padding: 0!important;
		  /*optional*/
		  /*font-family: arial, sans-serif;*/
		  font-family: "Times New Roman", Times, serif;
		  font-size: 15px;
		  /*input has OS specific font-family*/
		  color: #0645AD;
		  text-decoration: underline;
		  cursor: pointer;
		}
	</style>
</head>
<body>

<a href="logout.php" class="logout">Logout</a> | <a href="admin.php">Home</a> | <a href="listUser.php">User</a>

<h1>Ubah data user</h1>

<form action="" method="post">
	<input type="hidden" name="user_id" value="<?= $user["user_id"]; ?>">
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>
				<label for="user_fullname">Nama Lengkap :</label>
			</td>
			<td>
				<input type="text" name="user_fullname" id="user_fullname" value="<?= $user["user_fullname"]; ?>" required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="user_phone">No Hp. :</label>
			</td>
			<td>
				<input type="text" name="user_phone" id="user_phone" value="<?= $user["user_phone"]; ?>" required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="username">Username :</label>
			</td>
			<td>
				<input type="text" name="username" id="username" value="<?= $user["username"]; ?>" required>
			</td>
		</tr>
		<tr>
			<td>
				<button type="submit" class="link" name="ubahPassword">Ubah Password</button>
			</td>
			<td>
				<input type="password" name="password" id="password" <?= $disabled; ?> required>
			</td>
		</tr>
	</table>

	<br>
	<button type="submit" name="submit">Update Data</button>
</form>

</body>
</html>