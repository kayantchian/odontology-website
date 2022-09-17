<?php
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.css">
    <title> DELETAR </title>
</head>
<body>
                   
<?php
$id = $_GET['id'];
echo "ID DO CLIENTE:" .$id. "<br>";
$consulta =  $con -> query ("DELETE  FROM clientes WHERE id='$id'");

if ($consulta) {
echo "Usuário eliminado";
} else {
  echo "Usuário não eliminado";
}

?>
                
</body>
</html>