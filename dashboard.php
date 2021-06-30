<?php

session_start();

if( !isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

require 'koneksi.php';




?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="admin.css" />

    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Halaman Sisfo</title>
  </head>
  <body>
    <!--Bagian Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#"><img src="img/1.png" alt="images" width="32" height="32" class="ml-2 mr-3"><b>| SMPN 2 Pendalian IV Koto</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="icon">
            <h5>
                <i class="far fa-envelope mr-3 ml-3" data-toggle="tooltip" title="Surat Masuk"></i>
                <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
                <a href="logout.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Loguot"></i></a>
            </h5>
        </div>
      </div>
    </nav>
    <!--akhir Navbar-->

    <!--bagian main-->
    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
         <li class="nav-item">
            <h3><a class="nav-link active text-white mb-4" href="#"><i class="fas fa-user mr-3"></i>Admin</a></h3><hr class="bg-info">
        </li>
        <li class="nav-item">
            <a class="nav-link active text-white bg-secondary" href="dashboard.php"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a><hr class="bg-info">
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="siswa1.php"><i class="fas fa-user-graduate mr-3"></i>Daftar Siswa</a><hr class="bg-info">
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="guru.php"><i class="fas fa-chalkboard-teacher mr-3"></i>Daftar Guru</a><hr class="bg-info">
        </li>
         <li class="nav-item">
            <a class="nav-link text-white" href="mapel.php"><i class="fas fa-calendar-alt mr-3"></i>Mata Pelajaran</a><hr class="bg-info">
        </li>
         <li class="nav-item">
            <a class="nav-link text-white" href="nilai.php"><i class="fas fa-paper-plane mr-3"></i>Nilai Siswa</a><hr class="bg-info">
        </li>
        </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-tachometer-alt mr-3"></i>DASHBOARD</h3><hr>
            <div class="row text-white">
                <div class="card bg-info ml-3" style="width: 18rem;">
                <div class="card-body">
                    <div class="card_body_icon">
                        <i class="fas fa-user-graduate mr-3"></i>
                    </div>
                    <h5 class="card-title">JUMLAH SISWA</h5>
                    <div class="display-4">120</div>
                    <a href="#"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
                </div>
                <div class="card bg-success ml-5" style="width: 18rem;">
                <div class="card-body">
                    <div class="card_body_icon">
                        <i class="fas fa-chalkboard-teacher mr-3"></i>
                    </div>
                    <h5 class="card-title">JUMLAH GURU</h5>
                    <div class="display-4">14</div>
                    <a href="#"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="card ml-3 text-white text-center" style="width: 18rem;">
                <div class="card-header bg-danger display-4 pt-4 pb-4">
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-danger">INSTAGRAM</h5>
                    <a href="https://www.instagram.com/smpn2pndln/" class="btn btn-danger">Follow</a>
                </div>
                </div>
            </div>
        </div>
    </div>
     <!--akhir main-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>
