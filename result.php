<?php 

// jalankan session
session_start();

// hapus session tes
unset($_SESSION["tes"]);

// cek session login user
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

// ambil data hasil tes melalui GET method
$output = $_GET["output"];

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

    .note {
      border-radius: 5px;
      border-left: 6px solid #42c5f5;
      border-right:1px solid lightgrey;
      border-top:1px solid lightgrey;
      border-bottom:1px solid lightgrey;
      /*border-color: black;*/
      background-color: white;
      padding: 20px;
      border-left-width: 5px;
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
    <div class="container pt-4">
      <div class="row justify-content-center">
        <div class="col  align-self-center">
          <div class="mt-5 note ">
            <h5>Hasil Tes : </h5>
            <?php if ($output == "tidak teridentifikasi menderita ADHD") : ?>
              <p class="text-justify">Berdasarkan jawaban Anda terhadap tes skrining ADHD ini, anak Anda <b><?= $output; ?>.</b></p>
            <?php else : ?>
              <p class="text-justify">Berdasarkan jawaban Anda terhadap tes skrining ADHD ini, anak Anda <b><?= $output; ?>.</b> Segera konsultasikan dengan dokter anak untuk mendapat penanganan yang tepat sedini mungkin.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row  justify-content-center mt-1">
        <div class="col text-center">
          <div class="container">
            <img src="img/sv4.svg" width="50%">
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