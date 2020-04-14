
  <?php $warna = "" ?>
  
  <header class="bg-primary text-white">
    <div class="container text-center" style="padding: 50px 5px">
      <h1>Pilih Lv Pelatihan</h1>
      <p class="lead">Pilih pelatihan yang anda inginkan</p>
      <p>Total Point Anda: <?php echo $totalpoint ?></p>
    </div>
  </header>

  <section id="about">
    <div class="container">
        <div class="row">

            <div class="col-md-4 text-center offset-md-4">
                <h2>Menulis Pemula</h2>
                
                <!-- level 1 -->
                <!-- setting warna -->
                <?php $warna = $statuspelatihan['openlv1'] ? "primary" : "secondary"; ?>

                <div class="card border-<?php echo $warna ?> mb-3">
                    <div class="card-header">Level 1</div>

                    <?php if($statuspelatihan['openlv1']) : ?>
                    <div class="card-header">Level Terbuka <i class="fas fa-star" style="color: yellow"></i></div>
                    <?php else : ?>
                    <div class="card-header">Level Belum Terbuka</div>
                    <?php endif ?>

                    <div class="card-body text-<?php echo $warna ?>">
                    <p class="card-text">Tingkat kesulitan rendah</p>

                    <!-- jika point cukup -->
                    <?php if($pointcukup['level1']) : ?>

                        <!-- jika sudah terbuka -->
                        <?php if($statuspelatihan['openlv1']) : ?>
                        <a href="<?php echo base_url() ?>pilihlevel/level/1" class="btn btn-<?php echo $warna ?>">Ikut Pelatihan</a>

                        <?php else : ?>
                        <!-- jika belum terbuka -->
                        <a href="<?php echo base_url() ?>pelatihan/ikut/mp" class="btn btn-<?php echo $warna ?>">Buka Pelatihan <i class="fa fa-lock"></i></a>

                        <?php endif ?>
                    
                    <!-- jika point belum cukup -->
                    <?php else : ?>

                        <a class="btn btn-<?php echo $warna ?>">Point Belum Cukup <i class="fa fa-lock"></i></a>

                    <?php endif ?>

                </div> <!-- end of level 1 -->
            </div> <!-- end of col-md-4 -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->




    <!-- level 2 -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center offset-md-4">
                
                
                <!-- setting warna -->
                <?php $warna = $statuspelatihan['openlv2'] ? "primary" : "secondary"; ?>

                <div class="card border-<?php echo $warna ?> mb-3">
                    <div class="card-header">Level 2</div>

                    <?php if($statuspelatihan['openlv2']) : ?>
                    <div class="card-header">Level Terbuka <i class="fas fa-star" style="color: yellow"></i></div>
                    <?php else : ?>
                    <div class="card-header">Level Belum Terbuka</div>
                    <?php endif ?>

                    <div class="card-body text-<?php echo $warna ?>">
                    <p class="card-text">Tingkat kesulitan rendah</p>

                    <!-- jika point cukup -->
                    <?php if($pointcukup['level2']) : ?>

                        <!-- jika sudah terbuka -->
                        <?php if($statuspelatihan['openlv2']) : ?>
                        <a href="<?php echo base_url() ?>pilihlevel/level/2" class="btn btn-<?php echo $warna ?>">Ikut Pelatihan</a>

                        <?php else : ?>
                        <!-- jika belum terbuka -->
                        <a href="<?php echo base_url() ?>pelatihan/menulispemula/2" class="btn btn-<?php echo $warna ?>">Buka Level <i class="fa fa-lock"></i></a>

                        <?php endif ?>

                    <!-- jika point belum cukup -->
                    <?php else : ?>

                        <a class="btn btn-<?php echo $warna ?>" style="color: white;">Point Belum Cukup <i class="fa fa-lock"></i></a>

                    <?php endif ?>

                </div> <!-- end of level 2 -->
            </div> <!-- end of col-md-4 -->
        </div> <!-- end of row -->
    </div> <!-- end of level 2 -->





    <!-- level 3 -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center offset-md-4">
                
                <!-- setting warna -->
                <?php $warna = $statuspelatihan['openlv3'] ? "primary" : "secondary"; ?>

                <div class="card border-<?php echo $warna ?> mb-3">
                    <div class="card-header">Level 3</div>

                    <?php if($statuspelatihan['openlv3']) : ?>
                    <div class="card-header">Level Terbuka <i class="fas fa-star" style="color: yellow"></i></div>
                    <?php else : ?>
                    <div class="card-header">Level Belum Terbuka</div>
                    <?php endif ?>

                    <div class="card-body text-<?php echo $warna ?>">
                    <p class="card-text">Tingkat kesulitan rendah</p>

                    <!-- jika point cukup -->
                    <?php if($pointcukup['level3']) : ?>

                        <!-- jika sudah terbuka -->
                        <?php if($statuspelatihan['openlv3']) : ?>
                        <a href="<?php echo base_url() ?>pilihlevel/level/3" class="btn btn-<?php echo $warna ?>">Ikut Pelatihan</a>

                        <?php else : ?>
                        <!-- jika belum terbuka -->
                        <a href="<?php echo base_url() ?>pelatihan/ikut/mp" class="btn btn-<?php echo $warna ?>">Buka Level <i class="fa fa-lock"></i></a>

                        <?php endif ?>
                        
                    <!-- jika point belum cukup -->
                    <?php else : ?>

                        <a class="btn btn-<?php echo $warna ?>" style="color: white;">Point Belum Cukup <i class="fa fa-lock"></i></a>

                    <?php endif ?>

                </div> <!-- end of level 3 -->
            </div> <!-- end of col-md-4 -->
        </div> <!-- end of row -->
    </div> <!-- end of level 2 -->





  </section>

