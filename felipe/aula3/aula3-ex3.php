<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 3</title>
</head>
<body>
    <!-- Faça um script em PHP que leia três números inteiros e mostre eles na ordem crescente. -->

    <h1>Exercício 3</h1>
    <small>
        Faça um script em PHP que leia três números inteiros e mostre eles na ordem crescente
    </small>
    <hr>
    <form action = "aula3-ex3.php" method = "post">
        <input type = "text" name = "num1" placeholder = "Valor 1">
        <input type = "text" name = "num2" placeholder = "Valor 2">
        <input type = "text" name = "num3" placeholder = "Valor 3">
        <button type = "submit" name = "enviar" value = "enviar">Ordenar</button>
    </form>
    <br>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $array = [];

    array_push($array, $num1, $num2, $num3);
    // $array = [3, 2, 5];
    sort($array);
    foreach ($array as $value) 
    {
        echo " $value.";
    }
    ?>
</body>
</html>