    <!-- Begin Page Content -->
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Artikel</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo $post['namakategori'] ?></h6>
            </div>

            <!-- jika ada post -->
            <?php if($post) : ?>

            <div class="card-body">
                <h1><?php echo $post['judul'] ?></h1>
                <p><?php echo $post['waktupublish'] ?></p>
                <p>Oleh: <?php echo $post['nama'] ?></p>
                <p class="text-justify"></p>
                <?php echo $post['isipost'] ?>
            </div> <!-- end of Card-body -->

            <!-- jika tdk ada post  -->
            <?php else : ?>
                <p class="text-center">tidak ada data</p>
            <?php endif ?>

            <div class="card-footer text-muted">
                <a href="<?php echo base_url() ?>member/post" class="btn btn-success">Kembali</a>
            </div> <!-- end of card footer -->

        </div> <!-- end of card-shadow -->

    </div> <!-- end of container-fluid -->