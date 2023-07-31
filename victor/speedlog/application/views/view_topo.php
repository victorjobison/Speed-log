<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Speed Log - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link href=" <?php echo base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href=" <?php echo base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/main.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis - v1.3.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Speed Log</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo base_url() ?>">Home</a></li>
          <li><a href="<?php echo base_url('index.php/home/sobre') ?>">Sobre</a></li>
          <li><a href="<?php echo base_url('index.php/home/servicos') ?>">Serviços</a></li>
          <li><a href="<?php echo base_url('index.php/home/contato') ?>">Contato</a></li>
          <li class="dropdown "><a href="#"><span>Login</span><i class="dropdown-toggle dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?php echo base_url('index.php/home/login_adm') ?>"><img src="<?php echo base_url('assets/img/admin.png') ?>" alt="" style=" height: 20px">
                  Administrador <hr></a>
                 </li>
                  
              <li><a href="<?php echo base_url('index.php/home/login_parceiro') ?>"><img src="<?php echo base_url('assets/img/caixa.png') ?>" alt="" style=" height: 20px">
                  Parceiros<hr></a></li>
              <li><a href="<?php echo base_url('index.php/home/login_cliente') ?>"><img src="<?php echo base_url('assets/img/cliente3.png') ?>" alt="" style=" height:20px">
                  Clientes<hr></a></li>
            </ul>
          </li>
        </u>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->




