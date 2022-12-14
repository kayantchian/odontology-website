<?php 
	session_start();
    include 'protect.php';
		
    if(!empty($_GET['id']))
    {
        include_once '../sql/conexao.php';

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM clientes WHERE id = $id";
        $resultado = $con->query($sqlSelect);


        if($resultado-> num_rows >0)
        {   
            while($user_data = mysqli_fetch_assoc($resultado))
            {
            $nome = $user_data['Nome'];
            $cpf = $user_data['CPF'];
            $telefone = $user_data['Telefone'];
            $servico = $user_data['Servico'];
            $data = $user_data['Data'];
            $horario = $user_data['Horario'];
        }
            
        }
        else{
            header("location: painel.php");
        }
    }
    else{
        header("location: painel.php");
    }
    
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
                        <form action="saveedit.php" method="post" class="appointment-form">
                        <h2 class="text-center text-dark mt-5">Editar </h2>
		    				<div class="">
			    				<div class="form-group">
			    					<input type="text" class="form-control" name="nome" placeholder="Nome Completo" value="<?php echo $nome ?>">
			    				</div>
                                <div class="form-group">
			    					<input type="text" class="form-control" minlength="14" maxlength="14" onkeypress="cpf_maskara()" id="cpf" name="cpf" placeholder="CPF" value="<?php echo $cpf ?>">
			    				</div>
		    				</div>
		    				<div class="">
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>

	                      <select id="servico" name="servico" class="form-control" selected="<?php echo $nome ?>">
	                      	<option value="">Selecione o servi??o</option>
	                        <option value="Clareamento Dental" <?php if($servico == 'Clareamento Dental'): ?> selected="selected"<?php endif; ?>>Clareamento Dental</option>
	                        <option value="Clin??ca Geral e Preven????o" <?php if($servico == 'Clin??ca Geral e Preven????o'): ?> selected="selected"<?php endif; ?>>Clin??ca Geral e Preven????o</option>
	                        <option value="Exames" <?php if($servico == 'Exames'): ?> selected="selected"<?php endif; ?>>Exames (Documenta????o Odontol??gica)</option>
	                        <option value="Odontologia (Cl??nica)" <?php if($servico == 'Odontologia (Cl??nica)'): ?> selected="selected"<?php endif; ?>>Odontologia (Cl??nica)</option>
	                        <option value="Outros servi??os" <?php if($servico == 'Outros servi??os'): ?> selected="selected"<?php endif; ?>>Outros servi??os</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
		    					<div class="form-group">
			    					<input type="text" id="telefone" minlength="14" maxlength="14" onkeypress="telefone_mask()" class="form-control" name="telefone" placeholder="Telefone" value="<?php echo $telefone ?>">
			    				</div>
		    				</div>
		    				<div class="">
			    				<div class="form-group">
			    					<div class="input-wrap">
			            		<input type="date" class="form-control appointment_date" name="data" placeholder="Date" value="<?php echo $data ?>">
								<div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select id="horario" name="horario" class="form-control" value="<?php echo $horario ?>">
	                      	<option value="">Hor??rio</option>
	                        <option value="11:00" <?php if($horario == '11:00'): ?> selected="selected"<?php endif; ?>>11:00</option>
	                        <option value="12:30" <?php if($horario == '12:30'): ?> selected="selected"<?php endif; ?>>12:00</option>
	                        <option value="16:30" <?php if($horario == '16:30'): ?> selected="selected"<?php endif; ?>>16:30</option>
	                        <option value="18:00" <?php if($horario == '18:00'): ?> selected="selected"<?php endif; ?>>18:00</option>
	                      </select>
	                    </div>
			    				</div>
		    				</div>
			            <div class="form-group">
                          <input type="hidden" name="id" value=<?php echo $id ?>>
			              <input type="submit" name="update" value="Atualizar" class="btn btn-secondary py-3 px-4">
			            </div>
		    				</div>
		    			</form>
			          </div>
			        </div>
		</section>

  
  <!-- anima????es/loader-->
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
  <!-- Inputs M??scara-->
  <script src="../js/mask.js"></script>
</body>