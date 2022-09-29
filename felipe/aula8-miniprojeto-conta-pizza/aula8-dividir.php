<?php
$pUnitario = $_GET['preco-unitario'];
$vTotal = $_GET['preco-total'];
$quantDividir = $_GET['quantidade-dividir'];
$fidelizacao = $_GET['fidelizacao'];
$pontos = 0;

$precoUnitario = $pUnitario;
$valorTotal = $vTotal;
$quantidadeDividir = $quantDividir;

$vDividido = $valorTotal / $quantidadeDividir;
$valorDividido = number_format($vDividido, 2);
?>
<?php
if ($valorTotal > 0) {
    if ($fidelizacao == 'sim') {
        $qtsPontos = $valorDividido / 50;
        $pontos = floor($qtsPontos);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>

<body>
    <h1>Carrinho de compras</h1>
    <hr>
    <h3>Dividir a conta</h3>
    <?php echo "A conta dividida entre <strong>$quantidadeDividir pessoas</strong> ficou:"; ?>

    <table width="500px">
        <thead>
            <tr>
                <td style="width:200px; text-align:left"><?php echo "Valor total"; ?></td>
                <td style="width:30px; text-align:center"><?php echo "Dividir por"; ?></td>
                <td style="width:30px; text-align:center"><?php echo "Por pessoa"; ?></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width:200px; text-align:left"><?php echo $valorTotal; ?></td>
                <td style="width:30px; text-align:center"><?php echo $quantidadeDividir; ?></td>
                <td style="width:30px; text-align:center"><?php echo "<strong>$valorDividido</strong>"; ?></td>
            </tr>
        </tbody>
    </table>

    <?php if ($fidelizacao == 'sim') { ?>
        <?php echo "<ul><li>Cada pessoa irá ter $pontos ponto(s) no <i>Programa de fidelidade.</i></li></ul>"; ?>
    <?php } ?>
    <hr>
    <form>
        <button disabled>Pagar</button>
    </form>
</body>

</html>