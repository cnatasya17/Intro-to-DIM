<?php
    // Import Semua Class yang Dibutuhkan
    require_once '../../Classes/Pengguna.php';
    $pengguna = new Pengguna();
    $data = $pengguna->show();
    $data_count = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Mandiri</title>
    <link rel="stylesheet" href="./style/style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/style.css">
    <style>
      .font-normal {
        font-weight: 450!important;
        text-align: center!important;
      }

      .align-mid{
        text-align: center!important;
      }
    </style>

</head>
<body>   
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><?= $pengguna->className()?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</header>

<div class="container-fluid">
  <div class="row">

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../ViewPelanggan/index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Pelanggan
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../ViewPengguna/index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Pengguna
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../ViewBarang/index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Barang
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../ViewHakAkses/index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Hak Akses
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../ViewPembelian/index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Pembelian
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../ViewPenjualan/index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Penjualan
            </a>
          </li> 

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../ViewSupplier/index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Supplier
            </a>
          </li>
        </ul>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $pengguna->className() ?></h1>
      </div>

      <a href="./create.php"><button type="button" class="btn btn-primary mb-2">+ Tambah Pengguna</button></a>

      <div class="table-responsive">
        <table class="table table-striped table-lg">
          <thead>
            <tr>
              <th scope="col" class="align-mid">#</th>
              <th scope="col" class="align-mid">Id Pengguna</th>
              <th scope="col" class="align-mid">Nama Pengguna</th>
              <th scope="col" class="align-mid">Password</th>
              <th scope="col" class="align-mid">Nama Depan</th>
              <th scope="col" class="align-mid">Nama Belakang</th>
              <th scope="col" class="align-mid">No HP</th>
              <th scope="col" class="align-mid">Alamat</th>
              <th scope="col" class="align-mid">Id Akses</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = mysqli_fetch_array($data)) { ?>
              <tr>
                <th class="font-normal"><?= $data_count ?></th>
                <th class="font-normal"><?= $row['id_pengguna'] ?></th>
                <th class="font-normal"><?= $row['nama_pengguna'] ?></th>
                <th class="font-normal"><?= $row['password'] ?></th>
                <th class="font-normal"><?= $row['nama_depan'] ?></th>
                <th class="font-normal"><?= $row['nama_belakang'] ?></th>
                <th class="font-normal"><?= $row['no_hp'] ?></th>
                <th class="font-normal"><?= $row['alamat'] ?></th>
                <th class="font-normal"><?= $row['id_akses'] ?></th>
              
                <th style="display: flex;">
                    <a href="./edit.php?id_pengguna=<?= $row['id_pengguna'] ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                    <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
                </th>
              </tr>
            <?php 
                $data_count++;
                } 
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

    <script src="../JavaScript/dashboard.js"></script>
</body>
</html>
