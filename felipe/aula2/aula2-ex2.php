<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro projeto PHP</title>
</head>
<body>
    <h1>Calcular</h1>
    <!-- Criar uma calculadora e realizar operações -->
    <?php
   
//    $operacao = ;
    function calcular($operacao) {
        $num1 = 12;
        $num2 = 2;
        $resultado;
        echo $operacao;
        switch ($operacao) {
            case 'Multiplicar':
                $resultado = ($num1*$num2);
                break;
            case 'Somar':
                $resultado = ($num1+$num2);
                break;
            case 'Dividir':
                $resultado = ($num1/$num2);
                break;
            case 'Subtrair':
                $resultado = ($num1-$num2);
                break;
            default:
                break;
        }

        return $resultado;
    }


    echo calcular('Somar');

    // print_r($resultado);
    ?>
</body>
</html>