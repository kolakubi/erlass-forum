<!-- Page Content -->
<div class="container">

<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-8">

    <h1 class="my-4"><?php echo $posts[0]['namakategori'] ?>
      <small>Kategori pemula</small>
    </h1>

    <p>
      <a class="btn btn-primary" href="#">Mulai menulis &#9998;</a>
    </p>

    <!-- Blog Post -->
    <?php foreach($posts as $post) : ?>
    <div class="card mb-4">
      <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
     
      <div class="card-body">

        <!-- judul -->
        <h2 class="card-title"><?php echo $post['judul'] ?></h2>
        
        <!-- isi post -->
        <p class="card-text"><?php echo $post['isipost'] ?></p>
        
        <!-- tombol baca -->
        <a href="<?php echo base_url() ?>postdetail/post/<?php echo $post['idpost'] ?>" class="btn btn-primary">Baca &rarr;</a>
      </div>


      <div class="card-footer text-muted">

        <!-- penulis -->
        <?php echo $post['waktupublish'] ?> | Oleh
        <a href="#"><?php echo $post['nama'] ?></a>
      </div>

      <div class="card-footer text-muted">
        <!-- kategori -->
        Kategori: 
        <a href="#"><?php echo $post['namakategori'] ?></a>
      </div>

      <div class="card-footer text-muted">
        <!-- point & vote -->
        Point <?php echo $post['totalpoint'] ?> | Dari <?php echo $post['totalvote'] ?> vote
      </div>

    </div> <!-- end of card -->

    <?php endforeach ?>

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>

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