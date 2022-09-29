<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro projeto PHP</title>
</head>
<body>
    <!-- // $nome = "Felipe";
    // $sobrenome = "Holtz de Andrade";
    // $nomeCompleto = "$nome $sobrenome";

    // echo "Meu nome é $nome, meu sobrenome é $sobrenome";
    // echo "<br>";
    // echo "Meu nome é $nomeCompleto"; -->
    <h1>Info</h1>
    <!-- Criar um array e ordenar de forma ascendenten e descendente -->
    <?php
    $ascendente = 'A ordem do array ascendente é';
    echo $ascendente;
    ?>

    <!-- PRECISA DE CORREÇÃO -->

    <?php
    $array = [10, 18, 5, 24, 100, 50, 200, 120];
    // sort($array);

    function ascendente($array)
    {
        // $arrayTamanho = count($array);
        sort($array);
        // for ($x = 0; $x < $arrayTamanho; $x++) {
        //     echo "$array[$x] -";
        // }
        foreach ($array as $value) {
            echo "<br>".$value;
            # code...
        }
    }
    ?>
    <?php
    $descendente = 'A ordem do array descendente é';
    echo $descendente;
    ?>
    <?php

    // rsort($array);
    function descendente($array)
    {
        rsort($array);
        // for ($x = 0; $x < $arrayTamanho; $x++) {
        //     echo "$array[$x] -";
        // }
        foreach ($array as $value) {
            echo "<br>".$value;
            # code...
        }
    }

    $ascendente = ascendente($array);
    $descendente = descendente($array);

    // echo "A ordem do array ascendente é $ascendente. <br> A ordem do array descendente é $descendente."

    ?>
</body>
</html>