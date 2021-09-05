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

// query tabel user
$user = query("SELECT * FROM user");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Daftar User</title>
</head>

<a href="logout.php" class="logout">Logout</a> | <a href="admin.php">Home</a>

<h1>Daftar User</h1>

<a href="tambahUser.php">Tambah data user</a>
<br>
<br>
<div id="container">
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Nama Lengkap</th>
		<th>Username</th>
		<th>No. HP</th>
		<th>Aksi</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach ($user as $row) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= ucwords($row["user_fullname"]); ?></td>
			<td><?= $row["user_phone"]; ?></td>
			<td><?= $row["username"]; ?></td>
			<td>
				<a href="ubahUser.php?user_id=<?= $row["user_id"]; ?>">ubah</a> | 
				<a href="hapusUser.php?user_id=<?= $row["user_id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
			</td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
</table>
</div>

</body>
</html>