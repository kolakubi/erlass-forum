<!DOCTYPE html>
<html>

    <head>
        <title>Erlass Forum</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    
        
        <!-- Custom styles for this template-->
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/css/bootstrap-modif-min.css">

        <!-- CSS Mal -->
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/mal.css">

    </head>

    <body class="bg-gradient-primary">

  <div class="container">

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

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                  </div>


                  <!-- notif daftar berhasil -->
                  <?php if($daftar) : ?>
                  <div class="pesan-sukses-form user">
                    <span>Pendafratan berhasil, silakan login</span>
                  </div>
                  <br>
                  <?php endif ?>

                  <!-- notif gagal login -->
                  <?php if($gagal) : ?>
                    <p class="text-center" style="color: white; background-color: #f44242"><?php echo 'email atau Password salah' ?></p>
                  <?php endif ?>
                  <?php echo form_open('login/validasi', ['class'=>'user']) ?>

                  <!-- input email -->
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" name="email">

                      <div class="pesan-error-form user">
                        <span style="color: white;"><?php echo form_error('email') ?></span>
                      </div>

                    </div>

                  <!-- input password -->
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">

                      <div class="pesan-error-form user">
                        <span style="color: white;"><?php echo form_error('password') ?></span>
                      </div>

                    </div>
                    
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    
                    <!-- btn submit -->
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    </div>
                  <?php echo form_close() ?>
                  <!-- end of form -->

                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url() ?>daftar">Buat Akun</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>asset/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>asset/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>asset/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>asset/js/sb-admin-2.min.js"></script>

</body>

</html>