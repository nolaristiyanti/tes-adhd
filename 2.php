<?php 

// jalankan session
session_start();

// cek session login user
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

// cek session tes
if (!isset($_SESSION["tes"])) {
    header("Location: test.php");
    exit;
}

// panggil file functions.php
require 'functions.php';

// query soal attention
$attention = query("SELECT * FROM attention_question");

// array untuk pilihan jawaban tidak pernah
$answerTidakPernah = ["answer1TidakPernah", "answer2TidakPernah", "answer3TidakPernah", "answer4TidakPernah", "answer5TidakPernah", "answer6TidakPernah", "answer7TidakPernah", "answer8TidakPernah", "answer9TidakPernah"];

// array untuk pilihan jawaban jarang
$answerJarang = ["answer1Jarang", "answer2Jarang", "answer3Jarang", "answer4Jarang", "answer5Jarang", "answer6Jarang", "answer7Jarang", "answer8Jarang", "answer9Jarang"];

// array untuk pilihan jawaban kadang-kadang
$answerKadang = ["answer1Kadang", "answer2Kadang", "answer3Kadang", "answer4Kadang", "answer5Kadang", "answer6Kadang", "answer7Kadang", "answer8Kadang", "answer9Kadang"];

// array untuk pilihan jawaban sering
$answerSering = ["answer1Sering", "answer2Sering", "answer3Sering", "answer4Sering", "answer5Sering", "answer6Sering", "answer7Sering", "answer8Sering", "answer9Sering"];

// array ke-9 jawaban
$answer = ["answerAt1", "answerAt2", "answerAt3", "answerAt4", "answerAt5", "answerAt6", "answerAt7", "answerAt8", "answerAt9"];

// ambil child_id dan status melalui GET method
$status = $_GET["status"];
$child_id = $_GET["child_id"];

// cek apakah tombol Selesai di klik
if (isset($_POST["submit2"])) {

    // panggil fungsi hitung skor activity
    if (hitungScoreActivity($_SESSION["activity"]) > 0 ) {

        // echo "
        //     <script>
        //           alert('jawaban bagian 1 telah disimpan');
        //     </script>
        // ";
    } else {
        echo "
            <script>
                  alert('jawaban bagian 1 gagal disimpan');
            </script>
        ";echo mysqli_error($conn); die;
    }

    // panggil fungsi hitung skor attention
    if (hitungScoreAttention($_POST) > 0 ) {

        // echo "
        //     <script>
        //           alert('jawaban bagian 2 telah disimpan');
        //     </script>
        // ";
    } else {
        echo "
            <script>
                  alert('jawaban bagian 2 gagal disimpan');
            </script>
        ";echo mysqli_error($conn); die;
    }

    // panggi fungsi hitung fungsi keanggotaan activity
    hitungActivity($child_id);

    // panggi fungsi hitung fungsi keanggotaan activity
    hitungAttention($child_id);

    // panggi fungsi proses fuzzy
    fuzzy();

    // panggil fungsi hasil tes
    output($child_id, $status);

    // cek status
    if ($status == "new") {
      // panggil fungsi report tes
      report($child_id);
    } 

    // mengalihkan ke halaman hasil tes
    echo "
          <script>
            var final = '$final';
            document.location.href='result.php?output='+final;
          </script>
        ";
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

  <section class="bg-white min-vh-100 mb-5">
    <div class="container pt-5 mb-3">
      <div class="alert alert-primary mt-5" role="alert">
          Bagian 2 : Attention (Berdasarkan perhatian anak)
      </div>
    </div>
    <form action="" method="post">
      <?php $i = 0; ?>
      <?php foreach ($attention as $row) : ?>
        <div class="container mb-3">
          <div class="card">
            <h5 class="card-header text-center">Pertanyaan <?= $i+1; ?></h5>
            <div class="card-body">
              <h5 class="card-title">
                <?= $row["attention_question_in"]; ?>
              </h5>
              <div class="row">
                <div class="col-lg-4">
                  <div class="input-group mb-1">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" name="<?= $answer[$i]; ?>" id="<?= $answer[$i]; ?>TidakPernah" value="Never" required type="radio">
                    </div>
                    <label class="kotak" for="<?= $answer[$i]; ?>TidakPernah">Tidak Pernah</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="input-group mb-1">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" name="<?= $answer[$i]; ?>" id="<?= $answer[$i]; ?>Jarang" value="Rarely" type="radio">
                    </div>
                    <label class="kotak" for="<?= $answer[$i]; ?>Jarang">Jarang</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="input-group mb-1">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" name="<?= $answer[$i]; ?>" id="<?= $answer[$i]; ?>Kadang" value="Sometimes" type="radio">
                    </div>
                    <label class="kotak" for="<?= $answer[$i]; ?>Kadang">Kadang-Kadang</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="input-group mb-1">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" name="<?= $answer[$i]; ?>" id="<?= $answer[$i]; ?>Sering" value="Often" type="radio">
                    </div>
                      <label class="kotak" for="<?= $answer[$i]; ?>Sering">Sering</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; ?>
      <?php endforeach; ?>

        <div class="container mt-5">
        <div class="row">
          <div class="col text-center">
            <form action="" method="post">
              <input type="hidden" name="child_id" value="<?= $child_id; ?>">
              <input type="hidden" name="status" value="<?= $status; ?>">
              <button type="submit" name="submit1" class="btn btn-secondary" onclick="history.back(-1)">&#10094; Kembali</button>
              <button type="submit" name="submit2" class="btn btn-success">Selesai &#128190;</button>
            </form>
          </div>
        </div>
      </div>
    </form>
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