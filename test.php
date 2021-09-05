<?php 

// jalankan session
session_start();

// hapus session tes
unset($_SESSION["tes"]);

// cek session login user
if (!isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

// ambil data user_id melalui session method
$user = $_SESSION["user_id"];
$user_id = (int)$user[0]["user_id"];

// koneksi ke database
require 'functions.php';

// cek apakah tombol register di lik
if (isset($_POST["register"])) {
  $child_fullname = ucwords($_POST['child_fullname']);

  // panggil fungsi registrasi tes
  if (registrasiTes($_POST) > 0) {

    header("Location: instruction.php?child_fullname=".$child_fullname."&status=new");

  } else {
    // ambil child_id
    $child = mysqli_query($conn, "SELECT child_id FROM child WHERE user_id = '$user_id' AND child_fullname = '$child_fullname'");
    $cek = mysqli_fetch_assoc($child);
    $child_id = $cek["child_id"];

    $cekResult = mysqli_query($conn, "SELECT child_id FROM result WHERE child_id = '$child_id'");
    $cek1 = mysqli_fetch_assoc($cekResult);
    $cekAnswer = mysqli_query($conn, "SELECT child_id FROM answer WHERE child_id = '$child_id'");
    $cek2 = mysqli_fetch_assoc($cekAnswer);
    $cekScore = mysqli_query($conn, "SELECT child_id FROM score WHERE child_id = '$child_id'");
    $cek3 = mysqli_fetch_assoc($cekScore);

    // sudah tes
    if ($cek1 && $cek2 && $cek3) {
      echo "
        <script>
          var lat = '$child_fullname';
          var r = confirm('Anak anda sudah terdaftar. Tekan Ok untuk tes ulang');
          if(r)document.location.href='instruction.php?child_fullname='+lat+'&status=update';
        </script>
      ";

    } else {
      // belum tes
      echo "
        <script>
          var lat = '$child_fullname';
          var r = confirm('Anak anda sudah terdaftar. Tekan Ok untuk mulai tes');
          if(r)document.location.href='instruction.php?child_fullname='+lat+'&status=new';
        </script>
      ";
    }
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
            <a class="nav-link js-scroll-trigger active" href="test.php">Tes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="history.php">Riwayat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="settings.php">Pengaturan</a>
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
      <div class="row justify-content-center pt-3">
        <div class="col-lg-6 align-self-center pt-5">
          <img src="img/1.svg" width="100%">
        </div>
        <div class="col-lg-6 align-self-center pt-5">
          <form class="card p-3" action="" method="post">
            <input type="hidden" name="user_id" value="<?= $user_id; ?>">
            <div class="text-center mt-2 mb-3">
              <h3>Registrasi Tes</h3>
            </div>
            <div class="row mb-3">
              <label for="child_fullname" class="col-sm-4 col-form-label">Nama Lengkap Anak</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="child_fullname" id="child_fullname" autofocus autocomplete="off" required>
              </div>
            </div>
            <fieldset class="row mb-3">
              <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin Anak</legend>
              <div class="col-sm-8">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="child_sex" id="Female" value="Female" autocomplete="off" required>
                  <label class="form-check-label" for="Female" required>
                    Perempuan
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="child_sex" id="Male" value="Male" autocomplete="off">
                  <label class="form-check-label" for="Male">
                    Laki-Laki
                  </label>
                </div>
              </div>
            </fieldset>
            <div class="row mb-3">
              <label for="child_age" class="col-sm-4 col-form-label">Umur Anak</label>
              <div class="col-sm-8">
                <input class="form-control" min="4" max="12" type="number" name="child_age" id="child_age" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group mb-4">
                <button type="submit" name="register" value="user" class="form-control btn btn-primary btn-block"><b>Daftar</b></button>
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