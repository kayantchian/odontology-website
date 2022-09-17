
<head>
    <title>Consulta | Odonto Fortaleza</title>
    <meta charset="utf-8">
	<meta author="Kayan Tchian">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
	<!--Animation Aos -->
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <!--<link rel="stylesheet" href="css/flaticon.css">-->
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Inputs Máscara-->
    <script src="js/mascara.js"></script>
  </head>

<body>  
<!--Nav bar-->
<?php 
	include "includes/header.php";
	?>
	  <!-- Inicio -->

    <section class="ftco-intro img" style="background-image: url(images/backgrounds/bg-2.jpg);">
			<div class="overlay"></div>
			<div class="container">
			</div>
		</section>

	<!-- Serviços -->

		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light" id="agendar-section">
			<div class="container">
        <div class="row d-flex">
	        <div class="col-md-6 py-5">
	        	<div class="py-lg-5">
		        	<div class="row justify-content-center pb-5">
			          <div class="col-md-10 heading-section ftco-animate">
                        <form action="receberconsulta.php" method="post" class="appointment-form ftco-animate">
                        <h2 class="mb-4">Agendar</h2>
		    				<div class="">
			    				<div class="form-group">
			    					<input type="text" class="form-control" required name="nome" placeholder="Nome Completo">
			    				</div>
                                <div class="form-group">
			    					<input type="text" class="form-control" onkeypress="cpf_mask()" id="pf" required name="cpf" placeholder="CPF">
			    				</div>
		    				</div>
		    				<div class="">
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select id="servico" name="servico" class="form-control" required>
	                      	<option value="">Selecione o serviço</option>
	                        <option value="">Clareamento Dental</option>
	                        <option value="">Cliníca Geral e Prevenção</option>
	                        <option value="">Exames (Documentação Odontológica)</option>
	                        <option value="">Odontologia (Clínica)</option>
	                        <option value="">Outros serviços</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
		    					<div class="form-group">
			    					<input type="text" id="telefone" max="13" onkeypress="telefone_mask()" class="form-control" name="telefone" placeholder="Telefone" required>
			    				</div>
		    				</div>
		    				<div class="">
			    				<div class="form-group">
			    					<div class="input-wrap">
			            		<input type="date" class="form-control appointment_date" name="data" required placeholder="Date">
			            		<input type="time" class="form-control appointment_time" name="horario" required placeholder="Time">
			    				</div>
		    				</div>
			            <div class="form-group">
			              <input type="submit" value="Cadastrar" class="btn btn-secondary py-3 px-4">
			            </div>
		    				</div>
		    			</form>
			          </div>
			        </div>
			          </div>
			        </div>
			      </div>
		      </div>
		      
		    </div>
			</div>
		</section>

    <?php
        include "includes/footer.php"
    ?>
  
  <!-- animações/loader-->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
</body>