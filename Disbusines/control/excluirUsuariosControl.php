<?php
include_once'../model/DTO/UsuarioDTO.php';
include_once'../model/DAO/UsuarioDAO.php';
$id_user =$_GET['id_user'];

//var_dump($id_user);

$usuarioDAO = new UsuarioDAO();

$excluido = $usuarioDAO->excluirUsuario($id_user);

// if($sucesso){
//     header('Location:../view/listarUsuarios.php');
// }


if ($excluido) {
    // Redireciona para a página de listagem com um alerta
    header("Location: ../view/listarUsuarios.php?msg=excluido");
    exit();
} else {
    // Caso de erro na exclusão, redireciona para a lista sem mensagem
    header("Location: ../view/listarUsuarios.php?msg=erro");
    exit();
}


?>