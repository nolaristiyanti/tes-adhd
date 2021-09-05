<?php 

// jalankan session
session_start();

// cek session login admin
if (!isset($_SESSION["login_admin"])) {
	header("Location: index.php");
	exit;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style>
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

<a href="logout.php" class="logout">Logout</a>

<div id='wrapper'>

<h1>Selamat Datang, Admin!</h1>

<ul>
	<li>
		<a href="listUser.php">User</a>
	</li>
	<li>
		<a href="listChild.php">Child</a>
	</li>
	<li>
		<a href="listReport.php">Report</a>
	</li>
</ul>

</body>
</html>