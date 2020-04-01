    <!-- Begin Page Content -->
    <div class="container-fluid">
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Postingan</h6>
            </div>
            <div class="card-body">

              <!-- jika ada postingan -->
              <?php if($posts) : ?>

              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Dilihat</th>
                      <th>Point</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot class="thead-dark">
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Dilihat</th>
                      <th>Point</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                    <tbody>

                    <?php $counter = 0; ?>
                    <?php foreach($posts as $post) : ?>
                    <?php $counter++ ?>
                    <tr>
                        <td><?php echo $counter ?></td>
                        <td><?php echo $post['judul'] ?></td>
                        <td><?php echo $post['namakategori'] ?></td>
                        <td><?php echo $post['view'] ?></td>
                        <td><?php echo $post['totalpoint'] ?></td>
                        <td>
                            <a href="<?php echo base_url() ?>member/lihatpost/<?php echo $post['idpost'] ?>" class="btn btn-success">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach ?> <!-- end loop -->
                      
                    <!-- jika belum ada postingan -->
                    <?php else : ?>
                      <p class="text-center">belum ada data</p>
                    <?php endif ?>

                  </tbody>

                </table> <!-- end of table -->
            </div>  <!-- end of table-responsive -->
            </div> <!-- end of Card-body -->
        </div> <!-- end of card-shadow -->

    </div> <!-- end of container-fluid -->