<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Speed Log - Contato</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

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
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('<?php echo base_url('assets/img/ft_contato.jpg') ?>');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center" data-aos="fade-up">
          <h2>Contato</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li>Contato</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 340px;"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.4332134609!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b6dc085299d:0xfcf2a6c596c50f4b!2sSão+Mateus+Juiz+de+Fora+MG!5e0!3m2!1smk!2sbg!4v1539943755621"
        frameborder="0" allowfullscreen></iframe>
    </div><!-- End Google Maps -->

    <div class="row gy-4 mt-4" data-aos="fade-up">

      <div class="col-lg-3">

        <div class="info-item d-flex">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h4>Localização</h4>
            <p>Rua Monsenhor Gustavo Freire, Juiz de Fora, 36000-081</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h4>Email</h4>
            <p>speedlog@gmail.com</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex">
          <i class="bi bi-phone flex-shrink-0"></i>
          <div>
            <h4>Contato</h4>
            <p>+55(32) 98805-3599</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="col-lg-9">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form"
          style="background: linear-gradient(90deg, rgba(108,107,153,0) 18%, rgba(144,161,201,0) 51%, rgba(134,167,235,0) 100%);">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Carregando</div>
            <div class="error-message"></div>
            <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
          </div>
          <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

