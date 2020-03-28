
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

            <?php if(isset($menulispemula)) : ?>
            <p class="text-primary">Kursus diikuti</p>

            <?php else : ?>
              <p class="text-danger">Kamu belum mengikuti kursus ini</p>

            <?php endif ?>

            <div class="card border-primary mb-3">
              <img class="card-img-top" src="<?php echo base_url() ?>asset/img/pelatihan-menulis-pemula-thumb.jpg" alt="pelatihan guru">
              <div class="card-header">Menulis Pemula</div>
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
            <p class="text-danger">Kamu belum mengikuti kursus ini</p>

            <div class="card border-secondary mb-3">
              <img class="card-img-top" src="<?php echo base_url() ?>asset/img/pelatihan-menulis-buku-thumb.jpg" alt="pelatihan guru">
              <div class="card-header">Menulis buku</div>
                <div class="card-body text-secondary">
                <p class="card-text">Tingkat kesulitan rendah</p>
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
                <p class="card-text">Tingkat kesulitan rendah</p>
                <a href="<?php echo base_url() ?>pelatihanmenuliscerpet/1" class="btn btn-secondary">Buka Pelatihan</a>
              </div>
            </div>

          </div> <!-- end of Menulis Cerpen -->

      </div> <!-- end of row -->

      <hr>



    </div> <!-- end of container -->?
  </section>

