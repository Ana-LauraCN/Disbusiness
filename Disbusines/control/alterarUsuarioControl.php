<?php
require_once '../model/DTO/usuarioDTO.php';
require_once '../model/DAO/usuarioDAO.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$id = $_POST['id_user'];

$usuarioDTO = new UsuarioDTO();

$usuarioDTO->setIdUsuario($id);
$usuarioDTO->setNome($nome);
$usuarioDTO->setEmail($email);

// var_dump($usuarioDTO);

$usuarioDAO = new UsuarioDAO();

$sucesso = $usuarioDAO->alterarUsuario($usuarioDTO);

// if($sucesso){
//     header('Location:../view/listarUsuarios.php');
// }



?>
<?php
// successAlterar.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $id_user = htmlspecialchars($_POST['id_user']);
    // Aqui você pode adicionar a lógica para atualizar o usuário no banco de dados.
    
    // Simulando a atualização com sucesso (substitua pelo código real)
    $atualizado = true; // Isso deve ser o resultado da sua operação de atualização no banco de dados.

    if ($atualizado) {
        $mensagem = "Alterado com sucesso!";
    } else {
        $mensagem = "Erro ao alterar usuário!";
    }
} else {
    // Redireciona para a página de alteração se não houver um POST
    header("Location: alterarUsuario.php?id_user=" . $id_user);
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylesuccess.css"> <!-- Link para o CSS de sucesso -->
    <title>Alteração Realizada</title>
</head>

<body>
    <div class="container">
        <h1><?php echo $mensagem; ?></h1>
        <h2>Bem-vindo, <?php echo $nome; ?>!</h2>
        <p>As informações do usuário foram alteradas com sucesso!</p>
        <a href="../view/listarUsuarios.php" class="btn-back">Voltar para a Lista de Usuários</a> <!-- Link para voltar -->
    </div>
</body>
</html>
