<?php

    include_once '../model/DTO/UsuarioDTO.php';
    include_once '../model/DAO/UsuarioDAO.php';
    
    $nome = $_POST['nome'];
    $email= $_POST['email'];


    print_r($nome);
    echo "<br>";
    print_r($email);
   
    // var_dump($nome, $idade);

    $usuarioDTO = new UsuarioDTO();

    $usuarioDTO->setNome($nome);
    $usuarioDTO->setEmail($email);

    // var_dump($usuarioDTO);

    $usuarioDAO = new UsuarioDAO();

    $sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);

    echo "".$sucesso;
    ?>