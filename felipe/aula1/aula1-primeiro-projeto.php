<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro projeto PHP</title>
</head>
<body>
    <h1>Primeiro projeto PHP</h1>

    <?php 
    $num1 = 10;
    $num2 = 20;

    if ($num1 > $num2) {
        echo "número 1 é maior que número 2";
    } else {
        echo "número 2 tem valor de $num2 e é maior que número 1, que tem o valor de $num1";
    }
    ?>
</body>
</html>