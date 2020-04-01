    <!-- Begin Page Content -->
    <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Postingan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Dilihat</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot class="thead-dark">
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