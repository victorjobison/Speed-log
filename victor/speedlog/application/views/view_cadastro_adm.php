
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Speed Log - Administrador</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href=" <?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href=" <?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href=" <?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href=" <?php echo base_url('assets/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
  <link href=" <?php echo base_url('assets/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
  <link href=" <?php echo base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href=" <?php echo base_url('assets/vendor/simple-datatables/style.css') ?>" rel="stylesheet">
  <link href=" <?php echo base_url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css') ?>" rel="stylesheet"integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href=" <?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/imask"></script>


  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
.background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
    .alert{
      font-size: 17px;
      width: 370px;
      text-align: center;
      border: none;
      height: 20px;
    }
    .erro{
      width: 15px;
      height: 15px;
    }
  </style>

<div class="container">

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
          <a href="<?php echo base_url() ?>" class="logo d-flex align-items-center w-auto">
            <img src="<?php echo base_url('assets/img/admin.png') ?>" alt="">
            <span class="d-none d-lg-block" style="color: #a5b5d1;;">SpeedLog Admin</span>
          </a>
        </div><!-- End Logo -->

        <div class="card mb-3" style="">

          <div class="card-body">

            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Crie a sua conta aqui</h5>
                <p class="text-center small">Insira seus dados pessoais para criar uma conta</p>
                <br>
                <div class="col-12">
                
              </div>  
            </div>
            <form action="<?php echo base_url('index.php/home/add_adm') ?>" method="post" class="row g-3 needs-validation" novalidate>
                <div class="col-12">
                    <label for="yourName" class="form-label">Nome Completo</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                    <div class="invalid-feedback">Por favor, insira seu nome completo!</div>
                </div>
                
                <div class="col-12">
                    <label for="yourCpf" class="form-label">Cpf</label>
                    <input type="text" name="cpf" class="form-control" id="cpf" required>
                    <div class="invalid-feedback">Por favor, insira um cpf valido!</div>
                </div>

                <div class="col-12">
                    <label for="yourEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                    <div class="invalid-feedback">Por favor, insira um endereço de e-mail válido!</div>
                </div>

                <div class="col-12">
                    <label for="yourUsername" class="form-label">Nome de Usuário</label>
                    <div class="input-group has-validation">
                    <input type="text" name="usuario" class="form-control" id="usuario" required>
                    <div class="invalid-feedback">Escolha um nome de usuário</div>
                    </div>
                </div>

                <div class="col-12">
                    <label for="yourPassword" class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control" id="senha" required>
                    <div class="invalid-feedback">Por favor, insira uma senha valida!</div>
                </div>

                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                    <label class="form-check-label" for="acceptTerms">Eu concordo e aceito os <a href="#">termos e Condições</a></label>
                    <div class="invalid-feedback">Você deve concordar antes de enviar.</div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Criar uma conta</button>
                </div>
            </form>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>
</div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
<!-- Vendor JS Files -->
<script>
   var nomeMask = IMask(document.getElementById('nome'), {
    mask: /^[a-zA-ZÀ-ÿ\s]+$/ // Apenas letras, espaços em branco e acentos
    });
    var cpfMask = IMask(document.getElementById('cpf'), {
      mask: '000.000.000-00'
    });
    var usuarioMask = IMask(document.getElementById('usuario'), {
      mask: /^[A-Za-z0-9_-]{1,16}$/
    });
   
  </script>
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
  
</script>
</body>
</html>
