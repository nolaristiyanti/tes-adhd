<?php 

// jalankan session
session_start();

// hapus session
unset($_SESSION["tes"]);

// cek session login user
if (!isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

// panggil file functions
require 'functions.php';

// ambil data di URL
$userSession = $_SESSION["user_id"];
$user_id = $userSession[0]["user_id"];
// query data user berdasarkan id
$user = query("SELECT * FROM user WHERE user_id = $user_id")[0];

//  apakah tombol submit sudah ditekan
if (isset($_POST["ubah"])) {
  // cek apakah data berhasil diubah atau tidak
  if (settings($_POST) > 0) {
    header("Location: home.php");
    exit;
    // echo "
    //   <script>
    //     alert('data berhasil diubah');
    //     document.location.href = 'listUser.php';
    //   </script>
    //   ";
      
  } else {
    echo "
        <script>
          alert('data gagal diubah');
          document.location.href = 'home.php';
        </script>
        ";
  }
}

$disabled = "disabled";

if (isset($_POST["ubahPassword"])) {
  $disabled = "";
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
  <style>
    .dotted {
      border-style: dotted;
    }

    .link {
      background: none!important;
      border: none;
      padding-left: 10px;
      /*font-family: "Times New Roman", Times, serif;
      font-size: 15px;*/
      text-align: left;
      color: #0645AD;
      text-decoration: underline;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="padding-left: 60px; padding-right: 60px;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="home.php"><img src="img/icon5.ico" style="width:32px;height:32px;"></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mr-5 ">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" aria-current="page" href="home.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="test.php">Tes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="history.php">Riwayat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger active" href="settings.php">Pengaturan</a>
          </li>
        </ul>
        <form class="d-flex" action="logout.php">
          <button class="btn btn-primary" type="submit">Keluar</button>
        </form>
      </div>
    </div>
  </nav>

  <section class="bg-light min-vh-100">
    <div class="container pt-5">
      <div class="row justify-content-center pt-5">
        <div class="col-lg-6 align-self-center">
          <img src="img/profile.svg" width="100%">
        </div>
        <div class="col-lg-6 align-self-center pt-5">
          <form class="card p-3" action="" method="post">
            <input type="hidden" name="user_id" value="<?= $user["user_id"]; ?>">
            <div class="text-center mt-2 mb-3">
              <h3>Edit Profile</h3>
            </div>
            <div class="row mb-3">
              <label for="user_fullname" class="col-sm-4 col-form-label">Nama Lengkap</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" name="user_fullname" id="user_fullname" value="<?= $user["user_fullname"]; ?>" autocomplete="off" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="user_phone" class="col-sm-4 col-form-label">No Hp</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" name="user_phone" id="user_phone" value="<?= $user["user_phone"]; ?>"autocomplete="off" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="username" class="col-sm-4 col-form-label">Username</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" name="username" id="username" value="<?= $user["username"]; ?>" autocomplete="off" required>
              </div>
            </div>
            <div class="row mb-3">
              <button type="submit" class="link col-sm-4 col-form-label" name="ubahPassword">Ubah Password</button>
              <!-- <label for="inputEmail3" class="col-sm-4 col-form-label">Password</label> -->
              <div class="col-sm-8">
                <input class="form-control" type="password" name="password" id="password" <?= $disabled; ?> required>
              </div>
            </div>
            <div class="form-group mb-4">
                <button type="submit" name="ubah" class="form-control btn btn-primary btn-block"><b>Ubah</b></button>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-white">
    <div class="container">
      <div class="row pt-3">
        <div class="col text-center">
          <p>Copyright 2021</p>
        </div>
      </div>
    </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>