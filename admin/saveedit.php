<?php
    include_once('../sql/conexao.php');

    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $servico = $_POST['servico'];
        $data = $_POST['data'];
        $horario = $_POST['horario'];

        $sqlUpdate = "UPDATE clientes SET Nome='$nome', CPF='$cpf', Telefone='$telefone', 
        Servico='$servico', Data='$data', horario='$horario' WHERE id='$id'";

        $resultado = $con->query($sqlUpdate);
    }
    header("location: painel.php");
?>