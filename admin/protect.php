<?php
 if((!isset($_SESSION['user']) == true) && (!isset($_SESSION['senha']) == true)) {
    die("<h1 align='center'>Erro: Sem autorização<h1>");
    unset($_SESSION['user']);
    unset($_SESSION['senha']);
    header("location: login.php");
}

$logado = $_SESSION['user'];

?>