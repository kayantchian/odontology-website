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
<?php
include "includes/header.php";
include "conexao.php";
?>

<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$servico = $_POST['servico'];
$data = $_POST['data'];
$horario = $_POST['horario'];

echo '<script>alert($servico,$data,$hora)</script>';

$inserir = $con -> query ("INSERT INTO clientes VALUES ('0', '$nome', '$cpf', '$telefone', '$servico','$data','$horario')");
    if ($inserir) {
        echo '<script>alert("CADASTRO REALIZADO COM SUCESSO!")</script>';
    } else {
        echo '<script>alert("NÃO FOI POSSÍVEL REALIZAR CADASTRO!")</script>';
    }
?>
