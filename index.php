<?php
require 'function.php';
require 'cek.php';

//get data
//ambil data dokter
$get1 = mysqli_query($conn,"SELECT * from dokter");
$hitung1= mysqli_num_rows($get1); //Hitung jumlah kolom

//ambil data Obat
$get2 = mysqli_query($conn,"SELECT * from obat");
$hitung2= mysqli_num_rows($get2); //Hitung jumlah kolom

//ambil data Pasien
$get3 = mysqli_query($conn,"SELECT * from pasien");
$hitung3= mysqli_num_rows($get3); //Hitung jumlah kolom


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dasboard</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">klinik_312010271</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>


    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tv" style="font-size:40px;color:hotpink;"></i></div>
                            Dasboard
                        </a>
                        <a class="nav-link" href="dokter.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-md" style="font-size:40px;color:greenyellow;"></i></div>
                            Dokter
                        </a>
                        <a class="nav-link" href="pasien.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-injured" style="font-size:40px;color:red"></i></div>
                            Pasien
                        </a>
                        <a class="nav-link" href="obat.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-capsules" style="font-size:40px;color:whitesmoke;"></i></div>
                            Obat
                        </a>
                        <a class="nav-link" href="rekammedis.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-cannabis" style="font-size:40px;color:purple;"></i></div>
                            Rekam Medis
                        </a>
                        <a class="nav-link" href="user.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-poo" style="font-size:40px;color:rosybrown;"></i></div>
                            User 
                        </a>
                        <a class="nav-link" href="Logout.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-swimmer" style="font-size:40px;color:yellow;"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <div class="container">
              <h2>Dashboard</h2>
              <p>SELAMAT DATANG DI KLINIK RADEN KODRAT</p>
              <p><strong>Note:</strong>Ini adalah tampilan data jumlah dari data ...</p>
              <div class="card-columns">
                <div class="card bg-primary">
                    <div class="card-body text-center">
                       <i class="fas fa-user-md" style="font-size:40px;color:greenyellow;"></i>
                       <br>
                       <p class="card-text text-white">Total Dokter <?=$hitung1;?></p>
                   </div>
               </div>
           <!--  <div class="card bg-warning">
              <div class="card-body text-center">
                <p class="card-text"></p>
            </div>
        </div> -->
        <div class="card bg-success">
            <div class="card-body text-center">
                <i class="fas fa-user-injured" style="font-size:40px;color:red"></i>
                <br>
                <p class="card-text text-white">Total Pasien <?=$hitung3;?></p>
            </div>
        </div>
   <!--  <div class="card bg-danger">
      <div class="card-body text-center">
        <p class="card-text">hhhhh</p>
    </div>
</div>   -->
<div class="card bg-warning">
    <div class="card-body text-center">
        <i class="fas fa-capsules" style="font-size:40px;color:whitesmoke;"></i>
        <br>
        <p class="card-text text-white">Total Obat <?=$hitung2;?></p>
    </div>
</div>
<!-- <div class="card bg-info">
  <div class="card-body text-center">
    <p class="card-text">Some text inside the sixth card</p>
</div>
</div> -->
</div>
</div>


</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
</body>
</html>
