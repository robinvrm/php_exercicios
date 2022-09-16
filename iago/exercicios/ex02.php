<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>

<body>
    <h1> Insira os números entre 0 e 10 e calcule</h1>
    <form action="./ex02.php" method="post">
        <input type="text" name="number1" placeholder="number1">
        <input type="text" name="number2" placeholder="number2">
        <button type="submit">calcular</button>
    </form>


    <?php

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $resultado = ($number1 + $number2) / 2;

    if ($number1 < 0 || $number1 > 10) {
        echo "insira números de 0 a 10 no campo number 1";
    }
    echo "<br>";
    if ($number2 < 0 || $number2 > 10) {
        echo "insira números de 0 a 10 no campo number 2";
    }

    if ($resultado < 6 && $resultado >= 0) {
        echo " O resultado é $resultado, reprovado";
    }
    if ($resultado >= 6 && $resultado < 10) {
        echo "O resultado é $resultado, aprovado";
    } elseif ($resultado == 10) {
        echo " O resultado é $resultado, aprovado com distinção";
    }
    ?>

    <!-- // switch ($i) {
    //     case "validarn1";
    //         if ($number1 < 0 || $number1 > 10) {
    //             echo "insira números de 0 a 10 no campo number 1";
    //         }
    //         break;
    //     case "validarn2";
    //         if ($number2 < 0 || $number2 > 10) {
    //             echo "insira números de 0 a 10 no campo number 2";
    //         }
    //         break;
    //     case "Reprovado";
    //         if ($resultado < 6 && $resultado >= 0) {
    //             echo " O resultado é $resultado, reprovado";
    //         }
    //         break;
    //     case "Aprovado";
    //         if ($resultado >= 6 && $resultado < 10) {
    //             echo "O resultado é $resultado, aprovado";
    //         }
    //         break;
    //     case "Distinção";
    //         if ($resultado == 10) {
    //             echo " O resultado é $resultado, aprovado com distinção";
    //         }
    //         break;
    // } -->

</body>

</html>