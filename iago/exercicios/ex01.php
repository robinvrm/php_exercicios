<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>

<body>
    <h1>insira um número</h1>
    <form action="./ex01.php" method="post">
        <input type="text" name="number">
        <button type="submit">Enviar Dados</button>

    </form>


    <?php


    $number = $_POST['number'];

    if ($number >= 0 && $number <= 12) {
        echo "Bom dia";
    }
    if ($number >= 13 && $number <= 18) {
        echo "Boa tarde";
    }
    if ($number >= 19 && $number <= 24) {
        echo "Boa noite";
    } elseif ($number < 0 || $number >= 25) {
        echo "insira um número válido maior ou igual a 0 e menor ou igual a 24";
    }




    ?>


</body>

</html>