<?php
include ('../sql/conexao.php');
?>

<head>
<title>Autenticando | Odonto Fortaleza</title>
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

    <script>
        function ErrorAuthentication(){
            alert("Credênciais Inválidas!");
        }
    </script>

</head>
<body>
    <?php
  
    $user = $_POST['user'];
    $senha = sha1($_POST['senha']);
    $resultado = $con -> query ("SELECT * FROM admin WHERE user = '$user' AND senha = '$senha'");
    session_start();
    if(mysqli_num_rows($resultado) > 0) {
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['senha'] = $_POST['senha'];
        header("location: painel.php");
    } else {
        echo '<script>ErrorAuthentication()</script>';
        header("location:login.php");
       
    }

?>
    <?php
include ('../includes/footer.php');
?>
</body>
</html>