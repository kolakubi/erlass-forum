<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Member <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="<?php echo base_url() ?>member">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>
<!-- ============================================ -->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Judul menu sidebar -->
<div class="sidebar-heading">
  News
</div>

<!-- Nav Item - Artikel -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url() ?>member/inbox">
    <i class="fas fa-fw fa-envelope"></i>
    <span>Inbox</span>

    <!-- jika ada surat belum dibaca -->
    <?php if($inbox) : ?>
      <span class="badge badge-danger badge-counter"><?php echo $inbox ?></span>
    <?php endif ?>
  </a>
    
</li>
<!-- ============================================ -->


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Judul menu sidebar -->
<div class="sidebar-heading">
  Personal
</div>

<!-- Nav Item - Artikel -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url() ?>member/profil">
    <i class="fas fa-fw fa-user"></i>
    <span>Profil</span></a>
</li>
<!-- ============================================ -->



<!-- Divider -->
<hr class="sidebar-divider">

<!-- Judul menu sidebar -->
<div class="sidebar-heading">
  Navigasi
</div>

<!-- Nav Item - Artikel -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url() ?>member/pelatihan">
    <i class="fas fa-fw fa-brain"></i>
    <span>Pelatihan</span></a>
</li>
<!-- Nav Item - Artikel -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url() ?>member/post">
    <i class="fas fa-fw fa-edit"></i>
    <span>Artikel</span></a>
</li>
<!-- Nav Item - Level -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url() ?>member/level">
    <i class="fas fa-fw fa-trophy"></i>
    <span>Level</span></a>
</li>
<!-- ============================================ -->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Judul menu sidebar -->
<div class="sidebar-heading">
  Sistem
</div>

<!-- Nav Item - Artikel -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url() ?>">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Front</span></a>
</li>

<!-- Nav Item - Artikel -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url() ?>logout">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Logout</span></a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->