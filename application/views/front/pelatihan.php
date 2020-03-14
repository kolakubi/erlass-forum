
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
            <div class="card border-secondary mb-3">
              <div class="card-header">Level 1</div>
                <div class="card-body text-secondary">
                <p class="card-text">Tingkat kesulitan rendah</p>
                <a href="<?php echo base_url() ?>pelatihan/menulispemula/1" class="btn btn-secondary">Ikut Pelatihan</a>
              </div>
            </div>

            <!-- level 2 -->
            <div class="card border-success mb-3">
              <div class="card-header">Level 2</div>
                <div class="card-body text-success">
                <p class="card-text">Tingkat kesulitan Menengah</p>
                <a href="<?php echo base_url() ?>pelatihan/menulispemula/2" class="btn btn-success">Point Belum Cukup <i class="fas fa-lock"></i></a>
              </div>
            </div>

            <!-- level 3 -->
            <div class="card border-primary mb-3">
              <div class="card-header">Level 3</div>
                <div class="card-body text-primary">
                <p class="card-text">Tingkat kesulitan Lumayan</p>
                <a href="<?php echo base_url() ?>pelatihan/menulispemula/3" class="btn btn-primary">Point Belum Cukup <i class="fas fa-lock"></i></a>
              </div>
            </div>

            <!-- level 4 -->
            <div class="card border-danger mb-4">
              <div class="card-header">Level 4</div>
                <div class="card-body text-danger">
                <p class="card-text">Tingkat kesulitan Tinggi</p>
                <a href="<?php echo base_url() ?>pelatihan/menulispemula/4" class="btn btn-danger">Point Belum Cukup <i class="fas fa-lock"></i></a>
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

            <!-- level 2 -->
            <div class="card border-success mb-3">
              <div class="card-header">Level 2</div>
                <div class="card-body text-success">
                <p class="card-text">Tingkat kesulitan Menengah</p>
                <a href="<?php echo base_url() ?>pelatihan/menulisbuku/2" class="btn btn-success">Point Belum Cukup <i class="fas fa-lock"></i></a>
              </div>
            </div>

            <!-- level 3 -->
            <div class="card border-primary mb-3">
              <div class="card-header">Level 3</div>
                <div class="card-body text-primary">
                <p class="card-text">Tingkat kesulitan Lumayan</p>
                <a href="<?php echo base_url() ?>pelatihan/menulisbuku/3" class="btn btn-primary">Point Belum Cukup <i class="fas fa-lock"></i></a>
              </div>
            </div>

            <!-- level 4 -->
            <div class="card border-danger mb-4">
              <div class="card-header">Level 4</div>
                <div class="card-body text-danger">
                <p class="card-text">Tingkat kesulitan Tinggi</p>
                <a href="<?php echo base_url() ?>pelatihan/menulisbuku/4" class="btn btn-danger">Point Belum Cukup <i class="fas fa-lock"></i></a>
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

            <!-- level 2 -->
            <div class="card border-success mb-3">
              <div class="card-header">Level 2</div>
                <div class="card-body text-success">
                <p class="card-text">Tingkat kesulitan Menengah</p>
                <a href="<?php echo base_url() ?>pelatihanexcel/2" class="btn btn-success">Point Belum Cukup <i class="fas fa-lock"></i></a>
              </div>
            </div>

            <!-- level 3 -->
            <div class="card border-primary mb-3">
              <div class="card-header">Level 3</div>
                <div class="card-body text-primary">
                <p class="card-text">Tingkat kesulitan Lumayan</p>
                <a href="<?php echo base_url() ?>pelatihanexcel/3" class="btn btn-primary">Point Belum Cukup <i class="fas fa-lock"></i></a>
              </div>
            </div>

            <!-- level 4 -->
            <div class="card border-danger mb-4">
              <div class="card-header">Level 4</div>
                <div class="card-body text-danger">
                <p class="card-text">Tingkat kesulitan Tinggi</p>
                <a href="<?php echo base_url() ?>pelatihanexcel/4" class="btn btn-danger">Point Belum Cukup <i class="fas fa-lock"></i></a>
              </div>
            </div>

          </div> <!-- end of excel -->

          

  
      </div> <!-- end of row -->
    </div> <!-- end of container -->?
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Pilih pelatihan yang anda inginkan</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
        </div>
      </div>
    </div>
  </section>

