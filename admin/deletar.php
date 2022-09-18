<?php
  session_start();
  include 'protect.php';
  if(!empty($_GET['id'])){
    include_once "../sql/conexao.php";
    
    $id = $_GET['id'];
    echo "ID DO CLIENTE:" .$id. "<br>";
    $sqlSelect = "SELECT * FROM clientes WHERE id=$id";

    $resultado = $con -> query($sqlSelect);

    if($resultado->num_rows > 0) {
      $sqlDelete = "DELETE FROM clientes WHERE id=$id";
      $resultadoDelete = $con -> query($sqlDelete);
      header("location: painel.php");
    }
    else{
      header("location: painel.php");
    }
  }
  


?>
                
</body>
</html>