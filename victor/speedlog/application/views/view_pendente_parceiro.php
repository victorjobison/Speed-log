<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Speed Log - Acompanhar Pedidos </title> 
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
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('<?php echo base_url('assets/img/page-header.jpg') ?>');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Pedidos</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="<?php echo base_url('index.php/home/servicos_parceiro') ?>">Serviços</a></li>
            <li >Solicitações de Entrega</a></li>
    
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <span>Solicitações de Entrega</span>
                <h2>Solicitações de Entrega</h2>
            </div>
            <div class="rolag" id="">
              <div class="row gy-4"> 
                <?php foreach($dados as $dados=>$entrega){?>
                  <div class="col">
                    <div class="card text-center mb-3" style="width: 20rem; height: 24rem; background-color: white !important">
                      <div class="card-body">
                        <div style="width: 100%; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 10px; ">
                            <h5 class="card-title">Status: <?php echo $entrega->status?></h5>
                            <h5 class="card-subtitle mb-2 text-muted" style="">Cliente:<?php echo $entrega->nome_cliente?></h5>
                        </div><br>
                              
                        <i class="fa-solid fa-location-dot"></i> - <?php echo $entrega->rua_partida?>, <?php echo $entrega->bairro_partida?> - <?php echo $entrega->complemento_partida?><p class="card-text"></p>
                        <img src="<?php echo base_url('assets/img/linha.png') ?>" style="height:60px !important; margin-left: -9px" alt=""> Viagem de  <?php echo $entrega->tempo?>  <?php echo $entrega->distancia?><p></p>
                        <i class="fa-solid fa-thumbtack"></i> - <?php echo $entrega->rua_chegada?>, <?php echo $entrega->bairro_chegada?> - <?php echo $entrega->complemento_chegada?><p class="card-text"></p><br>
                        <p><b> Frete: </b>R$<?php echo $entrega->valor_parceiro?></p>
                        <a href="<?php echo base_url('index.php/home/aceitar/'.$_SESSION['parceiro'][0]['ri_parceiro']."/".$entrega->cdg_envio)?>" class="btn btn-info"> Aceitar entrega </a>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
         </div>
     </section><!-- End Service Details Section -->
    
  </main><!-- End #main -->
               