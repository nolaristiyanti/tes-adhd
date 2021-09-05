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

// ambil child_id lewat GET method
$child_id = $_GET["child_id"];

// panggil fungsi hapus child
if (hapusChild($child_id) > 0) {
	echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'listChild.php';
			</script>
			";
			
} else {
	echo mysqli_error($conn);
}

 ?>