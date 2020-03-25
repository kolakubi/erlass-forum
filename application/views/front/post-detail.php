

  <!-- Page Content -->
  <div class="container" style="padding-bottom: 60px">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-md-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $posts['judul'] ?></h1>

        <!-- Author -->
        <p class="lead">
          oleh
          <a href="#"><?php echo $posts['nama'] ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p><?php echo $posts['waktupublish'] ?></p>

        <hr>

        <!-- Preview Image -->
        <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->

        <!-- <hr> -->

        <!-- Post Content -->
        <p class="lead"><?php echo $posts['isipost'] ?></p>

        <hr>

        <!-- point dan vote -->
        <span class="text-warning font-weight-bold">
          <?php echo $posts['totalpoint'] ?>
        </span> <i class="fas fa-star" style="color: orange"></i> | <i class="fas fa-eye"></i> <?php echo $posts['view'] ?>

        <hr>

        <!-- jika post sendiri, komen tidak muncul -->
        
        <?php if($posts['idauthor'] != $this->session->userdata('id_member')) : ?>

        <!-- jika sdh pernah komentar, tutup kolom komentar -->
        <?php 
          $kolomkomentar = true;
          foreach($posts['komentar'] as $komen){
            if($komen['idkomentator'] == $this->session->userdata['id_member']){
              $kolomkomentar = false;
            }
          }
        ?>

        <?php if($kolomkomentar) : ?>
        <div class="card my-4">
          <h5 class="card-header">Beri Komentar dan Point:</h5>
          <div class="card-body">

            <!-- form komentar -->
            
            <?php echo form_open('postdetail/komentar/'.$posts['idpost']) ?>

              <!-- isi komentar -->

              <div class="pesan-error-form user">
                <span><?php echo form_error('komentar') ?></span>
              </div>

              <div class="form-group">
                Komentar
                <textarea class="form-control" rows="3" name="komentar"></textarea>
              </div>

              <!-- point nilai -->

              <div class="pesan-error-form user">
                <span><?php echo form_error('rating') ?></span>
              </div>

              <div class="form-group">
                Point
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rating" id="rating1" value="1" checked>
                    <label class="form-check-label" for="rating1">
                      <i class="fas fa-star" style="color: orange"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rating" id="rating2" value="2">
                    <label class="form-check-label" for="rating2">
                      <i class="fas fa-star" style="color: orange"></i>
                      <i class="fas fa-star" style="color: orange"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rating" id="rating3" value="3">
                    <label class="form-check-label" for="rating3">
                      <i class="fas fa-star" style="color: orange"></i>
                      <i class="fas fa-star" style="color: orange"></i>
                      <i class="fas fa-star" style="color: orange"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rating" id="rating4" value="4">
                    <label class="form-check-label" for="rating4">
                      <i class="fas fa-star" style="color: orange"></i>
                      <i class="fas fa-star" style="color: orange"></i>
                      <i class="fas fa-star" style="color: orange"></i>
                      <i class="fas fa-star" style="color: orange"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rating" id="rating5" value="5">
                    <label class="form-check-label" for="rating5">
                      <i class="fas fa-star" style="color: orange"></i>
                      <i class="fas fa-star" style="color: orange"></i>
                      <i class="fas fa-star" style="color: orange"></i>
                      <i class="fas fa-star" style="color: orange"></i>
                      <i class="fas fa-star" style="color: orange"></i>
                    </label>
                </div>
              </div>

              <button type="submit" class="btn btn-primary">Beri Komentar dan Point</button>

              <a class="btn btn-danger" href="<?php echo base_url() ?>forum">Kembali</a>

              
              <?php echo form_close() ?>
            <!-- end form komentar -->


          </div>
        </div>
        <?php endif ?> <!-- end if jika sdh pernah komentar, tutup kolom komentar -->
        <?php endif ?> <!-- end if jika post sendiri, komen tidak muncul -->

        <?php foreach($posts['komentar'] as $komen) : ?>
        <!-- Single Comment -->
        <div class="card shadow mb-4">
          
          
          <div class="card-header">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <h5 class="mt-0"><?php echo $komen['nama'] ?></h5>
          </div> <!-- end of card-header -->
          
          
          <div class="card-body">
              <p><?php echo $komen['isikomentar'] ?></p>
          </div> <!-- end of card-body -->

          <div class="card-footer">
            <span>Nilai: </span>
            <i class="fas fa-star" style="color: orange"></i>
            <i class="fas fa-star" style="color: orange"></i>
            <i class="fas fa-star" style="color: orange"></i>
            <i class="fas fa-star" style="color: orange"></i>
            <i class="fas fa-star" style="color: orange"></i>
          </div>

        </div> <!-- end of card -->
        
        <!-- end of single Comment -->
        <?php endforeach ?>

      


      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
