
  <header class="bg-primary text-white">
    <div class="container text-left" style="padding: 50px 5px">
      <h1>Pelatihan</h1>
      <p class="lead">Pilih pelatihan yang anda inginkan</p>
    </div>
  </header>

  <section id="about">
    <div class="container">


      <!-- error point belum cukup -->
      <?php if($point) : ?>
      <div class="card text-white bg-danger mb-3 text-center">
        <div class="card-header">Perhatian</div>
        <div class="card-body">
        <h5 class="card-title">Maaf point kamu belum cukup untuk level tersebut</h5>
        <p class="card-text">Tingkatkan terus point mu</p>
        </div>
      </div>
      <br>
      <?php endif ?>


       <!-- PELATIHAN MENULIS -->
      <div class="card mb-5">
        <div class="card-header">
          <h2 class="text-primary text-center font-weight-bold">Menulis</h2>
        </div>
      
        <div class="row mt-4 mb-4 pl-4 pr-4">

            <!-- Menulis Pemula -->
            <div class="col-md-4 text-center">

              <?php if(isset($menulispemula)) : ?>
                <p class="text-primary">Kursus diikuti</p>
              <?php else : ?>
                <p class="text-danger">Kamu belum mengikuti kursus ini</p>
              <?php endif ?>

              <div class="card border-primary mb-3">
                <img class="card-img-top" src="<?php echo base_url() ?>asset/img/pelatihan-menulis-pemula-thumb.jpg" alt="pelatihan guru">
                <div class="card-header">Menulis Pemula</div>
                  <div class="card-body text-primary">

                  <!-- jika sudah mengikuti -->
                  <?php if(isset($menulispemula)) : ?>
                    <a href="<?php echo base_url() ?>pelatihan/menulispemula/1" class="btn btn-primary">Ikut Pelatihan</a>
                  <?php else : ?>
                  <!-- jika belum mengikuti -->
                    <a href="<?php echo base_url() ?>pelatihan/ikut/mp" class="btn btn-secondary">Buka Pelatihan <i class="fa fa-lock"></i></a>
                  <?php endif ?>
                </div>
              </div>
            </div> <!-- end of menulis pemula -->



            <!-- Menulis buku -->
            <div class="col-md-4 text-center">
              <p class="text-danger">Kamu belum mengikuti kursus ini</p>

              <div class="card border-secondary mb-3">
                <img class="card-img-top" src="<?php echo base_url() ?>asset/img/pelatihan-menulis-buku-thumb.jpg" alt="pelatihan guru">
                <div class="card-header">Menulis buku</div>
                  <div class="card-body text-secondary">
                  <a href="<?php echo base_url() ?>pelatihan/menulisbuku/1" class="btn btn-secondary">Buka Pelatihan</a>
                </div>
              </div>
            </div> <!-- end of menulis buku -->



            <!-- Menulis Cerpen -->
            <div class="col-md-4 text-center">
              <p class="text-danger">Kamu belum mengikuti kursus ini</p>

              <div class="card border-secondary mb-3">
                <img class="card-img-top" src="<?php echo base_url() ?>asset/img/pelatihan-menulis-cerpen-thumb.jpg" alt="pelatihan guru">
                <div class="card-header">Menulis Cerpen</div>
                  <div class="card-body text-secondary">
                  <a href="<?php echo base_url() ?>pelatihanmenuliscerpet/1" class="btn btn-secondary">Buka Pelatihan</a>
                </div>
              </div>
            </div> <!-- end of Menulis Cerpen -->

        </div> <!-- end of row -->

      </div> <!-- end of card --> 
      <!------------------------------- END OF PELATIHAN MENULIS ------------------------------->




      <!-- PELATIHAN VIDEO MENGAJAR -->
      <div class="card">
        <div class="card-header">
          <h2 class="text-primary text-center font-weight-bold">Video Mengajar</h2>
        </div>

        <div class="row mt-4 mb-4 pl-4 pr-4">

            <!-- Youtube Part I -->
            <div class="col-md-4 text-center">
              <p class="text-danger">Kamu belum mengikuti kursus ini</p>

              <div class="card border-secondary mb-3">
                <img class="card-img-top" src="<?php echo base_url() ?>asset/img/pelatihan-youtube-1-thumb.jpg" alt="pelatihan guru">
                <div class="card-header">Youtube Part I</div>
                  <div class="card-body text-secondary">
                  
                  <!-- jika sudah mengikuti -->
                  <?php if(isset($youtubepart1)) : ?>
                    <a href="<?php echo base_url() ?>pelatihan/yt1/1" class="btn btn-primary">Ikut Pelatihan</a>
                  <?php else : ?>
                  <!-- jika belum mengikuti -->
                    <a href="<?php echo base_url() ?>pelatihan/ikut/yt1" class="btn btn-secondary">Buka Pelatihan <i class="fa fa-lock"></i></a>
                  <?php endif ?>

                </div> <!-- end of card-header -->
              </div> <!-- end of card -->
            </div> <!-- end of Youtube Part I -->        


            <!-- Youtube Part II -->
            <div class="col-md-4 text-center">
              <p class="text-danger">Kamu belum mengikuti kursus ini</p>

              <div class="card border-secondary mb-3">
                <img class="card-img-top" src="<?php echo base_url() ?>asset/img/pelatihan-youtube-2-thumb.jpg" alt="pelatihan guru">
                <div class="card-header">Youtube Part II</div>
                  <div class="card-body text-secondary">
                  <a href="#" class="btn btn-secondary">Buka Pelatihan</a>

                </div> <!-- end of card-header -->
              </div> <!-- end of card -->
            </div> <!-- end of Youtube Part II -->


            <!-- Youtube Part III -->
            <div class="col-md-4 text-center">
              <p class="text-danger">Kamu belum mengikuti kursus ini</p>

              <div class="card border-secondary mb-3">
                <img class="card-img-top" src="<?php echo base_url() ?>asset/img/pelatihan-youtube-3-thumb.jpg" alt="pelatihan guru">
                <div class="card-header">Youtube Part III</div>
                  <div class="card-body text-secondary">
                  <a href="#" class="btn btn-secondary">Buka Pelatihan</a>

                </div> <!-- end of card-header -->
              </div> <!-- end of card -->
            </div> <!-- end of Youtube Part III --> 

            
        </div> <!-- end of row -->
      </div> <!-- end of card -->
      <!------------------------------- END OF PELATIHAN VIDEO MENGAJAR ------------------------------->



    </div> <!-- end of container -->?
  </section>

