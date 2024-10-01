<?php

     include 'Conexao.php';
     include_once '../model/DTO/UsuarioDTO.php';

class UsuarioDAO{
    public $pdo = null;
    public function __construct(){
        $this->pdo = Conexao::getInstance();
    }
    public function salvarUsuario(UsuarioDTO $usuarioDTO){
        try {
            // Adiciona o campo 'senha' na consulta
            $sql = "INSERT INTO usuario (nome, email) VALUES (?, ?)";
            $stmt = $this->pdo->prepare($sql);
    
            $nome = $usuarioDTO->getNome();
            $email = $usuarioDTO->getEmail();
  // Obtém a senha do objeto DTO
    
            // Faz o bind dos parâmetros
            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $email);
    
            // Executa a consulta
            $retorno = $stmt->execute();
    
            return $retorno;
        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
    

    public function listarUsuarios(){
    try{
    $sql = "SELECT * FROM USUARIO";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();

    $retorno = $stmt->fetchALL(PDO::FETCH_ASSOC);
    return $retorno;

    }catch(PDOException $exe){
        echo $exe->getMessage();
    }
}

public function excluirUsuario($id_user){
    try{
        $sql= "DELETE FROM USUARIO WHERE id_user = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1,$id_user);
       

        $retorno = $stmt->execute();
        return $retorno;

    }catch(PDOException $exe){
        echo $exe->getMessage();
    }
}

public function pesquisarUsuarioPorId($id){
    try{
        $sql = "SELECT * FROM usuario WHERE id_user = {$id}";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
        return $retorno;

    }catch(PDOException $exe){
        echo $exe->getMessage(); 
    }
}

public function alterarUsuario(UsuarioDTO $usuarioDTO)
    {
        try {
            $sql = "UPDATE `usuario` SET `nome`=?, `email` =? 
            WHERE `id_user`= ?";
            $stmt = $this->pdo->prepare($sql);
            $idUsuario = $usuarioDTO->getIdUsuario();
            $nome = $usuarioDTO->getNome();
            $email = $usuarioDTO->getEmail();

            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $email);
            $stmt->bindValue(3, $idUsuario);

            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}



?>