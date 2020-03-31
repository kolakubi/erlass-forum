<!DOCTYPE html>
<html>

    <head>
        <title>Erlass Forum</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    
        
        <!-- Custom styles for this template-->
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap-modif-min.css">

        <!-- Font Awesome-->
        <link href="<?php echo base_url() ?>asset/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- CSS Mal -->
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/mal.css">

    </head>

    <body class="">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <!-- gambar -->
              <div class="col-lg-6 d-none d-lg-block" style="background-image: url('<?php echo base_url() ?>asset/img/login-image.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>


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
                      <button type="submit" class="btn btn-primary btn-user btn-block"><i class="fas fa-lock"></i> Login</button>
                    </div>
                    <div class="form-group">
                      <a href="<?php echo base_url() ?>" class="btn btn-danger btn-user btn-block" style="color: white"><i class="fas fa-home"></i> Home</a>
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