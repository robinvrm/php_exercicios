<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>

<body>
    <h1>Quantos dias já se passaram desde que o ano começou?</h1>
    <hr>

    <?php
    echo $inicioAno = strtotime(date( 'Y' ) . '-01-01');
    echo $hoje = strtotime(date("Y-m-d"));

    $diferencaDatas = $hoje - $inicioAno;
    echo date('d', $diferencaDatas);
    echo "<hr>";
    echo "Já se passaram: " . $dias = floor($diferencaDatas / (60 * 60 * 24)) . " dias.";

    ?>
    <hr>
</body>

</html>