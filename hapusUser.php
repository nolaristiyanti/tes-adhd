<?php 

// jalankan session
session_start();

// cek session login admin
if (!isset($_SESSION["login_admin"])) {
	header("Location: index.php");
	exit;
}

// panggila file functions
require 'functions.php';

// ambil user_id lewat GET method
$user_id = $_GET["user_id"];

// panggil fungsi hapus user
if (hapusUser($user_id) > 0) {
	echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'listUser.php';
			</script>
			";
			
} else {
	echo mysqli_error($conn);
}

 ?>