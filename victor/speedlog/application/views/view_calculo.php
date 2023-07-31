<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Speed Log - Detalhes de Serviço </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

   <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css">
    <script src="https://cdn.jsdelivr.net/npm/imask"></script>

    </head>
    <body>
    <?php
        //echo $parametros[0]->valor_parametro;
        $p1 = $parametros[0]->valor_parametro;
        $p2 = $parametros[1]->valor_parametro;
        $p3 = $parametros[2]->valor_parametro;
        $p4 = $parametros[3]->valor_parametro;
        $p5 = $parametros[4]->valor_parametro;
        $p6 = $parametros[5]->valor_parametro;

    ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('<?php echo base_url('assets/img/ft_serviço_detalhes.jpg')?>');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Pedidos</h2>
              <p>Faça seu pedido por aqui</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
          <li><a href="<?php echo base_url('index.php/home/servicos_cliente') ?>">Serviços</a></li>
            <li>Detalhes pedido</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
                <div class="col-lg-8">
                    
                    <div class="section-header">
                        <span>Endereço de coleta</span>
                        <h2>Endereço de coleta</h2>
                    </div>
                    <form action="<?php echo base_url('index.php/Home/add_entregas')?>" method="post"class="row g-3" >

                        <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Cep:</label>
                        <input class="form-control" name="cep_partida" id="cep_partida" >
                        </div>
                        <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Cidade:</label>
                        <input class="form-control" name="cidade_partida" id="cidade_partida" readonly required>
                        </div>
                        <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Bairro:</label>
                        <input type="text" class="form-control" name="bairro_partida" id="bairro_partida" readonly required>
                        </div>
                        <div class="col-md-5">
                        <label for="inputAddress2" class="form-label">Rua:</label>
                        <input type="text" class="form-control" name="rua_partida" id="rua_partida" readonly required>
                        </div>
                        <div class="col-md-2">
                        <label for="inputCity" class="form-label">Numero:</label>
                        <input type="text" class="form-control"name="complemento_partida" id="complemento_partida">
                        </div>
                        <div class="col-md-4">
                        <label for="inputZip" class="form-label">Estado:</label>
                        <input type="text" class="form-control" name="estado_partida"id="estado_partida" readonly required>
                        </div>
                        
                    
                        <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Cep:</label>
                        <input class="form-control"name="cep_chegada"  id="cep_chegada" >
                        </div>
                        <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Cidade:</label>
                        <input class="form-control" name="cidade_chegada"  id="cidade_chegada" readonly required>
                        </div>
                        <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Bairro:</label>
                        <input type="text" class="form-control" name="bairro_chegada"  id="bairro_chegada" readonly required>
                        </div>
                        <div class="col-md-5">
                        <label for="inputAddress2" class="form-label">Rua:</label>
                        <input type="text" class="form-control" name="rua_chegada"  id="rua_chegada" readonly required>
                        </div>
                        <div class="col-md-2">
                        <label for="inputCity" class="form-label">Numero:</label>
                        <input type="text" class="form-control"name="complemento_chegada"  id="complemento_chegada">
                        </div>
                        <div class="col-md-4">
                        <label for="inputZip" class="form-label">Estado:</label>
                        <input type="text" class="form-control"name="estado_chegada"  id="estado_chegada" readonly required>
                        </div>
                
                        <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Categoria:</label>
                        <input class="form-control"name="categoria_produto" list="datalistOptions" id="categoria_produto">
                        <datalist id="datalistOptions">
                            <option value="Eletrônicos">
                            <option value="Alimentos">
                            <option value="Utensílios Domésticos">
                            <option value="Vidro">
                            <option value="Roupa">
                            <option value="Outros...">
                        </datalist>
                        </div>
                        <div class="col-md-3">
                        <label for="inputPassword4" class="form-label">Peso do produto:</label>
                        <input class="form-control" name="peso"  id="peso">
                        <span id="span_te_teste"></span>
                        </div>
                        <div class="col-md-3">
                        <label for="inputAddress" class="form-label">Altura:</label>
                        <input type="text" class="form-control"name="altura_produto"  id="altura_produto">
                        </div>
                        <div class="col-md-3">
                        <label for="inputAddress2" class="form-label">Largura:</label>
                        <input type="text" class="form-control"name="largura_produto"  id="largura_produto" >
                        </div>
                        <div class="col-md-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrição do Produto:</label>
                        <textarea class="form-control" id="dec_produto" name="dec_produto" rows="3"></textarea>
                        </div>
                        <div class="col-md-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Tempo Estimado:</label>
                        <input type="text" id="tempo" name="tempo" placeholder=""  class="form-control"readonly required >
                        </div>
                        <div class="col-md-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Distância:</label>
                        <input type="text" id="distancia" name="distancia" placeholder=""  class="form-control"readonly required >
                        </div>
                        <label for="" >Calculo Da Entrega</label>
                        <input  class="form-control"  type="text" name="calculo" id="calculo" readonly required>

                        <button class="btn btn-dark" id="solicitar" tipe="submit "style="margin-top:15px" hidden >solicitar</button>
                        
                        </form> 
                </div>    
            
        </div> 
    </div>   
