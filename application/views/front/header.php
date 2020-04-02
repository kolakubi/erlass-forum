<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Squadfree Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>asset/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ?>asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- font awesome -->
  <link href="<?php echo base_url() ?>asset/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v2.0.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-scrolled">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?php echo base_url() ?>"><span style="color: black">Erlass</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="<?php echo base_url() ?>pelatihan">Pelatihan</a></li>


          <!-- jika belum login -->
          <?php if(!$this->session->userdata('level')) : ?>
          <li>
            <a href="<?php echo base_url() ?>login">Login</a>
          </li>
          <?php else : ?>

          <!-- jika sdh login login -->
          <li class="drop-down">
            <a class="nav-link js-scroll-trigger">Halo, <?php echo $this->session->userdata('nama') ?></a>
            <ul>
              <li>
                <a href="<?php echo base_url() ?>member">Dashboard</a>
              </li>
              <li>
                <a href="<?php echo base_url() ?>logout">Logout</a>
              </li>
            </ul>
          </li>
          <?php endif ?>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

<div style="padding: 15px 0">-</div>