<?php 

// jalankan session
session_start();

// panggil file functions
require 'functions.php';

// cek session user/ admin
if (isset($_SESSION["login"])) {
	header("Location: home.php");
} else if (isset($_SESSION["login_admin"])) {
	header("Location: admin.php");
}

// cek apakah tombol login di klik
if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
               
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if (mysqli_num_rows($result) === 1) {

		//ambil id user
		$user_id = query("SELECT user_id FROM user WHERE username = '$username'");

		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			

			if ($username == "admin"){
				$_SESSION["login_admin"] = true;
				header("Location: admin.php");

			} else {
				// set session
				$_SESSION["login"] = true;
				$_SESSION["user_id"] = $user_id;
				header("Location: home.php");
			}

			exit;
		}
	}

	$error = true;

}

// cek apakah tombol registers di klik
if (isset($_POST["register"])) {

	if (registrasi($_POST) > 0) {
		$username = strtolower($_POST["username"]);
		$user_id = query("SELECT user_id FROM user WHERE username = '$username'");
		$_SESSION["login"] = true;
		$_SESSION["user_id"] = $user_id;
		header("Location: home.php");
	} else {
		alert('daftar akun gagal, silahkan coba lagi');
		echo mysqli_error($conn);
		// die;
	}
}

 ?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="img/icon5.ico" />

	<title>ADHD Test</title>
</head>
<body>

	

	<section class="bg-light min-vh-100">
		<?php if (isset($error)) : ?>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Login gagal!</strong> Username/ password salah
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		<?php endif; ?>	
		<div class="container">
		    <div class="row pt-5 justify-content-center">
				<div class="col-lg-7 align-self-center pt-5">
					<img src="img/lp.png" width="100%">
			    </div>
				<div class="col-lg-5 align-self-center">
					<form class="card p-3" action="" method="post">
						<div class="text-center mt-2 mb-3">
							<h3>TES ADHD</h3>
						</div>
						<div class="form-group mb-2">
						    <input type="text" class="form-control" name="username" autocomplete="off" required autofocus placeholder="Username">
						</div>
						<div class="form-group mb-3">
						    <input type="password" class="form-control" name="password" required placeholder="Password">
						</div>
						<div class="form-group mb-4">
						  	<button type="submit" name="login" class="form-control btn btn-primary btn-block"><b>Masuk</b></button>
						</div>
						<div class="text-center">
						  	<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#register"><b>Daftar Akun Baru</b>
							</button>
						</div>
					</form>	
				</div>
			</div>
		</div>


		<!-- Modal -->
		<div class="modal fade" id="register" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title" id="registerLabel">Daftar</h2>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      		</div>
		      		<div class="modal-body">
		        	<form class="p-3" action="" method="post">
						<div class="form-group mb-3 bg-light">
							<input type="text" class="form-control" name="user_fullname" autofocus autocomplete="off" required placeholder="Nama Lengkap">
						</div>
						<div class="form-group mb-3">
							<input type="text" class="form-control" name="user_phone" autocomplete="off" required placeholder="No HP">
						</div>
						<div class="form-group mb-3">
							<input type="text" class="form-control" name="username" autocomplete="off" required placeholder="Username">
						</div>
						<div class="form-group mb-3">
							<input type="password" class="form-control" name="password" required placeholder="Password">
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control" name="password2" required placeholder="Konfirmasi Password">
						</div>
						<div class="form-group mb-3">
				  			<button type="submit" name="register" class="form-control btn btn-success"><b>Daftar</b></button>
				  		</div>
					</form>		
		      	</div>
		    </div>
		</div>
	</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>