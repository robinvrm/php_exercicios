<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Senha</title>
</head>

<body>
    <!--1. Crie um formulário que receba um login e senha de um usuário. Faça validação
    dos campos de modo que o usuário tenha que preencher todos os campos. Se o login for
    "Robin" e a senha "desenv", exiba uma mensagem na tela "logado com sucesso" e não exiba
    mais o formulário de login.-->
    <div id="esconder">
        <h1>Formulário com login e senha</h1>

        <form action="./ex01.php" method="post">
            <input type="password" name="login" placeholder="login">
            <input type="password" name="senha" placeholder="senha">
            <button type="login" onclick="logar(); return false" Placeholder="Enter">Enter</button>
        </form>
    </div>
    <?php
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    // if (!is_string($login)) {
    //     die("Preencha campo de login e senha válido");
    // }
    // if (!is_string($senha)) {
    //     die("Preencha campo de login e senha válido");
    // }

    if ($login === 'Robin' && $senha === 'desenv') {
        echo "logado com sucesso";
        // echo "<a href=teste.php><a/>";
    } elseif ($login != 'Robin' || $senha != 'desenv') {
        echo "Preencha campo de login e senha válido";
        die();
    }
    ?>

</body>

</html>

<!-- Tentei ocultar a tela de login com javascript, não deu certo -->

<!-- <script>
        "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" >
        $('button').click(function() {
            $("#esconder").hide()
        })
    </script>

    <script>
        function logar() {

            var login = document.getElementById('login').value;
            var senha = document.getElementById('senha').value;

            if (login === 'Robin' && senha === 'desenv') {
                document.querySelector('#esconder').style.display = "hidden";

            }

        }
    </script>