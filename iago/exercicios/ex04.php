<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>

<body>
    <?php
    // $_POST['soma1'] = 0;
    // $_POST['soma2'] = 0;
    // $_POST['subtrair1'] = 0;
    // $_POST['subtrair2'] = 0;
    ?>

    <h1>Calculadora</h1>

    <form action="./ex04.php" method="post">
        <h2>somar</h2>
        <input type="number" name="soma1" placeholder="número1">
        <input type="number" name="soma2" placeholder="número2">
        <button id="somar" type="submit">calcular</button>
        <br>


        <?php
        // $_POST['soma1'] = 0;

        if (($_POST['soma1']) && ($_POST['soma2'])) {
            $soma1 = $_POST['soma1'];
            $soma2 = $_POST['soma2'];
            $rsoma = ($soma1 + $soma2);

            echo "O resultado da soma é " . $rsoma;
        }

        ?>
    </form>

    <form action="./ex04.php" method="post">
        <h2>subtrair</h2>
        <input type="number" name="subtrair1" placeholder="número1">
        <input type="number" name="subtrair2" placeholder="número2">
        <button id="subtrair" type="submit">calcular</button>
        <br>

        <?php
        if (($_POST['subtrair1']) && ($_POST['subtrair2'])) {
            $subtrai1 = $_POST['subtrair1'];
            $subtrai2 = $_POST['subtrair2'];
            $rsubtrai = ($subtrai1 - $subtrai2);

            echo "O resultado da divisão é " . $rsubtrai;
        }


        ?>
    </form>

    <form action="./ex04.php" method="post">
        <h2>multiplicar</h2>
        <input type="number" name="multiplica1" placeholder="número1">
        <input type="number" name="multiplica2" placeholder="número2">
        <button id="multiplicar" type="submit">calcular</button>
        <br>

        <?php

        if (($_POST['multiplica1']) && ($_POST['multiplica2'])) {
            $multiplica1 = $_POST['multiplica1'];
            $multiplica2 = $_POST['multiplica2'];
            $rmultiplicar = ($multiplica1 * $multiplica2);

            echo "O resultado da soma é " . $rmultiplicar;
        }

        ?>
    </form>

    <form action="./ex04.php" method="post">
        <h2>dividir</h2>
        <input type="number" name="dividir1" placeholder="número1">
        <input type="number" name="dividir2" placeholder="número2">
        <button id="subtrair" type="submit">calcular</button>
        <br>

        <?php
        if (($_POST['dividir1']) && ($_POST['dividir2'])) {
            $divide1 = $_POST['dividir1'];
            $divide2 = $_POST['dividir2'];
            $rdivide = ($divide1 / $divide2);

            echo "O resultado da divisão " . $rdivide;
        }


        ?>
    </form>


    <?php
    // $_POST['soma1'] = 0;
    // $_POST['soma2'] = 0;
    // $_POST['subtrair1'] = 0;
    // $_POST['subtrair2'] = 0;
    ?>

</body>

</html>