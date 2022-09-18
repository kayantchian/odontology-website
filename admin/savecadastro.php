<?php
session_start();
include 'protect.php';
include '../sql/conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$servico = $_POST['servico'];
$data = $_POST['data'];
$horario = $_POST['horario'];


$inserir = $con -> query ("INSERT INTO clientes VALUES ('0', '$nome', '$cpf', '$telefone', '$servico','$data','$horario')");
    if ($inserir) {
        header("location: cadastrar.php");
        echo '<script>alert("Cadastro Efetuado!");</script>';
    } else {
        echo '<script>alert("NÃO FOI POSSÍVEL REALIZAR CADASTRO!");</script>';
        header("location: painel.php");
    }
?>