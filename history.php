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

// inisialisasi status
$status = "update";

// query join tabel result dan child
$child = query("SELECT * FROM result t1 JOIN child t2 ON t1.child_id=t2.child_id JOIN user t3 ON t2.user_id=t3.user_id WHERE t3.user_id = '$user_id' ORDER BY child_fullname ASC");

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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>ADHD Test</title>
  <style>
    .dotted {
      border-style: dotted;
    }

    .btn-icon {
      /*background-color: DeepSkyBlue;*/
      border: none;
      color: white;
      padding: 8px 12px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
    }
    .btn-icon:hover {
      /*background-color: DodgerBlue;*/
    }
    .container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td, th {
    vertical-align: middle;
  }
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
            <a class="nav-link js-scroll-trigger  active" href="history.php">Riwayat</a>
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

  <section class="bg-white min-vh-100 pt-5">
    <?php if (empty($child)) : ?>
      <div class="container pt-5">
        <div class="row pt-5">
          <div class="col mt-5 text-center">
            <img src="img/r5.svg" width="25%">
          </div>
        </div>
        <div class="row">
          <div class="col mt-3 text-center">
            <h5>History kosong!</h5>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <button type="button" class="btn btn-success" onclick="window.location.href='test.php'">Mulai Tes &#10148;</button>
          </div>
        </div>
      </div>
    <?php else : ?>
      <div class="container">
        <div class="row">
          <div class="col-12 table-responsive">
            <table class="table table-bordered table-hover">
              <thead class="table-primary text-center">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Anak</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Hasil Tes</th>
                  <th scope="col">Tanggal Tes</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0; ?>
                <?php foreach ($child as $row) : ?>
                  <tr class="align-middle text-center">
                    <th scope="row"><?= $i+1; ?></th>
                    <td>
                      <?= ucwords($row["child_fullname"]); ?>
                    </td>
                    <td><?= $row["child_age"]; ?> tahun</td>
                    <td>
                      <?php 
                        if ($row["child_sex"] == "Female") {
                          $sex = "Perempuan";
                        } else {
                          $sex = "Laki-Laki";
                        }
                        echo $sex;
                      ?>
                    </td>
                    <td>
                        <?php $hasil = $row["result_in"]; 
                        if($hasil == "tidak teridentifikasi menderita ADHD") {
                          echo "Normal";
                        } elseif ($hasil == "teridentifikasi menderita ADHD tipe dominan Hyperactive-Impulsive") {
                          echo "Hyperactive-Impulsive";
                        } elseif ($hasil == "teridentifikasi menderita ADHD tipe dominan Inattentive") {
                          echo "Inattentive";
                        } else {
                          echo "Combined";
                        }
                      ?> 
                    </td>
                    <td>
                      <?php 
                        $date = date("d F Y", strtotime($row["result_date"])); 
                        echo $date; 
                      ?>
                    </td>
                    <td>
                      <button class="btn btn-icon btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tes Ulang" onclick="repeat('<?= $row["child_fullname"]; ?>')">
                      <i class="fa fa-repeat"></i>
                      </button>
                      <button class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data" onclick="editChild('<?= $row["child_id"]; ?>')">
                      <i class="fa fa-edit"></i>
                      </button>
                      <button class="btn btn-icon btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Riwayat">
                      <i class="fa fa-trash"></i>
                      </button>
                      <script>
                        function repeat(lat) {
                          document.location.href='instruction.php?child_fullname='+lat+'&status=update';
                        }
                        
                        function editChild(id) {
                          document.location.href='editChild.php?child_id='+id;
                        }
                        
                        function deleteChild(child_id, user_id) {
                          document.location.href='deleteChild.php?child_id=' + child_id + '&user_id=' + user_id;
                        }
                        '<?= $row["child_id"]; ?>'
                      </script>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Hapus Riwayat</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Yakin ingin menghapus riwayat tes?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                              <button type="button" class="btn btn-primary" onclick="deleteChild('<?= $row["child_id"]; ?>', '<?= $row["user_id"]; ?>')">Yakin</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <?php endif; ?>
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