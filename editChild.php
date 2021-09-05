<?php 

session_start();

if (!isset($_SESSION["login"])) {
  header("Location: ndex.php");
  exit;
}

require 'functions.php';

// ambil data di URL
$child_id = $_GET["child_id"];
// query data child berdasarkan id
$child = query("SELECT * FROM child WHERE child_id = '$child_id'")[0];

$userSession = $_SESSION["user_id"];
$user_id = $userSession[0]["user_id"];

$user = query("SELECT user_fullname FROM user WHERE user_id = '$user_id'")[0];
$user_fullname = $user["user_fullname"];

$checked = $child["child_sex"];

//  apakah tombol submit sudah ditekan
if (isset($_POST["ubahChild"])) {  
  // cek apakah data berhasil diubah atau tidak
    if (ubahChild($_POST) > 0) {
      header("Location: history.php");
      exit;
    } else {
      echo "
        <script>
          alert('data gagal diubah');
          document.location.href = 'history.php';
        </script>
        ";
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
  <style>
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
            <a class="nav-link js-scroll-trigger active" href="history.php">Riwayat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger " href="settings.php">Pengaturan</a>
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
          <img src="img/doll.svg" width="100%">
        </div>
        <div class="col-lg-6 align-self-center pt-5">
          <form class="card p-3" action="" method="post">
            <input type="hidden" name="child_id" value="<?= $child["child_id"]; ?>">
            <input type="hidden" name="user_fullname" value="<?= $user["user_fullname"]; ?>">
            <input type="hidden" name="who" value="user">
            <div class="text-center mt-2 mb-3">
              <h3>Edit Data Anak</h3>
            </div>
            <div class="row mb-3">
              <label for="child_fullname" class="col-sm-4 col-form-label">Nama Lengkap Anak</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="child_fullname" id="child_fullname" value="<?= ucwords($child["child_fullname"]); ?>" autocomplete="off" required>
              </div>
            </div>
            <fieldset class="row mb-3">
              <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend>
              <div class="col-sm-8">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="child_sex" id="Female" value="Female" <?=($checked =='Female'?' checked=checked':''); ?> required>
                  <label class="form-check-label" for="Female">
                    Perempuan
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="child_sex" id="Male" value="Male" <?=($checked =='Male'?' checked=checked':''); ?> required>
                  <label class="form-check-label" for="Male">
                    Laki-Laki
                  </label>
                </div>
              </div>
            </fieldset>
            <div class="row mb-3">
              <label for="child_age" class="col-sm-4 col-form-label">Umur Anak</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" min="4" max="12" name="child_age" id="child_age" value="<?= $child["child_age"]; ?>" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group mb-4">
                <button type="submit" name="ubahChild" class="form-control btn btn-primary btn-block"><b>Ubah</b></button>
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>