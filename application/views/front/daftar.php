<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Font Awesome-->
  <link href="<?php echo base_url() ?>asset/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap-modif-min.css">

  <!-- CSS Mal -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/mal.css">

</head>

<body class="">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <!-- gambar gede -->
          <div class="col-lg-5 d-none d-lg-block" style="background-image: url('<?php echo base_url() ?>asset/img/daftar-image.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>


          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar member</h1>
              </div>

              <!-- mulai form -->
              <?php echo form_open('daftar/validasi', ['class'=>'user']) ?>

                <!-- email -->
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleFirstName" placeholder="Email..." name="email">

                    <div class="pesan-error-form user">
                      <span><?php echo form_error('email') ?></span>
                    </div>
                </div>

                <!-- error jika email sudah dipakai -->
                <?php if($email) : ?>
                <div class="pesan-error-form user">
                  <span>Email sudah terdaftar</span>
                </div>
                <?php endif ?>
                <br>

                <!-- password -->
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">

                    <div class="pesan-error-form user">
                      <span><?php echo form_error('password') ?></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="repeatpassword">

                    <div class="pesan-error-form user">
                      <span><?php echo form_error('repeatpassword') ?></span>
                    </div>
                  </div>
                </div>

                <!-- error jika password berbeda -->
                <?php if($password) : ?>
                <div class="pesan-error-form user">
                  <span>Password harus sama</span>
                </div>
                <?php endif ?>

                <br>

                <!-- nama -->
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Nama..." name="nama">

                  <div class="pesan-error-form user">
                    <span><?php echo form_error('nama') ?></span>
                  </div>
                </div>

                <!-- nomor induk -->
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Nomor Induk Guru..." name="nomorinduk">

                  <div class="pesan-error-form user">
                    <span><?php echo form_error('nomorinduk') ?></span>
                  </div>
                </div>

                <!-- alamat -->
                <div class="form-group">
                  <textarea rows="4" cols="50" class="form-control form-control-user" placeholder="Alamat..." name="alamat"></textarea>

                  <div class="pesan-error-form user">
                    <span><?php echo form_error('alamat') ?></span>
                  </div>
                </div>

                <!-- sekolah -->
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Guru di...(Misal: SMPN 1 Jakarta)" name="sekolah">

                  <div class="pesan-error-form user">
                        <span><?php echo form_error('sekolah') ?></span>
                      </div>
                </div>

                <!-- hp -->
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Nomor HP..." name="hp">

                  <div class="pesan-error-form user">
                    <span><?php echo form_error('hp') ?></span>
                  </div>
                </div>

                <!-- btn submit -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-user btn-block"><i class="fas fa-edit"></i> Daftar</button>
                  </div>
                <?php echo form_close() ?>
                <hr>
                
              <!-- </form> -->
              <hr>
              
              <div class="text-center">
                <a class="small" href="<?php echo base_url() ?>login">Sudah punya akun? Login!</a>
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
