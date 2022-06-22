<?php
    if($this->session->userdata('level')===null):
        redirect(base_url());
    endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/datatables/datatables.min.css')?>">
    <!-- Script -->
    <script src="<?= base_url('assets/js/jquery.min.js')?>"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Blog Daniel</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin/index') ?>">
            <i class="fa fa-dashboard"></i>
            Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-book"></i>
            Kelola Artikel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kelola_kategori') ?>">
            <i class="fa fa-list"></i>
            Kelola Kategori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="class fa fa-comment"></i>
            Kelola Komentar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="class fa fa-pencil"></i>
            Kelola Content Creator</a>
      </li>
    </ul>
    <span class="navbar-text">
        <a href="<?= base_url('logout') ?>" class="text text-danger">
            <i class="class fa fa-power-off"></i>
            Logout
        </a>
    </span>
  </div>

</nav>