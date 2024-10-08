<?php
    include_once '../control/listarUsuariosControl.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylelistauser.css">
    <title>Listar Usuário</title>
    <script>
        // Função para exibir o alerta
        function showAlert() {
            alert("Usuário excluído com sucesso!");
        }

        // Verifica se a mensagem está presente na URL e chama a função showAlert
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('msg') && urlParams.get('msg') === 'excluido') {
                showAlert();
            }
        };
    </script>
</head>
<body>
   
    <table >
        <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-MAIL</th>
        <th colspan="2">Operacões</th>
       
    </tr>
    <?php foreach($todos as $t){?>
           <tr>
                <td><?php echo $t['id_user']?></td>
                <td><?php echo $t['nome']?></td>
                <td><?php echo $t['email']?></td>
            <td>
                <a href="../control/excluirUsuariosControl.php?id_user=" onclick="confirmDelete('<?php echo $t['id_user'] ?>')">
                  <button style="background-color: red; color: oldlace;">Excluir</button>  
                </a>
            
            </td>
            <td>
                <a href="alterarUsuario.php?id_user=<?php echo $t['id_user']?>">
                    <button style="background-color: green;color: oldlace;">Alterar</button>
                </a>
            
            </td>

           </tr>

        <?php }?>  
           

    </table>
    <script>
        function confirmDelete(id) {
            const confirmAction = confirm("Tem certeza que deseja excluir este usuário?");
            if (confirmAction) {
                window.location.href = "../control/excluirUsuariosControl.php?id_user=" + id;
            }
        }
    </script>
</body>
</html>