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

<?php
include_once "conexao.php";
?>

<?php
if(isset($_POST['cadastrar']) && !empty($_POST['nome']) && !empty($_POST['cpf']) && !empty($_POST['telefone']) && !empty($_POST['servico']) && !empty($_POST['data']) && !empty($_POST['horario'])){
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$servico = $_POST['servico'];
	$data = $_POST['data'];
	$horario = $_POST['horario'];


	$inserir = $con -> query ("INSERT INTO clientes VALUES ('0', '$nome', '$cpf', '$telefone', '$servico','$data','$horario')");
	    if ($inserir) {
		$code = 1;
	    } else {
		$code = 0;
	    }
}
else {
    header("location:../index.php");
  }
?>

<body>

<!-- Contato rápido header -->
<div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 3257 2356</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">odontofortaleza@gmail.com</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	<!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" style="align:left" href="index.php"><img src="../images/logo.png" width="250" height="100"></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="../index.php#home-section" class="nav-link"><span>Início</span></a></li>
	          <li class="nav-item"><a href="../index.php#sobre-section" class="nav-link"><span>Sobre</span></a></li>
	          <li class="nav-item"><a href="../index.php#servicos-section" class="nav-link"><span>Serviços</span></a></li>
	          <li class="nav-item"><a href="../index.php#doutores-section" class="nav-link"><span>Doutores</span></a></li>
	          <li class="nav-item"><a href="../index.php#contato-section" class="nav-link"><span>Contato</span></a></li>
	          <li class="nav-item cta mr-md-1"><a href="../consulta.php#agendar-section" class="nav-link">Consulta</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>


<section class="ftco-intro img" style="background-image: url(../images/backgrounds/bg-3.jpg);">
			<div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
          	<div class="mt-5">
				<br><br>
              <?php
                  if($code==1){
                    echo'<h2 class="mb-4" style="color:white" >Recebemos o seu<br>cadastro.</h2>';
                    echo'<p class="mb-4" style="color:white" >Nós, da Clínica Odonto Fortaleza, agradecemos pela preferência. Prezamos pela qualidade e bem estar de nossos clientes.</p>';
	                    }
                  else{
                    echo'<h2 class="mb-4" style="color:white" >Infelizmente ocorreu <br>um erro!</h2>';
                    echo'<p class="mb-4" style="color:white" >Nós, da Clínica Odonto Fortaleza, agradecemos pela preferência. Prezamos pela qualidade e bem estar de nossos clientes.</p>';
	                                      }
              ?>
	            </div>
          </div>
        </div>
      </div>
    </section>

<!-- footer -->
    <footer class="ftco-footer ftco-section img" style="background-image: url(../images/footer-bg.jpg);">
    	<div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Odonto Fortaleza</h2>
              <p>Os melhores dentistas cuidando da sua saúde bucal.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Navegação</h2>
              <ul class="list-unstyled">
                <li><a href="../index.php#home-section"><span class="icon-long-arrow-right mr-2"></span>Ínicio</a></li>
                <li><a href="../index.php#sobre-section"><span class="icon-long-arrow-right mr-2"></span>Sobre</a></li>
                <li><a href="../index.php#servicos-section"><span class="icon-long-arrow-right mr-2"></span>Serviços</a></li>
                <li><a href="../index.php#doutores-section"><span class="icon-long-arrow-right mr-2"></span>Doutores</a></li>
                <li><a href="../index.php#contato-section"><span class="icon-long-arrow-right mr-2"></span>Contato</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Alguma dúvida?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">R. Júlio Siqueira, 390 - Dionísio Torres, Fortaleza - CE, 60120-320</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 3257 2356</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">odontofortaleza@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
            <p><!-- Copyright -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <b>Kayan Tchian e Thalita</b>
          </p>
          </div>
        </div>
      </div>
    </footer>


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
    
  </body>
