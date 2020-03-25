    <!-- Begin Page Content -->
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Member</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Member</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Email</th>
                      <th>Nama</th>
                      <th>Guru di</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Email</th>
                      <th>Nama</th>
                      <th>Guru di</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    <?php $counter = 0; ?>
                    <?php foreach($members as $member) : ?>
                        <?php $counter++; ?>
                        
                        <tr>

                        <td><?php echo $counter ?></td>
                        <td><?php echo $member['email'] ?></td>
                        <td><?php echo $member['nama'] ?></td>
                        <td><?php echo $member['sekolah'] ?></td>
                        <td>
                            <a href="<?php echo base_url() ?>admin/lihatmember/<?php echo $member['id_member'] ?>" class="btn btn-success">
                                <i class="fas fa-fw fa-eye"></i>
                            </a>
                            <a href="" class="btn btn-primary">
                                <i class="fas fa-fw fa-edit"></i>
                            </a>
                        </td>

                        </tr>

                    <?php endforeach ?>
                    
                  </tbody> <!-- end of tbody -->

                </table> <!-- end of table -->
            </div>  <!-- end of table-responsive -->
            </div> <!-- end of Card-body -->
        </div> <!-- end of card-shadow -->

    </div> <!-- end of container-fluid -->