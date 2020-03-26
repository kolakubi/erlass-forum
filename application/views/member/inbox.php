    <!-- Begin Page Content -->
    <div class="container-fluid">
    
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Inbox</h6>
            </div>
            <div class="card-body">

              <!-- cek apakah ada surat -->
              <!-- jika ada surat -->
              <?php if($datasurat) : ?>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Dari</th>
                      <th>Judul</th>
                      <th>Dilihat</th>
                      <th>Waktu</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Dari</th>
                      <th>Judul</th>
                      <th>Dilihat</th>
                      <th>Waktu</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php foreach($datasurat as $surat) : ?>
                    <tr>
                        <td><?php echo $surat['nama'] ?></td>
                        <td><?php echo $surat['judulsurat'] ?></td>
                        <td>
                            <?php if($surat['dilihat']) : ?>
                                <a class="btn btn-success" style="color: white">sudah</a>
                            <?php else : ?>
                                <a class="btn btn-danger" style="color: white">belum</a>
                            <?php endif ?>
                        </td>
                        <td><?php echo $surat['waktukirimsurat'] ?></td>
                        <td>
                            <a href="" class="btn btn-success">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>
                            <a href="" class="btn btn-danger">
                                <i class="fas fa-fw fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                    
                  </tbody>

                </table> <!-- end of table -->
            </div>  <!-- end of table-responsive -->
            
            <!-- jika belum ada pesan -->
            <?php else : ?>
                <p class="text-center">belum ada pesan masuk</p>
            <?php endif ?> <!-- end of cek surat -->

            </div> <!-- end of Card-body -->
        </div> <!-- end of card-shadow -->

    </div> <!-- end of container-fluid -->