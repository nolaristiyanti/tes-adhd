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

// panggil file functions
require 'functions.php';

// ambil user_id dari session method
$user = $_SESSION["user_id"];
$user_id = $user[0]["user_id"];

// ambil nama lengkap anak dan status dari GET method
$child_fullname = $_GET["child_fullname"];
$status = $_GET["status"];

// query child_id untuk cek apakah anak sudah terdaftar
$cek = mysqli_query($conn, "SELECT child_id FROM child WHERE child_fullname = '$child_fullname' AND user_id = '$user_id'");
$ketemu = mysqli_fetch_assoc($cek);
$child_id = $ketemu["child_id"];

// cek apakah tombol start di klik
if (isset($_POST["start"])) {
  $_SESSION["tes"] = true;
  header("Location: 1.php?child_id=".$child_id."&status=".$status);
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

  <section class="bg-white min-vh-100">
    <div class="container pt-5">
      <div class="row justify-content-center pt-3">
        <div class="col-lg-5 align-self-center pt-5">
          <img src="img/rename.png" width="100%">
        </div>
        <div class="col-lg-7 align-self-center pt-3">
          <div class="card">
            <div class="card-header text-center">
              <b>Petunjuk Tes</b>
            </div>
            <div class="card-body">
              <ol>
                <li>
                  Anak berusia 4-12 tahun
                </li>
                <li>
                  Gejala telah muncul setidaknya selama 6 bulan
                </li>
                <li>
                  Gejala muncul setidaknya di dua atau lebih setting tempat (misalnya, di rumah dan sekolah)
                </li>
                <li>
                  Pengerjaan tes dibagi menjadi 2 bagian yaitu bagian 1 (Activity) dan bagian 2 (Attention)
                </li>
                <li>
                  Setiap bagian terdiri dari 9 pertanyaan yang wajib dijawab
                </li>
                <li>
                  Terdapat 4 pilihan jawaban yaitu Tidak pernah, Jarang, Kadang-Kadang, dan Sering  
                </li>
                <li>
                  Jawablah semua pertanyaan yang paling sesuai dengan kondisi anak
                </li>
                <li>
                  Tidak ada batas waktu pengerjaan
                </li>
              </ol>
              <form action="" method="post">
                <input type="hidden" name="child_id" value="<?= $child_id; ?>">
                <input type="hidden" name="status" value="<?= $status; ?>">
                <button type="submit" name="start" class="btn btn-primary">Saya Mengerti</button>
              </form>             
            </div>
          </div>
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