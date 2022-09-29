<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <!-- Usando POST
        Crie um formulário que receba um login e senha de um usuário. Faça a validação dos campos de modo que usuário tenha que preencher todos os campos. Se o login for "robin" e a senha"desenv',exiba uma mensagem na tela de "logado com sucesso" e não exiba mais o formulário de login. -->
    <div id = "header">
        <h1>Exercício</h1>
        <h4>Usando POST</h4>
        <small>
            <ul>
                <li>Crie um formulário que receba um login e senha de um usuário</li>
                <li>Faça a validação dos campos de modo que usuário tenha que preencher todos os campos</li>
                <li>Se o login for "robin" e a senha "desenv',exiba uma mensagem na tela de "logado com sucesso" e não exiba mais o formulário de login</li>
            </ul>
        </small>
        <hr>
        <form action = "aula4-ex3-inicio.php" method = "post">
            <input type = "text" name = "login" id = "login" placeholder = "login" required>
            <input type = "password" name = "senha" id = "senha" placeholder = "Senha" required>
            <button type = "submit" class = "botao" id = "botao"><strong>Entrar</strong></button>
        </form>
        <br>
    </div>
    <div id = "home"></div>
</body>
</html>