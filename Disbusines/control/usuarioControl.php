<?php

    include_once '../model/DTO/UsuarioDTO.php';
    include_once '../model/DAO/UsuarioDAO.php';
    
    $nome = $_POST['nome'];
    $email= $_POST['email'];


    // print_r($nome);
    // echo "<br>";
    // print_r($email);
   
    // var_dump($nome, $idade);

    $usuarioDTO = new UsuarioDTO();

    $usuarioDTO->setNome($nome);
    $usuarioDTO->setEmail($email);

    // var_dump($usuarioDTO);

    $usuarioDAO = new UsuarioDAO();

    $sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);

    // echo "".$sucesso;


    ?>

<?php
// success.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']); // Pega o nome do POST e sanitiza
} else {
    // Redireciona para a página de login se não houver um POST
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylesuccess.css"> <!-- Link para o CSS de sucesso -->
    <title>Cadastrado com Sucesso</title>
</head>

<body>
    <div class="container">
        <h1>Cadastrado com Sucesso!</h1>
        <h2>Bem-vindo, <?php echo $nome; ?>!</h2> <!-- Exibe o nome do usuário -->
        <p>Agora você pode começar a divulgar e conhecer microempresas!</p>
        <a href="../view/cadastroUsuario.php" class="btn-back">Voltar ao Login</a> <!-- Link para voltar ao login -->
    </div>
</body>

</html>
