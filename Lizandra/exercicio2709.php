<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="exercicio2709.php" method="post">
        <input name="valor" type="number" placeholder="valor">
        <input name="vencimento" type="date" placeholder="VENCIMENTO">
        <button>Enviar</button>
    </form>


    <?php
    // $inicio = strtotime('2022-01-01');
    // $fim = strtotime(date('Y-m-d'));
    // echo $intervalo = $fim - $inicio;
    // echo '<hr>';
    // echo $dias = floor($intervalo / (60 * 60 *24));

    $valor = $_POST['valor'];
    $vencimento = $_POST['vencimento'];
    echo $vencimento;
    $dataHJ = date('Y-m-d');

    $diferenca = strtotime($vencimento) - (strtotime($dataHJ));
    echo '<br>';
    echo $vencimento;
    echo '<br>';

    $dias = floor($diferenca / (60 * 60 * 24));
    echo '<br>';
    // echo $dias;

    $result = 0;
    $valorComDesconto = 0;
    $valorDoDesconto = 0;
    if ($dias >= 10) {
        $valorDoDesconto = $valor * 0.10;
        $valorComDesconto = $valor - $valorDoDesconto;
        echo $valorComDesconto;
    }
    if ($dias < 10 && $dias >= 0) {
        echo $valor;
    }
    if ($dias < 0) {
        $diaAbs = abs($dias);
        $result = $valor + ($valor * 0.10) + ($diaAbs * 1.50);
        echo $result;
    }

    
    ?>

</body>

</html>