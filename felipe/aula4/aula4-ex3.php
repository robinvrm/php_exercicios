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
        <form action = "aula4-ex3.php" method = "post">
            <input type = "email" name = "email" id = "email" placeholder = "E-mail" required>
            <input type = "password" name = "senha" id = "senha" placeholder = "Senha" required>
            <button type = "submit" class = "botao" id = "botao" onclick = "entrar()"><strong>Entrar</strong></button>
        </form>
        <br>
    </div>
    <div id = "home"></div>
    <?php
    $login = $_POST['email'];
    $senha = $_POST['senha'];
    
    function entrar() 
    {
        if ($login == "robin" && $senha == "desenv") {
            $none = document->querySelector('#header');

            document.querySelector('#home').innerHTML = 'Logado com sucesso';
        }
    }
//     .style.display = 'none';

//     ideia 1
//     $sumir = '<style>
// #conteudo {
//     display: none !important;
// }
// </style>';

// $html = $html . $sumir;
// echo $html;

// ideia 2
// $html = '... Conteudo do HTML ...';

// $doc = new DOMDocument();
// $doc->loadHTML($html);

// // "conteudo" é o ID, não adicione o #
// $tagConteudo = $doc->getElementById('conteudo');

// $tagConteudo->setAttribute('style', 'display: none;');
    ?>
</body>
</html>