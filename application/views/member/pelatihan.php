    <!-- Begin Page Content -->
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Level</h1>
          <p class="mb-4">Kumpulkan terus point mu dan menangkan reward.</p>
        
        <div class="row">
            
            
            <!-- jika ada pelatihan menulis pemula -->
            <?php if($pelatihan['menulispemula']) : ?>
            <!-- Menulis Pemula -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Menulis Pemula</div>
                        <!-- <div class="h5 mb-0 font-weight-bold text-gray-800 mb-1">Level 2</div> -->
                        <p class="card-text">Point <strong class="text-primary"><?php echo $pelatihan['pointmenulispemula'] ?></strong></p>

                        <!-- tombol pelatihan -->
                        <a href="<?php echo base_url() ?>pelatihan" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                            <i class="fa fa-star"></i>
                            </span>
                            <span class="text">Ikut Pelatihan</span>
                        </a>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-trophy fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div> <!-- end col -->
            <?php endif ?>
            



            <?php if($pelatihan['menulisbuku']) : ?>
            <!-- Menulis Buku -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Menulis Buku</div>
                        <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">Level 1</div> -->
                        <p class="card-text">Point <strong class="text-success"><?php echo $pelatihan['pointmenulisbuku'] ?></strong></p>

                        <!-- tombol pelatihan -->
                        <a href="<?php echo base_url() ?>pelatihan" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                            <i class="fa fa-star"></i>
                            </span>
                            <span class="text">Ikut Pelatihan</span>
                        </a>

                        </div>
                        <div class="col-auto">
                        <i class="fas fa-trophy fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div> <!-- end of col -->
            <?php endif ?>



            <?php if($pelatihan['menuliscerpen']) : ?>   
            <!-- Menulis Cerpen -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Menulis Cerpen</div>
                        <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">Level 1</div> -->
                        <p class="card-text">Point <strong class="text-warning"><?php echo $pelatihan['pointmenuliscerpen'] ?></strong></p>

                        <!-- tombol pelatihan -->
                        <a href="<?php echo base_url() ?>pelatihan" class="btn btn-warning btn-icon-split">
                            <span class="icon text-white-50">
                            <i class="fa fa-star"></i>
                            </span>
                            <span class="text">Ikut Pelatihan</span>
                        </a>

                        </div>
                        <div class="col-auto">
                        <i class="fas fa-trophy fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div> <!-- end of col -->
            <?php endif ?>


        </div> <!-- end of row -->

        <!-- jika belum mengikuti pelatihan apapun -->
        <?php if($pelatihan['menulispemula'] === false &&
        $pelatihan['menulisbuku'] === false &&
        $pelatihan['menuliscerpen'] === false) : ?>
            <p class="text-center">anda belum mengikuti pelatihan apapun</p>
            <!-- button edit -->
            <div class="my-2"></div>
            <p class="text-center">
                <a href="<?php echo base_url() ?>pelatihan" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-brain"></i>
                    </span>
                    <span class="text">Ikut Pelatihan</span>
                </a>
            </p>
        <?php endif ?>

    </div> <!-- end of container-fluid -->