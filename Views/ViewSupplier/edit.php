<?php
    // Import Semua Class yang Dibutuhkan
    require_once '../../Classes/Supplier.php';
    $supplier = new Supplier();
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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><?= $supplier->className()?></a>
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
        <h1 class="h2">Edit <?= $supplier->className() ?></h1>
      </div>

      <form action="?action=update" method="POST">
        <div class="mb-3">
            <label for="id_supplier" class="form-label">Id Supplier</label>
            <input type="text" class="form-control w-50" name="id_supplier" id="id_supplier" placeholder="S001">
        </div>

        <div class="mb-3">
            <label for="nama_supplier" class="form-label">Nama Supplier</label>
            <input type="text" class="form-control w-50" name="nama_supplier" id="nama_supplier" placeholder="Toko Jaya">
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="number" class="form-control w-50" name="no_hp" id="no_hp" placeholder="03124568698">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control w-50" name="alamat" id="alamat" placeholder="Jalan Pattimura">
        </div>

        <div class="mb-3">
            <label for="id_pembelian" class="form-label">Id Pembelian</label>
            <input type="text" class="form-control w-50" name="id_pembelian" id="id_pembelian" placeholder="PB1">
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </form>
      
    </main>
  </div>
</div>

    <script src="../JavaScript/dashboard.js"></script>
</body>
</html>
