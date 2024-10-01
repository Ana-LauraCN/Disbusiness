<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylecadastro.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="../imagens/Fill out-bro.png" alt="">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome da empresa:</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite o nome da empresa"
                            required>
                    </div>

                    <div class="input-box">
                        <label for="cnpj">CNPJ:</label>
                        <input id="cnpj" type="text" name="cnpj" placeholder="xx.xxx.xxx/xxxx-xx"
                            pattern="\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}" required>
                    </div>

                    <div class="input-box">
                        <label for="nat">Natureza Jurídica:</label>
                        <input id="nat" type="text" name="nat" placeholder="(ME, Ltda, SA, MEI)" required>
                    </div>

                    <div class="input-box">
                        <label for="email">Email:</label>
                        <input id="email" type="email" name="email" placeholder="Digite um email valido" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Telefone para contato:</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="descrição">Descrição:</label>
                        <input id="descrição" type="descrição" name="descrição"
                            placeholder="Digite a descrição de sua empresa" required>
                    </div>

                    <div class="input-box">
                        <label for="endereço">Endereço:</label>
                        <input id="endereço" type="end" name="endereço" placeholder="Digite o endereço" required>
                    </div>

                    <div class="input-box">
                        <label for="CEP">CEP:</label>
                        <input id="CEP" type="cep" name="CEP" placeholder="xx.xxx-xxx" required>
                    </div>

                    <div class="input-box">
                        <label for="nomepro">Nome do Proprietario:</label>
                        <input id="nomepro" type="text" name="nomepro" placeholder="Digite o nome do Proprietario"
                            required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF:</label>
                        <input type="text" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha:</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]\).{8,}"
                            title="A senha deve conter pelo menos 8 caracteres, inclindo uma letra maiuscula, uma letra minuscula,um numero e caracter especial(!@#$%^&*)"
                            maxlength="8" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmpassword">Confirmar senha:</label>
                        <input id="confirmpassword" type="password" name="confirmpassword"
                            placeholder="Confirme sua senha" required>
                    </div>


                </div>

                <div class="categorias-empre">
                    <div class="categ-title">
                        <label for="categ" >Categoria da empresa</label>
                    </div>
                    <div class="categ">
                        <select name="categ" id="categ">
                            <option value=""  >Selecione: </option>
                            <option value="tec">Tecnologia</option>
                            <option value="saude">Saúde</option>
                            <option value="educ">Educação</option>
                            <option value="alimentacao">Alimentação e Bebidas</option>
                            <option value="trans">Transporte e Logística</option>
                            <option value="moda">Moda e Beleza</option>
                        </select>
                    </div>

                </div>

                <div class="continue-button">
                    <button>Enviar</button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>