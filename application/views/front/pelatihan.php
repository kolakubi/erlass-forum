
  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome to Scrolling Nav</h1>
      <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
    </div>
  </header>

  <section id="about">
    <div class="container">


      <!-- error point belum cukup -->
      <?php if($point) : ?>
      <div class="pesan-error-form user">
        <span>Maaf point kamu belum cukup untuk level tersebut</span>
        <br>
        <span>Tingkatkan terus point mu</span>
      </div>
      <br>
      <?php endif ?>

      <div class="row">

          <!-- Menulis Pemula -->
          <div class="col-md-4 text-center">
            <h2>Menulis Pemula</h2>

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
                <a href="<?php echo base_url() ?>pelatihan/menulispemula/2" class="btn btn-success">Ikut Pelatihan</a>
              </div>
            </div>

            <!-- level 3 -->
            <div class="card border-primary mb-3">
              <div class="card-header">Level 3</div>
                <div class="card-body text-primary">
                <p class="card-text">Tingkat kesulitan Lumayan</p>
                <a href="<?php echo base_url() ?>pelatihan/menulispemula/3" class="btn btn-primary">Ikut Pelatihan</a>
              </div>
            </div>

            <!-- level 4 -->
            <div class="card border-danger mb-4">
              <div class="card-header">Level 4</div>
                <div class="card-body text-danger">
                <p class="card-text">Tingkat kesulitan Tinggi</p>
                <a href="<?php echo base_url() ?>pelatihan/menulispemula/4" class="btn btn-danger">Ikut Pelatihan</a>
              </div>
            </div>

          </div> <!-- end of menulis pemula -->



          <!-- Menulis buku -->
          <div class="col-md-4 text-center">
            <h2>Menulis buku</h2>

            <!-- level 1 -->
            <div class="card border-secondary mb-3">
              <div class="card-header">Level 1</div>
                <div class="card-body text-secondary">
                <p class="card-text">Tingkat kesulitan rendah</p>
                <a href="<?php echo base_url() ?>pelatihan/menulisbuku/1" class="btn btn-secondary">Ikut Pelatihan</a>
              </div>
            </div>

            <!-- level 2 -->
            <div class="card border-success mb-3">
              <div class="card-header">Level 2</div>
                <div class="card-body text-success">
                <p class="card-text">Tingkat kesulitan Menengah</p>
                <a href="<?php echo base_url() ?>pelatihan/menulisbuku/2" class="btn btn-success">Ikut Pelatihan</a>
              </div>
            </div>

            <!-- level 3 -->
            <div class="card border-primary mb-3">
              <div class="card-header">Level 3</div>
                <div class="card-body text-primary">
                <p class="card-text">Tingkat kesulitan Lumayan</p>
                <a href="<?php echo base_url() ?>pelatihan/menulisbuku/3" class="btn btn-primary">Ikut Pelatihan</a>
              </div>
            </div>

            <!-- level 4 -->
            <div class="card border-danger mb-4">
              <div class="card-header">Level 4</div>
                <div class="card-body text-danger">
                <p class="card-text">Tingkat kesulitan Tinggi</p>
                <a href="<?php echo base_url() ?>pelatihan/menulisbuku/4" class="btn btn-danger">Ikut Pelatihan</a>
              </div>
            </div>

          </div> <!-- end of menulis buku -->



          <!-- excel -->
          <div class="col-md-4 text-center">
            <h2>excel</h2>

            <!-- level 1 -->
            <div class="card border-secondary mb-3">
              <div class="card-header">Level 1</div>
                <div class="card-body text-secondary">
                <p class="card-text">Tingkat kesulitan rendah</p>
                <a href="<?php echo base_url() ?>pelatihanexcel/1" class="btn btn-secondary">Ikut Pelatihan</a>
              </div>
            </div>

            <!-- level 2 -->
            <div class="card border-success mb-3">
              <div class="card-header">Level 2</div>
                <div class="card-body text-success">
                <p class="card-text">Tingkat kesulitan Menengah</p>
                <a href="<?php echo base_url() ?>pelatihanexcel/2" class="btn btn-success">Ikut Pelatihan</a>
              </div>
            </div>

            <!-- level 3 -->
            <div class="card border-primary mb-3">
              <div class="card-header">Level 3</div>
                <div class="card-body text-primary">
                <p class="card-text">Tingkat kesulitan Lumayan</p>
                <a href="<?php echo base_url() ?>pelatihanexcel/3" class="btn btn-primary">Ikut Pelatihan</a>
              </div>
            </div>

            <!-- level 4 -->
            <div class="card border-danger mb-4">
              <div class="card-header">Level 4</div>
                <div class="card-body text-danger">
                <p class="card-text">Tingkat kesulitan Tinggi</p>
                <a href="<?php echo base_url() ?>pelatihanexcel/4" class="btn btn-danger">Ikut Pelatihan</a>
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

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Contact us</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
        </div>
      </div>
    </div>
  </section>

