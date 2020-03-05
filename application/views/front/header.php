<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Scrolling Nav - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/bootstrap-scrolling-nav.css">

  <!-- CSS Mal -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/mal.css">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url() ?>">Erlass Forum</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>forum">Forum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>pelatihan">Pelatihan</a>
          </li>

          <!-- jika belum login -->
          <?php if(!$this->session->userdata('level')) : ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>login">Login</a>
          </li>
          <?php else : ?>

          <!-- jika sdh login login -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger">Halo, <?php echo $this->session->userdata('nama') ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>logout">Logout</a>
          </li>
          <?php endif ?>
        </ul>
      </div>
    </div>
  </nav>