    <!-- Begin Page Content -->
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Artikel</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo $post['namakategori'] ?></h6>
            </div>

            <div class="card-body">

                <h1><?php echo $post['judul'] ?></h1>
                <p><?php echo $post['waktupublish'] ?></p>
                <p>Oleh: <?php echo $post['nama'] ?></p>
                <p class="text-justify"></p>
                <?php echo $post['isipost'] ?>
              
            </div> <!-- end of Card-body -->

            <div class="card-footer text-muted">

                <a href="<?php echo base_url() ?>admin/lulustes/<?php echo $post['idpelatihandiikuti'] ?>/<?php echo $post['levelujian'] ?>/<?php echo $post['id_member'] ?>" 
                    class="btn btn-primary btn-lulus">Lulus</a>

                <a href="#" class="btn btn-danger">Belum Lulus</a>

                <a href="<?php echo base_url() ?>admin/ujian" class="btn btn-success">Batal</a>
           
           
            </div> <!-- end of card footer -->
        </div> <!-- end of card-shadow -->

    </div> <!-- end of container-fluid -->