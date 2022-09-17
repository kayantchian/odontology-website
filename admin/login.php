<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin | Odonto Fortaleza</title>
    <meta charset="utf-8">
	<meta author="Kayan Tchian">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
	<!--Animation Aos -->
    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <!--<link rel="stylesheet" href="css/flaticon.css">-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">


  <style>
            .btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #383838;
}

a{
  text-decoration: none;
}
            </style>
    </head>
    <body>
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5"> Admin Area </h2>
        <div class="card my-5">
          <form class="card-body cardbody-color p-lg-5" action="autenticar_login.php" method="post">
            <div class="mb-3">
              <input type="text" class="form-control" id="login" aria-describedby="login" placeholder="Usuário" name="user">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="Senha" name="senha">
            </div>
            <div class="text-center"><button type="submit" name="action" class="btn btn-primary py-2 px-4 mb-2 w-100"> Acessar</button></div> </button></div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <?php
  include "../includes/footer.php";
  ?>

    </body>
    </html>