</section><!-- End Service Details Section -->
  </main><!-- End #main -->



                        
                        


                        
                           
</form>
<button class="btn btn-info" id="calcular" style="margin-top:15px">Calcular</button>

</center>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->


        <script>
        var password = document.getElementById("senha"),
            confirm_password = document.getElementById("confirmar_senha");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Senhas diferentes!");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        $( document ).ready(function(){
            $('#cep_partida').keyup(function() {
            cep_partida = $('#cep_partida').val();
            if(cep_partida.length==9){
                
                //Nova variável "cep" somente com dígitos.
                var cep = $("#cep_partida").val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(cep)) {

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua_partida").val(dados.logradouro);
                                $("#bairro_partida").val(dados.bairro);
                                $("#cidade_partida").val(dados.localidade);
                                $("#estado_partida").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                console.log("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        console.log("Formato de CEP inválido.");
                    }
                } //end if.
            };

        })
        

        $('#cep_chegada').keyup(function() {
            cep_chegada = $('#cep_chegada').val();
            if(cep_chegada.length==9){
                
                //Nova variável "cep" somente com dígitos.
                var cep_chegada = $("#cep_chegada").val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep_chegada != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(cep_chegada)) {

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/" + cep_chegada + "/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua_chegada").val(dados.logradouro);
                                $("#bairro_chegada").val(dados.bairro);
                                $("#cidade_chegada").val(dados.localidade);
                                $("#estado_chegada").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                console.log("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        console.log("Formato de CEP inválido.");
                    }
                } //end if.
            };

        })
    })

        
    </script>

    
<script>
        var password = document.getElementById("senha"),
            confirm_password = document.getElementById("confirmar_senha");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Senhas diferentes!");
            } else {
                confirm_password.setCustomValidity('');
            }
        }


       
    </script>
    
    <script>





        $( document ).ready(function() {
        
        // function formatar(mascara, documento) {
        //     var i = documento.value.length;
        //     var saida = mascara.substring(0, 1);
        //     var texto = mascara.substring(i)

        //     if (texto.substring(0, 1) != saida) {
        //         documento.value += texto.substring(0, 1);
        //     }

        // }
        var $campo = $('#cep_partida');
        $campo.mask('00000-000',{reverse:true});

        var $campodois = $('#cep_chegada');
        $campodois.mask('00000-000',{reverse:true});

  
            $('#calcular').click(function(){
                peso= $('#peso').val();

                if(peso>12){
                    condicao=1;
                }else if(peso>8){
                    condicao=0;
                    taxapeso=parseFloat(<?= $p4?>);
                }else if(peso>3){
                    condicao=0;
                    taxapeso=parseFloat(<?= $p3?>);
                }else if(peso>1){
                    condicao=0;
                    taxapeso=parseFloat(<?= $p2?>);
                }else if(peso<1){
                    condicao=0;
                    taxapeso=parseFloat(<?= $p1?>);
                }
                var cep_partida= $('#cep_partida');
                var cep_chegada= $('#cep_chegada');

                if (!$('#peso').val()) {
                    condicao=1;
                }
                
                if (cep_partida.val().length==9 && cep_chegada.val().length==9 && condicao==0){
                    cep_partida= $('#cep_partida').val();
                    cep_chegada= $('#cep_chegada').val();
                 $.get( "https://api.distancematrix.ai/maps/api/distancematrix/json?origins="+cep_partida+"&destinations="+cep_chegada+"&key=eR8UGRdmRH9oHZ1qwNPaRnytUKaKj", function( data ) {
                console.log(data);
                var tempo = data['rows'][0]['elements'][0]['duration']['value'];
                    var taxatempo = Number((tempo / 60).toFixed(2));
                    taxatempo= taxatempo *parseFloat(<?= $p6?>);
                
                
                var distancia = data['rows'][0]['elements'][0]['distance']['value'];
                    var taxadistancia = Number(( distancia/1000).toFixed(2) );
                    taxadistancia= taxadistancia * parseFloat(<?= $p5?>);    
        

                calculoentrega = Number((taxatempo+taxadistancia+taxapeso).toFixed(2));
                $('#calculo').val(calculoentrega);
                    console.log(calculoentrega);
                    $("#solicitar").attr("hidden",false)
                    tempo =  data['rows'][0]['elements'][0]['duration']['text'];
                    $("#tempo").val(tempo);
                    distancia = data['rows'][0]['elements'][0]['distance']['text'];
                    $("#distancia").val(distancia);
                    $("#calculoentrega").val(calculoentrega);

                });
                }else{
                    if(condicao==1){
                        console.log("Não é possível transportar")
                    }else{
                        console.log("menor que 7 caracteres nao é possivel validar")
                    }
                }






            })


       
    });
    </script>
    <script src="assets/js/teste.js"></script>
  </body>