    <!-- Begin Page Content -->
    <div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Inbox</h6>
            </div>

            <div class="card-body">

                <h2><?php echo $surat['judulsurat'] ?></h2>
                <p>Dari: <?php echo $surat['nama'] ?></p>
                <p><?php echo $surat['waktukirimsurat'] ?></p>
                <p class="text-justify"><?php echo $surat['isisurat'] ?></p>
              
            </div> <!-- end of Card-body -->

            <div class="card-footer text-muted">

                <a href="<?php echo base_url() ?>member/inbox" class="btn btn-primary">kembali</a>
           
            </div> <!-- end of card footer -->
        </div> <!-- end of card-shadow -->

    </div> <!-- end of container-fluid -->