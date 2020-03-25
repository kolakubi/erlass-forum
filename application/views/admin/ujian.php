    <!-- Begin Page Content -->
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Artikel</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Postingan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Dilihat</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Dilihat</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $counter = 0; ?>
                    <?php foreach($dataujian as $ujian) : ?>
                    <?php $counter++; ?>
                    <tr>
                        <td><?php echo $counter ?></td>
                        <td><?php echo $ujian['judul'] ?></td>
                        <td><?php echo $ujian['namakategori'] ?></td>
                        <td>
                            <?php if($ujian['view'] == 0) : ?>
                                <a class="btn btn-danger" style="color: white">Belum</a>
                            <?php else : ?>
                                <a class="btn btn-success" style="color: white">Sudah</a>
                            <?php endif ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url() ?>admin/lihatujian/<?php echo $ujian['idpost'] ?>" class="btn btn-success">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>
                            <a href="" class="btn btn-primary">
                                <i class="fas fa-fw fa-edit"></i>
                            </a>
                        </td>
                    </tr>

                    <?php endforeach ?>

                  </tbody>

                </table> <!-- end of table -->
            </div>  <!-- end of table-responsive -->
            </div> <!-- end of Card-body -->
        </div> <!-- end of card-shadow -->

    </div> <!-- end of container-fluid -->