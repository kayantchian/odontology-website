<?php
include "sql\conexao.php";
?>

<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$servico = $_POST['servico'];
$data = $_POST['data'];
$horario = $_POST['horario'];

$inserir = $con ->query ("INSERT INTO clientes VALUES ('0', '$nome', '$cpf', '$telefone', '$servico','$data','$horario')");
    if ($inserir) {
        echo '<script>alert("CADASTRO REALIZADO COM SUCESSO!")</script>';
    } else {
        echo '<script>alert("NÃO FOI POSSÍVEL REALIZAR CADASTRO!")</script>';
    }
?>
