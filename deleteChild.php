<?php 

// jalankan session
session_start();

// cek session login user
if (!isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}

// panggil file functions
require 'functions.php';

// ambil child_id dan user_id melalui GET method
$child_id = $_GET["child_id"];
$user_id = $_GET["user_id"];

// panggil fungsi hapus child
if (hapusChild($child_id, $user_id) > 0) {
	echo "
			<script>
				
				document.location.href = 'history.php';
			</script>
			";
			
} else {
	echo mysqli_error($conn);
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Hello</title>
 </head>
 <body>

 	<h1><?= $child_id; ?></h1>
 
 </body>
 </html>