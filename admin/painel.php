<?php
    session_start();
    include_once '../sql/conexao.php';
    include 'protect.php';

    $sql = "SELECT * FROM clientes ORDER BY cod DESC";
    $resultado = $con->query($sql);

?>

<head>
<title>Admin | Odonto Fortaleza</title>
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
</head>

<body>
    <!-- Sair -->
    <div class="py-1 bg-black top">
            <div class="container">
                <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                    <div class="col-lg-12 d-block">
                        <div class="row d-flex">
                            <div class="col-md pr-4 d-flex topper align-items-center">
                                <div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
                            </div>
                            <div class="col-md pr-4 d-flex topper align-items-center">
                                <div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
                            </div>
                            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                                <p class="mb-0 register-link"><a href="sair.php" class="mr-3">Sair</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Lista -->
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-1">
        <h2 class="text-center text-dark mt-5"> <b>Painel</b> </h2>
        <div class="card my-2">
        <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Serviço</th>
                    <th scope="col">Data</th>
                    <th scope="col">Horário</th>
                    <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        
                        while($user_data = mysqli_fetch_assoc($resultado)){
                            echo "<tr>";
                            echo "<td>".$user_data['Cod']."</td>";
                            echo "<td>".$user_data['Nome']."</td>";
                            echo "<td>".$user_data['CPF']."</td>";
                            echo "<td>".$user_data['Telefone']."</td>";
                            echo "<td>".$user_data['Servico']."</td>";
                            echo "<td>".$user_data['Data']."</td>";
                            echo "<td>".$user_data['Horario']."</td>";
                            echo "<td>
                                <a class='btn btn-primary' href='editar.php?id=$user_data[Cod]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                              </svg>
                            </td>;";

                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>