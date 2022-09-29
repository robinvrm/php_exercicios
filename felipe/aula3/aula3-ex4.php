<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <!-- Desenvolva um script calculadora com os 4 operadores somar, subtrair, dividir e multiplicar -->

    <h1>Exercício 4</h1>
    <small>
        Desenvolva um script calculadora com os 4 operadores somar, subtrair, dividir e multiplicar
    </small>
    <hr>
    <form action = "aula3-ex4.php" method = "post">
        <input type = "text" name = "num1" placeholder = "Valor 1">
        <input type = "text" name = "num2" placeholder = "Valor 2">
        <select name = "operadores" id = "operadores">
            <option value = "">- Operação -</option>
            <option value = "somar">Somar</option>
            <option value = "subtrair">Subtrair</option>
            <option value = "multiplicar">Multiplicar</option>
            <option value = "dividir">Dividir</option>
        </select>
        <button type = "submit" name = "enviar" value = "enviar">Calcular</button>
    </form>
    <br>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operadores = filter_input(INPUT_POST, 'operadores');
    $resultado;
    ?>
    <?php 
    switch ($operadores) {
        case 'somar':
            $resultado = ($num1+$num2);
            break;
        case 'subtrair':
            $resultado = ($num1-$num2);
            break;
        case 'multiplicar':
            $resultado = ($num1*$num2);
            break;
        case 'dividir':
            $resultado = ($num1/$num2);
            break;
        default:
            break;
    }
    echo $resultado;
    ?>
</body>
</html>