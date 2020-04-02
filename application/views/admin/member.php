    <!-- Begin Page Content -->
    <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Member</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive ">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                      <th>No</th>
                      <th>Email</th>
                      <th>Nama</th>
                      <th>Guru di</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot class="thead-dark">
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
                            <a href="<?php echo base_url() ?>admin/editmember/<?php echo $member['id_member'] ?>" class="btn btn-primary">
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