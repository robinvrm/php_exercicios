<!DOCTYPE html>
<html lang="pt-br">
<?php
$valorBoleto = $_POST['valor-boleto'];
$dataVencimento = $_POST['data-vencimento'];
$dataHoje = date("Y-m-d");

$vencimento = strtotime($dataVencimento);
$pagar = strtotime(date("Y-m-d"));
$diferencaDatas = abs($pagar - $vencimento);
$dias = floor($diferencaDatas / (60 * 60 * 24));
$multa = $dias * (1.50) + (0.10 * $valorBoleto);
$desconto = $valorBoleto * 0.10;

$valorBoletoAtrasado = $valorBoleto + $multa;
$valorBoletoDesconto = $valorBoleto - $desconto;

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>

<body>
    <h1>Boletos</h1>
    <hr>
    <h2>Pagamento</h2>
    <h4>Valor a pagar</h4>

    <?php
    if ($dataHoje == $dataVencimento) {
        echo "<p>O valor a ser pago é R$ $valorBoleto</p>";
    } else if ($dataHoje > $dataVencimento) {
        echo "<p>O boleto está há $dias dia(s) atrasado<br>A multa gerada foi no valor de $multa<br>O valor a ser pago é R$ $valorBoletoAtrasado</p>";
    } else if ($dataHoje < $dataVencimento) {
        if ($dias >= 7) {
            echo "<p>O boleto tem vencimento dia $dataVencimento<br>Você está pagando o boleto com $dias dia(s) adiantado<br>A bonificação de 10% gerada foi no valor de $desconto<br>O valor a ser pago é R$ $valorBoletoDesconto</p>";
        } else {
            echo "<p>O valor a ser pago é R$ $valorBoleto</p>";
        }
    }
    ?>
    <hr>
</body>

</html>