<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title> Exibir clientes </title>
   <style>
       body {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  background-color: #212529;
  font-weight: 300; }

p {
  color: rgba(255, 255, 255, 0.5);
  font-weight: 300; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.content {
  padding: 7rem 0; }

h2 {
  font-size: 20px;
  color: #fff; }

.custom-table {
  min-width: 900px; }
  .custom-table thead tr, .custom-table thead th {
    padding-bottom: 30px;
    border-top: none;
    border-bottom: none !important;
    color: #fff;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: .2rem; }
  .custom-table tbody th, .custom-table tbody td {
    color: #777;
    font-weight: 400;
    padding-bottom: 20px;
    padding-top: 20px;
    font-weight: 300;
    border: none;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
    .custom-table tbody th small, .custom-table tbody td small {
      color: rgba(255, 255, 255, 0.3);
      font-weight: 300; }
    .custom-table tbody th a, .custom-table tbody td a {
      color: rgba(255, 255, 255, 0.3); }
    .custom-table tbody th .more, .custom-table tbody td .more {
      color: rgba(255, 255, 255, 0.3);
      font-size: 11px;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: .2rem; }
  .custom-table tbody tr {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
    .custom-table tbody tr:hover td, .custom-table tbody tr:focus td {
      color: #fff; }
      .custom-table tbody tr:hover td a, .custom-table tbody tr:focus td a {
        color: #fdd114; }
      .custom-table tbody tr:hover td .more, .custom-table tbody tr:focus td .more {
        color: #fdd114; }
  .custom-table .td-box-wrap {
    padding: 0; }
  .custom-table .box {
    background: #fff;
    border-radius: 4px;
    margin-top: 15px;
    margin-bottom: 15px; }
    .custom-table .box td, .custom-table .box th {
      border: none !important; }
   </style>  

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> CRUD </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cadastro.php"> CADASTRO </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="exibirclientes.php"> EXIBIR </a>
              </li>
              <li class="nav-item dropdown">
                  <!-- dropdown pesquisa-->
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PESQUISA
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#"> PESQUISA POR NOME </a></li>
                  <li><a class="dropdown-item" href="#"> PESQUISA POR CPF </a></li>
                  <li><a class="dropdown-item" href="#"> PESQUISA POR RG </a></li>
                  <li><a class="dropdown-item" href="#"> PESQUISA POR CIDADE </a></li>
                </ul>
              </li>
              <!-- fim do dropdown-->
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


<!-- tabela !-->
<div class="content">
    
    <div class="container">
      <h2 class="mb-5"> CLIENTES CADASTRADOS </h2>
      

      <div class="table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>
              
              <th scope="col"> ID </th>
              <th scope="col"> NOME </th>
              <th scope="col"> E-MAIL </th>
              <th scope="col"> TELEFONE </th>
              <th scope="col"> CPF </th>
              <th scope="col"> RG </th>
              <th scope="col"> RUA </th>
              <th scope="col"> BAIRRO </th>
              <th scope="col"> Nº </th>
              <th scope="col"> CIDADE </th>
              <th scope="col"> AÇÕES </th>
            </tr>
          </thead>
          <tbody>
            
            <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($con, $sql);
                while ($dados = mysqli_fetch_array($resultado)) {
                
            ?>
            <tr scope="row">
            <td><?php echo $dados['id']; ?> </td>
                <td><?php echo $dados['nome']; ?> </td>
                <td><?php echo $dados['email']; ?> </td>
                <td><?php echo $dados['telefone']; ?> </td>
                <td><?php echo $dados['cpf']; ?> </td>
                <td><?php echo $dados['servico']; ?> </td>
                <td> 
                <a href="deletar.php?id=<?php echo $dados['id'];?>">
                <i class="bi-person-x"></i>
                </a>
                </td> 
                <td> 
                <a href="editar.php?id=<?php echo $dados['id'];?>">
                <i class="bi-pen"></i>
                </a>
                </td> 
              
            </tr>
            <?php
             };
            ?>
          </tbody>
        </table>
      </div>


    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <?php
    include "includes/footer.html";
    ?>
</body>
</html>