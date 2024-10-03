<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylelogin.css">
    <title>DisBusiness - LOGIN</title>
</head>

<body>
    <div class="principal">
        <!-- //main-login -->
        <div class="antes-login">
            <!-- //left-login -->
            <h1>Faça login<br> E comece agora a divulgar e conhecer microempresas!
            </h1>
            <img src="../imagens/business.svg" alt="Empresa" class="antes-login-animacao">
        </div>
        <div class="depois-login">
            <!-- //right-login -->
            <div class="carta-login">
                <!-- //card-login -->
                <h1>LOGIN</h1>
                <form action="../control/usuarioControl.php" method="post">
               
                <div class="text-field">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="nome">
                </div>
                <div class="text-field">
                    <label for="idade">Email</label>
                    <input type="email" name="email" placeholder="email">
                </div>

                <input type="submit" class="btn-loginn" value="cadastrar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>