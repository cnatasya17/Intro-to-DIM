<?php
    // Import Semua Class yang Dibutuhkan
    require_once '../../Classes/Pengguna.php';
    $pelanggan = new Pengguna();
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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><?= $pelanggan->className()?></a>
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
        <h1 class="h2">Edit <?= $pelanggan->className() ?></h1>
      </div>

      <form action="?action=update" method="POST">
        <div class="mb-3">
            <label for="id_pengguna" class="form-label">Id Pengguna</label>
            <input type="text" class="form-control w-50" name = "id_pengguna" id="id_pengguna" placeholder="P001">
        </div>

        <div class="mb-3">
            <label for="nama_pengguna" class="form-label">Nama Pengguna</label>
            <input type="text" class="form-control w-50" name = "nama_pengguna" id="nama_pengguna" placeholder="NaSlav01">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control w-50" name = "password" id="password" placeholder="OW102615">
        </div>

        <div class="mb-3">
            <label for="nama_depan" class="form-label">Nama Depan</label>
            <input type="text" class="form-control w-50" name = "nama_depan" id="nama_depan" placeholder="Nagita">
        </div>

        <div class="mb-3">
            <label for="nama_belakang" class="form-label">Nama Belakang</label>
            <input type="text" class="form-control w-50" name = "nama_belakang" id="nama_belakang" placeholder="Slavina">
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">Nama Belakang</label>
            <input type="number" class="form-control w-50" name = "no_hp" id="no_hp" placeholder="081256515737">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="number" class="form-control w-50" name = "alamat" id="alamat" placeholder="081256515737">
        </div>

        <div class="mb-3">
            <label for="id_akses" class="form-label">Id Akses</label>
            <input type="number" class="form-control w-50" name = "id_akses" id="id_akses" placeholder="081256515737">
        </div>

        

        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </form>
      
    </main>
  </div>
</div>

    <script src="../JavaScript/dashboard.js"></script>
</body>
</html>
