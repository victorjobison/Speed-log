<!DOCTYPE html>

<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Administrador</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/simple-datatables/style.css') ?>" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/stdash.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/mndash.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <style>
    .cl {
    margin-top:50px;
    margin-left:20px ;
    margin-right:20px ;
    padding: 20px 30px;
    transition: all 0.3s;
}
  </style>
<!-- ======= Header ======= -->


    <section class="section dashboard">
      
      <div class="row">
            <!-- Clientes Cadastrados -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                  <h5 class="card-title">Clientes Cadastrados </h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th>RI</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Telefone</th>

                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($dados as $informacoes=>$dash){?>
                      <tr>
                        <th><?php echo $dash->ri_cliente?></th>
                        <th><?php echo $dash->nome_cliente?></th>
                        <th><?php echo $dash->cpf_cliente?></th>
                        <th><?php echo $dash->usuario_cliente?></th>
                        <th><?php echo $dash->email_cliente?></th>
                        <th><?php echo $dash->numero_telefone_cliente?></th>
                      </tr>
                    <?php } ?>

                    </tbody>
                    
                  </table>
                </div>
              </div>
            </div><!-- End Top Selling -->
          </div>
        </div><!-- End Left side columns -->
      
      </div>
    </section>
  
 

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/dash.js') ?>"></script>

  <!-- Template Main JS File -->
