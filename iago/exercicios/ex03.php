<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>

<body>
    <h1>Insira 3 números inteiros</h1>

    <form action="./ex03.php" method="post">
        <input type="number" name="n1" placeholder="número 1">
        <input type="number" name="n2" placeholder="número 2">
        <input type="number" name="n3" placeholder="número 3">
        <button type="submit">Enviar</button>
    </form>

    <?php


    $numero1 = $_POST['n1'];
    $numero2 = $_POST['n2'];
    $numero3 = $_POST['n3'];
    $array = [];

    array_push($array, $numero1, $numero2, $numero3);
    sort($array);

    echo end($array);
    ?>


</body>

</html>