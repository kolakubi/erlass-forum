
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profil</h1>
    </div>


    <div class="col-md-6 offset-md-3">
        <div class="card shadow mb-4">
            
            <!-- Nama -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $member['nama'] ?></h6>
            </div> <!-- card header -->

            <div class="card-body">

                <!-- Foto -->
                <div class="row mb-2 bg-light">
                    <div class="col text-center">
                        <img src="<?php echo base_url() ?>upload/memberpic/<?php echo $member['foto'] ?>" alt="" class="img rounded-circle" style="max-width: 300px;">
                    </div>
                </div>
                <hr>
                <!-- end of Foto -->

                 <!-- No Induk -->
                 <div class="row">
                    <div class="col-md-3">
                        <div class="text-md font-weight-bold text-primary mb-1">
                            No Induk
                        </div>
                    </div>
                    <div class="col">
                        <?php echo $member['no_induk'] ?>
                    </div>
                </div>
                <!-- end of No Induk -->

                <!-- alamat -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-md font-weight-bold text-primary mb-1">
                            Alamat:
                        </div>
                    </div>
                    <div class="col">
                        <?php echo $member['alamat'] ?>
                    </div>
                </div>
                <!-- end of alamat -->

                <!-- HP -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-md font-weight-bold text-primary mb-1">
                            Telp/HP:
                        </div>
                    </div>
                    <div class="col">
                        <?php echo $member['hp'] ?>
                    </div>
                </div>
                <!-- end of HP -->

                <!-- Sekolah -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-md font-weight-bold text-primary mb-1">
                            Sekolah:
                        </div>
                    </div>
                    <div class="col">
                        <?php echo $member['sekolah'] ?>
                    </div>
                </div>
                <!-- end of HP -->

                <!-- Email -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-md font-weight-bold text-primary mb-1">
                            Email:
                        </div>
                    </div>
                    <div class="col">
                        <?php echo $member['email'] ?>
                    </div>
                </div>
                <!-- end of Email -->

                <hr>
                
                <!-- button edit -->
                <div class="my-2"></div>
                  <a href="<?php echo base_url() ?>member/editprofil" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-edit"></i>
                    </span>
                    <span class="text">Edit Profil</span>
                  </a>
                </div>



            </div> <!-- end of card body -->
        </div> <!-- end of card shadow -->
    </div> <!-- col-md-6 -->


</div> <!-- end container-fluid -->