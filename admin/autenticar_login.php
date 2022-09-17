
<title>Autenticando | Odonto Fortaleza</title>
    <?php
    session_start();
    
    if(isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['senha'])){
        //Acessa apenas se os dados foram preenchidos.
        include_once('../sql/conexao.php');
        $user = $_POST['user'];
        $senha = sha1($_POST['senha']);

        // Validando login
        $resultado = $con -> query ("SELECT * FROM admin WHERE user = '$user' AND senha = '$senha'");
        

        if(mysqli_num_rows($resultado) < 1) {
            // Credênciais inválidas
            unset($_SESSION['user']);
            unset($_SESSION['senha']);
            header("location:login.php");
        } else {
            //Logado
            $_SESSION['user'] = $user;
            $_SESSION['senha'] = $senha;
            header("location: painel.php");
    
        }
    }
    else{
        // Não acessa
        header("location: login.php");
    }     

    

?>
