<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Resto Restaurant-Yummy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+62 857 14717 907</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Senin-Sabtu: Pukul 11:00 - 23:00</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="<?= base_url() ?>restoran">admin &mdash; <?php echo strtoupper($this->session->userdata('username')); ?> &mdash;</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a href="<?= base_url() ?>restoran">Dashboard</a></li>
          <li><a href="<?= base_url() ?>restoran/inputForm">Tambah Menu</a></li>
          <li><a href="<?= base_url() ?>restoran/listMenu">List Menu</a></li>
          
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="<?= base_url() ?>login/logout" class="book-a-table-btn ">LOG OUT</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      
        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background:url(<?php echo base_url('assets/img/bg3.jpg')?>);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Resto</span> Restaurant</h2>
                <p class="animate__animated animate__fadeInUp">Resto Restaurant merupakan rumah makan siap saji/fast food restaurant yang menghidangkan makanan dan minuman dalam waktu relatif singkat dari pemesanan sampai penyajian kepada pelanggan.</p>
                <div>
                  <a href="<?= base_url() ?>restoran/inputForm" class="btn-menu animate__animated animate__fadeInUp">Add Menu</a>
                  <a href="<?= base_url() ?>restoran/listMenu" class="btn-book animate__animated animate__fadeInUp">Our Menu</a>
                </div>
              </div>

        </div>
      </div>
    </div>
    
  </section><!-- End Hero -->
  
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
  
</body>
</html>
