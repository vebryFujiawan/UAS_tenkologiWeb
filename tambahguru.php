<?php
session_start();

if( !isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

$server = "localhost";
    $user = "root";
    $pass = "";
    $database = "dbsmp";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

    //koneksi ke database
    include ('koneksi.php');

    //jika tombol simpan diklik
    if(isset($_POST['bsimpan'])){
        $simpan = mysqli_query($koneksi, "INSERT INTO guru (NIK, nama, status, jabatan)
                                VALUES ('$_POST[tnik]',
                                '$_POST[tnama]',
                                '$_POST[tstatus]',
                                '$_POST[tjabatan]')
                                ");
        if($simpan){
            echo "<script>
                alert('Data Berhasil di Simpan');
                document.location='guru.php';
            </script>";
        }else {
             echo "<script>
                alert('Data Gagal di Simpan');
                document.location='guru.php';
            </script>";
        }
    }
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
            <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a><hr class="bg-info">
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="siswa1.php"><i class="fas fa-user-graduate mr-3"></i>Daftar Siswa</a><hr class="bg-info">
        </li>
        <li class="nav-item">
            <a class="nav-link text-white bg-secondary" href="guru.php"><i class="fas fa-chalkboard-teacher mr-3"></i>Daftar Guru</a><hr class="bg-info">
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
            <h3><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA GURU</h3><hr>
            <div class="card mt-3">
            <div class="card-header bg-success text-white shadow-sm">
                Silahkan Input Data Siswa
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="tnik" value="<?=@$vnik?>" class="form-control" placeholder="Masukan NIK disini!!" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Masukan Nama disini!!" required>
                    </div>
                     <div class="form-group">
                        <label>Status</label>
                    <select name="tstatus" class="form-control">
                            <option value="<?=@$vstatus?>"><?=@$vstatus?></option>
                            <option value="PNS">PNS</option>
                            <option value="GTT">GTT</option>
                            <option value="Honor">Honor</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="tjabatan" value="<?=@$vjabatan?>" class="form-control" placeholder="Masukan Jabatan disini!!" required>
                    </div>
                    <button type="submit" class="btn btn-success shadow-sm" name="bsimpan">Simpan</button>
                    <button type="reset" class="btn btn-danger shadow-sm" name="breset">Reset</button>
                </form>
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
