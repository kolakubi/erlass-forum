<!-- Page Content -->
<div class="container" style="padding-bottom: 60px">

<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-8">

    <h1 class="my-4"><?php echo $posts[0]['namakategori'] ?>
      <small>Kategori pemula</small>
    </h1>

    <p>
      <a class="btn btn-danger" href="<?php echo base_url() ?>posting">Mulai menulis &#9998;</a>
    </p>

    <!-- Blog Post -->
    <?php foreach($posts as $post) : ?>

    <a href="<?php echo base_url() ?>postdetail/post/<?php echo $post['idpost'] ?>">
    <div class="card mb-4 shadow">
     
      <div class="card-body">

        <div class="row">
          <!-- image -->
          <div class="col-md-2">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/70x70" alt="">
          </div>

          <div class="col-md-10">
            <!-- judul -->
            <h4 class="card-title" style="color: black"><?php echo $post['judul'] ?></h4>
            
            <!-- isi post -->
            <p class="card-text" style="color: gray"><?php echo $post['isipost'] ?></p>
            
            <!-- tombol baca -->
            <!-- <a href="<?php echo base_url() ?>postdetail/post/<?php echo $post['idpost'] ?>" class="btn btn-primary">Baca &rarr;</a> -->
          </div>


        </div> <!-- end of row -->
      </div> <!-- end of card-body -->
      </a> <!-- end of anchor wrap -->


      <div class="card-footer text-muted">

        <!-- penulis -->
        <?php echo $post['waktupublish'] ?> | <i class="fas fa-user"></i>
        <a href="#"><?php echo $post['nama'] ?></a> |

        <!-- kategori -->
        Kategori: 
        <a href="#"><?php echo $post['namakategori'] ?></a> |

         <!-- point & vote -->
         <span class="text-warning font-weight-bold">
          <?php echo $post['totalpoint'] ?>
        </span> <i class="fas fa-star" style="color: orange"></i> | <i class="fas fa-eye"></i> <?php echo $post['view'] ?>
      </div>

    </div> <!-- end of card -->

    <?php endforeach ?>

    <!-- Pagination -->
    <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>

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