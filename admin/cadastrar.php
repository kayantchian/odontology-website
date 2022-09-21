<?php 
    session_start();
    include 'protect.php';
?>
<head>
    <title>Consulta | Odonto Fortaleza</title>
    <meta charset="utf-8">
	<meta author="Kayan Tchian">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
	<!--Animation Aos -->
    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <!--<link rel="stylesheet" href="css/flaticon.css">-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>

<body>  
	<!--voltar -->
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><a href="painel.php" class="mr-3">Voltar</a></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    
    <!-- Agendar -->
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light" id="agendar-section">
			<div class="container">
			          <div class="col-md-10 heading-section">
                        <form action="savecadastro.php" method="post" class="appointment-form">
                        <h2 class="text-center text-dark mt-5">Cadastrar</h2>
		    				<div class="">
			    				<div class="form-group">
			    					<input type="text" class="form-control" name="nome" placeholder="Nome Completo">
			    				</div>
                                <div class="form-group">
			    					<input type="text" class="form-control" minlength="14" maxlength="14" onkeypress="cpf_maskara()" id="cpf" name="cpf" placeholder="CPF">
			    				</div>
		    				</div>
		    				<div class="">
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>

	                      <select id="servico" name="servico" class="form-control">
	                      	<option value="">Selecione o serviço</option>
	                        <option value="Clareamento Dental" >Clareamento Dental</option>
	                        <option value="Cliníca Geral e Prevenção">Cliníca Geral e Prevenção</option>
	                        <option value="Exames" >Exames (Documentação Odontológica)</option>
	                        <option value="Odontologia (Clínica)">Odontologia (Clínica)</option>
	                        <option value="Outros serviços" >Outros serviços</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
		    					<div class="form-group">
			    					<input type="text" id="telefone" minlength="14" maxlength="14" onkeypress="telefone_mask()" class="form-control" name="telefone" placeholder="Telefone">
			    				</div>
		    				</div>
		    				<div class="">
			    				<div class="form-group">
			    					<div class="input-wrap">
			            		<input type="date" class="form-control appointment_date" name="data" placeholder="Date">
								<div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select id="horario" name="horario" class="form-control">
	                      	<option value="">Horário</option>
	                        <option value="11:00">11:00</option>
	                        <option value="12:30">12:00</option>
	                        <option value="16:30">16:30</option>
	                        <option value="18:00">18:00</option>
	                      </select>
	                    </div>
			    				</div>
		    				</div>
			            <div class="form-group">
            			    <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-secondary py-3 px-4">
			            </div>
		    				</div>
		    			</form>
			          </div>
			        </div>
		</section>

  
  <!-- animações/loader-->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
  <!-- Inputs Máscara-->
  <script src="../js/mask.js"></script>
</body>
