<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <!-- Usando GET
        Crie um formulário que receba três números e verifique qual deles é o maior. Faça a validação dos campos de modo que o usuário tenha que preencher todos os campos. -->

    <h1>Exercício</h1>
    <h4>Usando GET</h4>
    <small>
        <ul>
            <li>Crie um formulário que receba três números e verifique qual deles é o maior</li>
            <li>Faça a validação dos campos de modo que o usuário tenha que preencher todos os campos</li>
        </ul>
    </small>
    <hr>
    <form action = "aula4-ex2.php" method = "get">
        <input type = "number" name = "num1" placeholder = "Valor 1" required>
        <input type = "number" name = "num2" placeholder = "Valor 2" required>
        <input type = "number" name = "num3" placeholder = "Valor 3" required>
        <button type = "submit" name = "enviar" value = "enviar">Maior valor</button>
    </form>
    <br>
    <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    $array = [];

    array_push($array, $num1, $num2, $num3);
    sort($array);

    echo end($array);
    
    // ou
    // echo $array[count($array) - 1 ];
    ?>
</body>
</html>