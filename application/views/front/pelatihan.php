
  <header class="bg-primary text-white">
    <div class="container text-center" style="padding: 50px 5px">
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

      <div class="row">

          <!-- Menulis Pemula -->
          <div class="col-md-4 text-center">
            <h2>Menulis Pemula</h2>
            <p class="text-primary">Kursus diikuti</p>

            <!-- level 1 -->
            <div class="card border-primary mb-3">
              <div class="card-header">Level 1</div>
                <div class="card-body text-primary">
                <p class="card-text">Tingkat kesulitan rendah</p>

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
            <h2>Menulis buku</h2>
            <p class="text-danger">Kamu belum mengikuti kursus ini</p>

            <!-- level 1 -->
            <div class="card border-secondary mb-3">
              <div class="card-header">Level 1</div>
                <div class="card-body text-secondary">
                <p class="card-text">Tingkat kesulitan rendah</p>
                <a href="<?php echo base_url() ?>pelatihan/menulisbuku/1" class="btn btn-secondary">Buka Pelatihan</a>
              </div>
            </div>

          </div> <!-- end of menulis buku -->



          <!-- excel -->
          <div class="col-md-4 text-center">
            <h2>Excel</h2>
            <p class="text-danger">Kamu belum mengikuti kursus ini</p>

            <!-- level 1 -->
            <div class="card border-secondary mb-3">
              <div class="card-header">Level 1</div>
                <div class="card-body text-secondary">
                <p class="card-text">Tingkat kesulitan rendah</p>
                <a href="<?php echo base_url() ?>pelatihanexcel/1" class="btn btn-secondary">Buka Pelatihan</a>
              </div>
            </div>

          </div> <!-- end of excel -->

      </div> <!-- end of row -->

      <hr>

      <div class="row">

        <!-- Menulis Pemula -->
        <div class="col-md-4 text-center">
          <h2>Menulis Pemula</h2>
          <p class="text-danger">Kamu belum mengikuti kursus ini</p>

          <!-- level 1 -->
          <div class="card border-secondary mb-3">
            <div class="card-header">Level 1</div>
              <div class="card-body text-secondary">
              <p class="card-text">Tingkat kesulitan rendah</p>
              <a href="<?php echo base_url() ?>pelatihan/menulispemula/1" class="btn btn-secondary">Ikut Pelatihan</a>
            </div>
          </div>

        </div> <!-- end of menulis pemula -->



        <!-- Menulis buku -->
        <div class="col-md-4 text-center">
          <h2>Menulis buku</h2>
          <p class="text-danger">Kamu belum mengikuti kursus ini</p>

          <!-- level 1 -->
          <div class="card border-secondary mb-3">
            <div class="card-header">Level 1</div>
              <div class="card-body text-secondary">
              <p class="card-text">Tingkat kesulitan rendah</p>
              <a href="<?php echo base_url() ?>pelatihan/menulisbuku/1" class="btn btn-secondary">Buka Pelatihan</a>
            </div>
          </div>

        </div> <!-- end of menulis buku -->



        <!-- excel -->
        <div class="col-md-4 text-center">
          <h2>Excel</h2>
          <p class="text-danger">Kamu belum mengikuti kursus ini</p>

          <!-- level 1 -->
          <div class="card border-secondary mb-3">
            <div class="card-header">Level 1</div>
              <div class="card-body text-secondary">
              <p class="card-text">Tingkat kesulitan rendah</p>
              <a href="<?php echo base_url() ?>pelatihanexcel/1" class="btn btn-secondary">Buka Pelatihan</a>
            </div>
          </div>

        </div> <!-- end of excel -->

      </div> <!-- end of row -->



    </div> <!-- end of container -->?
  </section>

