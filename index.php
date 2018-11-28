<?php
require_once 'config/config.php';
require_once 'config/connection.php';
include('models/admin.php');
$obj = new Connection($host, $user, $pass, $db);
$objAdmin = new Admin($obj);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/datatables.min.css"/>

    <script src="<?php echo base_url(); ?>assets/jquery-3.1.1.min.js"></script>

    <script src="<?= base_url()?>assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/datatables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  </head>
  <body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-white">
      <a class="navbar-brand ">
        <img class="nameHeader" src="<?= base_url()?>assets/image/image.jpg" width="60" height="60" class="d-inline-block align-top " alt="">
        <div class="nameHeader" style="text-align: center;width: 1200px; ">
            <h2>
              MTS Sultan Suriansyah Banjarmasin
            </h2>
        </div>
      </a>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-danger">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-white" href="?view=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="">Profile</a>
            </li>
            <?php if (@$_SESSION['user'] || @$_SESSION['NIS'] || @$_SESSION['NIP'] ) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data
              </a>
              <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                <?php if (@$_SESSION['NIP']) { ?>
                <a class="dropdown-item" href="?view=data-guru">Data Guru</a>
              <?php }elseif (@$_SESSION['NIS'] ) { ?>
                <a class="dropdown-item" href="?view=data-siswa">Data Siswa</a>
                <?php } ?>
                <a class="dropdown-item" href="?view=input-kegiatan">Data Kegiatan</a>
                <a class="dropdown-item" href="?view=input-dokument">Data Dokumen</a>
                <?php if (@$_SESSION['user']) { ?>
                <a class="dropdown-item" href="?view=jenis-kegiatan">Input Jenis Kegiatan</a>
                <a class="dropdown-item" href="?view=jenis-dokument">Input Jenis Dokument</a>
                <a class="dropdown-item" href="?view=data-guru">Data Guru</a>
                <a class="dropdown-item" href="?view=data-siswa">Data Siswa</a>

                <?php } ?>
              </div>
            </li>
          <?php } ?>
            <?php if (!@$_SESSION['NIS'] && !@$_SESSION['NIP'] && !@$_SESSION['user']  ) { ?>
            <li class="nav-item">
                <!-- <a class="nav-link" href="?view=logout-admin">Log Out</a> -->
                <a class="nav-link text-white" href="?view=login-siswa">Login Siswa</a>
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link" href="?view=logout-admin">Log Out</a> -->
                <a class="nav-link text-white" href="?view=login-guru">Login Guru</a>
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link" href="?view=logout-admin">Log Out</a> -->
                <a class="nav-link text-white" href="?view=login-admin">Login Admin</a>
            </li>
            <?php } ?>
            <?php if (@$_SESSION['user'] || @$_SESSION['NIS'] || @$_SESSION['NIP'] ) { ?>
              <li class="nav-item">
                  <a class="nav-link text-white" href="?view=logout-admin">Logout</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </nav>

    <?php include('page/page.php'); ?>

  </body>

  <script type="text/javascript">
      $(document).ready( function () {
        $('#table').DataTable();
      } );
  </script>


</html>
