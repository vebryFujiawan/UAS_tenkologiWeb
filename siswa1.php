<?php
session_start();

if( !isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

require 'koneksi.php';
    //koneksi ke database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "dbsmp";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
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
      <a class="navbar-brand" href="#">Selamat Datang ADMIN | <b>SMPN 2 Pendalian IV Koto</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="icon">
            <h5>
                <i class="far fa-envelope mr-3 ml-3" data-toggle="tooltip" title="Surat Masuk"></i>
                <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
                <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign out"></i>
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
            <a class="nav-link text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a><hr class="bg-info">
        </li>
        <li class="nav-item">
            <a class="nav-link active text-white bg-secondary" href="siswa1.php"><i class="fas fa-user-graduate mr-3"></i>Daftar Siswa</a><hr class="bg-info">
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="guru.php"><i class="fas fa-chalkboard-teacher mr-3"></i>Daftar Guru</a><hr class="bg-info">
        </li>
         <li class="nav-item">
            <a class="nav-link text-white" href="mapel.html"><i class="fas fa-calendar-alt mr-3"></i>Mata Pelajaran</a><hr class="bg-info">
        </li>
         <li class="nav-item">
            <a class="nav-link text-white" href="nilai.html"><i class="fas fa-paper-plane mr-3"></i>Nilai Siswa</a><hr class="bg-info">
        </li>
        </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-user-graduate mr-3"></i>DAFTAR SISWA</h3><hr>
            <a href="tambahsiswa.php" class="btn btn-primary"><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA SISWA</a>
            <table class="table table-striped table-bordered mt-4">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NISN</th>
                <th scope="col">NAMA</th>
                <th scope="col">KELAS</th>
                <th scope="col">ALAMAT</th>
                <th colspan="3" scope="col">AKSI</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * from siswa order by id_siswa desc");
            while($data = mysqli_fetch_array($tampil)):
            ?>
            <tr>
              <td class="text-center"><?=$no++;?></td>
              <td><?=$data['NISN']?></td>
              <td><?=$data['Nama']?></td>
              <td><?=$data['Alamat']?></td>
              <td><?=$data['Kelas']?></td>
              <td class="text-center">
                    <a href="tambahsiswa.php?hal=edit&id=<?=$data['id_siswa']?>" class="btn btn-primary btn-sm shadow-sm">Detail</a>
                    <a href="tambahsiswa.php?hal=hapus&id=<?=$data['id_siswa']?>" 
                    <a href="tambahsiswa.php?hal=edit&id=<?=$data['id_siswa']?>"><i class="fas fa-edit bg-warning p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a>
                    <a href="tambahsiswa.php?hal=hapus&id=<?=$data['id_siswa']?>" 
                    onclick="return confirm('apakah anda yakin menghapus data??')"><i class="fas fa-trash-alt badge-danger p-2 text-white rounded" data-toggle="tooltip" title="Hapus"></i></a>
              </td>
            </tr>
            <?php endwhile; ?>
            <!-- <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><a href="" class="btn btn-primary">Detail</a></td>
                <td><i class="fas fa-edit bg-warning p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
                <td><i class="fas fa-trash-alt badge-danger p-2 text-white rounded" data-toggle="tooltip" title="Hapus"></i></td>
                </tr>
            </tbody> -->
            </table>
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
