<!-- Page Content -->
<div class="container" style="padding-bottom: 60px">

<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-8">


    <!-- jika ada post -->
    <?php if($posts) : ?>

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
            <div class="col-md-2 text-center">
              <img class="d-flex mr-3 rounded-circle img-fluid" src="<?php echo base_url() ?>upload/memberpic/<?php echo $post['foto'] ?>" alt="">
            </div>

            <!-- nama -->
            <div class="col-md-2">
              <p>Oleh:<br><?php echo $post['nama'] ?></p>
            </div>

            <div class="col">
              <!-- judul -->
              <h4 class="card-title" style="color: black"><?php echo $post['judul'] ?></h4>
              
              <!-- isi post -->
              <!-- <p class="card-text" style="color: gray"><?php echo $post['isipost'] ?></p> -->
              
              <!-- tombol baca -->
              <!-- <a href="<?php echo base_url() ?>postdetail/post/<?php echo $post['idpost'] ?>" class="btn btn-primary">Baca &rarr;</a> -->
            </div>


          </div> <!-- end of row -->
        </div> <!-- end of card-body -->
        </a> <!-- end of anchor wrap -->


        <div class="card-footer text-muted">

          <!-- penulis -->
          <?php echo $post['waktupublish'] ?> | 

          <!-- kategori -->
          Kategori: 
          <a href="#"><?php echo $post['namakategori'] ?></a> |

          <!-- point & vote -->
          <span class="text-warning font-weight-bold">
            <?php echo $post['totalpoint'] ?>
          </span> <i class="fas fa-star" style="color: orange"></i> | <i class="fas fa-eye"></i> <?php echo $post['view'] ?>
        </div>

      </div> <!-- end of card -->
    <?php endforeach ?> <!-- end loop -->
    
    <!-- jika tidak ada post -->
    <?php else : ?>
      <p>
        <a class="btn btn-danger" href="<?php echo base_url() ?>posting">Mulai menulis &#9998;</a>
      </p>
      <p class="text-center">tidak ada post</p>
    <?php endif ?>

    <!-- Pagination -->
    <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>

  </div> <!-- end of col-md-8 -->


