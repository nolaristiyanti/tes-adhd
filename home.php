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

// ambil user_id dari session method
$user= $_SESSION["user_id"];
$user_id = (int)$user[0]["user_id"];

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
    .bg-cover {
      background: url('img/family6.svg') no-repeat center center;
      -webkit-background-size: cover;
      width: 100%;
    }

    .video {
      width: 100%;
    }

    .button5 {
      background-color: white;
      color: black;
      border: 2px solid #6C79D9;
      border-radius:6px;
      font-family:Arial;
      font-size:12px;
      font-weight:bold;
      padding:12px 42px;
    }

    .button5:hover {
      background-color: #6C79D9;
      color: white;
    }

    .dotted {
      border-style: dotted;
    }

    .wrapper {
      width: 100px;
      margin: 150px auto;
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
          <a class="nav-link js-scroll-trigger active" aria-current="page" href="home.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="test.php">Tes</a>
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
  </nav>

  <div class="container pt-3">   
    <div class="jumbotron  bg-cover pb-5  pt-5">
      <div class="row pt-5 pb-5">
        <div class="col pt-5 pb-5 mb-5 text-center ">
          <br><br><br>
          <button class="button button5 mt-5 mb-5 align-middle" onclick="myFunction()">Mulai Tes</button>
          <script>
            function myFunction() {
              document.location.href='test.php';
            }
          </script>
        </div>
      </div>
    </div>
  </div>

  <section id="id" class="about mt-3">
    <div class="container">
      <div class="row mb-3">
        <div class="col text-center">
          <h2>Apa itu Tes ADHD?</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <p style="font-size: 20px;">
            Tes ADHD adalah tes yang bertujuan sebagai <i>screening tool</i> bagi orang tua untuk mengetahui apakah anak mengalami gejala ADHD. Tes ini BUKAN alat diagnostik, diagnosis hanya dapat dilakukan oleh dokter anak atau psikiater. Dengan adanya tes ini, penilaian dapat menjadi langkah pertama yang berharga bagi anak untuk mendapatkan pengobatan ADHD yang tepat sedini mungkin.
          </p>
        </div>
      </div>
    </div>
  </section>

  

  <section id="id" class="about mt-5">
    <div class="container">
      <div class="row mb-3">
        <div class="col text-center">
          <h2>Penjelasan Singkat ADHD</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10 text-justify">
          <div class="card">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <b>Pengertian ADHD</b>
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  ADHD adalah salah satu gangguan perkembangan saraf yang paling umum pada masa kanak-kanak. Ini biasanya pertama kali didiagnosis pada masa kanak-kanak dan sering berlangsung hingga dewasa. Anak-anak dengan ADHD mungkin kesulitan memperhatikan, mengontrol perilaku impulsif (mungkin bertindak tanpa memikirkan apa akibatnya), atau menjadi terlalu aktif</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <b>Gejala ADHD</b>
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Gejala utama ADHD adalah sulit memusatkan perhatian, serta berperilaku impulsif dan hiperaktif. Penderita tidak bisa diam dan selalu ingin bergerak.
                    Gejala ADHD umumnya muncul pada anak-anak sebelum usia 12 tahun. Namun pada banyak kasus, gejala ADHD sudah dapat terlihat sejak anak berusia 3 tahun. ADHD yang terjadi pada anak-anak dapat terbawa hingga dewasa.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <b>Tipe ADHD</b>
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <ul>
                      <li>Dominan hiperaktif-impulsif. Pada tipe ini, pengidap umumnya memiliki masalah hiperaktivitas dan perilaku impulsif.
                      </li>
                      <li>Dominan inatentif. Pada tipe ini, pengidap umumnya memiliki gejala tidak dapat memperhatikan dengan baik.</li>
                      <li>Kombinasi hiperaktif-impulsif dan inatentif. Pada tipe ini, pengidap mengalami gejala hiperaktif, impulsif, dan tidak dapat memperhatikan dengan baik.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="id" class="about mt-5">
    <div class="container">
      <div class="row mb-3">
        <div class="col text-center">
          <h2>Ayo tonton video singkat tentang ADHD!</h2>
        </div>
      </div>
      <div class="row justify-content-center mb-5">
        <div class="col-sm-8 text-center">
            <div class="responsiveyoutube">
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/Dta4Ua7hHfI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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