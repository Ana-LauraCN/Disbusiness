<?php
require_once '../model/DAO/usuarioDAO.php';
require_once '../model/DTO/usuarioDTO.php';

$id_user = $_GET['id_user'];
//var_dump($id_user);

$usuarioDAO = new UsuarioDAO();

$retorno = $usuarioDAO->pesquisarUsuarioPorId($id_user);

// var_dump($retorno);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylealteraruser.css">
    <script>
        function confirmAlterar() {
            return confirm("Deseja realmente alterar?");
        }
    </script>
    <title>Alterar</title>
</head>
<body>
    
    <form action="../control/alterarUsuariocontrol.php" method="post" onsubmit="return confirmAlterar();">
        <input type="hidden" name="id_user" value="<?php
        echo $retorno["id_user"];?>"><br>
    
        Nome: <input type="text" name = "nome" value="<?php  echo $retorno["nome"];?>"><br>
        Email: <input type="email" name = "email" value="<?php  echo $retorno["email"];?>"><br>
        <input type="submit" value="Alterar">



    </form>
</body>
</html>