<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Login</title>
    <?php include 'includehead.php'; ?>
</head>
<style>
    form {
        text-align: center;
        padding-top: 2%;

    }

    button {
        height: 30px;
        width: 50px;
        border: 1px solid black;
        border-radius: 10px;
    }

    div {
        text-align: center;
        padding-top: 8%;
    }

    p {
        text-align: center;
        padding-top: 8%;

    }
</style>

<body>

    <?php

    $login = $_POST["login"];
    $senha = $_POST["senha"];
    // if (!is_string($login)) {
    //     die("Preencha campo de login e senha válido");
    // }
    // if (!is_string($senha)) {
    //     die("Preencha campo de login e senha válido");
    // }

    if ($login === 'iago' && $senha === '123456') {
        echo "<div>Logado com sucesso! Clic em OK para seguir ao Menu!</div>";
        echo "<a href=teste.php><a/>";
    } elseif ($login != 'iago' || $senha != '123456') {
        echo "<p>Preencha campo de login e senha válido</p>";
        die();
    }
    ?>
    <form action="./menu.php" method="post">
        <button type="submit">OK</button>
    </form>
    <?php include 'includefooter.php'; ?>
</body>
</html>