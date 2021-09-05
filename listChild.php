<?php 

// jalankan session
session_start();

// ce session login admin
if (!isset($_SESSION["login_admin"])) {
	header("Location: index.php");
	exit;
}

// panggil file functions
require 'functions.php';

// query tabel child
$child = query("SELECT child_id, child_fullname, child_age, child_sex, user_fullname FROM child t1 JOIN user t2 ON t1.user_id=t2.user_id ORDER BY child_fullname ASC, user_fullname ASC");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Daftar Anak</title>
</head>
<body>
<a href="logout.php" class="logout">Logout</a> | <a href="admin.php">Home</a>

<h1>Daftar Anak</h1>

<a href="tambahChild.php">Tambah data anak</a>
<br>
<br>

<div id="container">
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Fullname</th>
		<th>Age</th>
		<th>Sex</th>
		<th>Parent's Name</th>
		<th>Aksi</th>
	</tr>

	<?php $i = 0; ?>
	<?php foreach ($child as $row) : ?>
		<tr>
			<td><?= $i+1; ?></td>
			<td><?= ucwords($row["child_fullname"]); ?></td>
			<td><?= $row["child_age"]; ?></td>
			<td><?= $row["child_sex"]; ?></td>
			<td><?= $row["user_fullname"]; ?></td>
			<td>
				<a href="ubahChild.php?child_id=<?= $row["child_id"]; ?>">ubah</a> | 
				<a href="hapusChild.php?child_id=<?= $row["child_id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
			</td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
</table>
</div>

</body>
</html>