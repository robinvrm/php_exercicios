<?php require 'aula8-pizzas.php'; ?>
<?php
$sabor = $_GET['sabor'];
$quantidade = $_GET['quantidade'];
$fidelizacao = $_GET['fidelizacao'];
$pontos = 0;
?>
<?php
if ($sabor) {
    if ($quantidade) {
        foreach ($saboresPizzas as $pizzas) {
            if ($pizzas['produto'] == $sabor) {
                $precoUnitario = $pizzas['preco_unitario'];
            }
        }
    }
}

$vTotal = $precoUnitario * $quantidade;
$valorTotal = number_format($vTotal, 2);

if ($valorTotal > 0) {
    if ($fidelizacao == 'sim') {
        $qtsPontos = $valorTotal / 50;
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
    <h3>Pizzas escolhidas:</h3>

    <table width="500px">
        <thead>
            <tr>
                <td style="width:200px; text-align:left"><?php echo "Sabor escolhido"; ?></td>
                <td style="width:30px; text-align:center"><?php echo "Quantidade"; ?></td>
                <td style="width:30px; text-align:center"><?php echo "Valor unitário"; ?></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width:200px; text-align:left"><?php echo $sabor; ?></td>
                <td style="width:30px; text-align:center"><?php echo $quantidade; ?></td>
                <td style="width:30px; text-align:center"><?php echo $precoUnitario; ?></td>
            </tr>
            <tr>
                <td style="width:200px; text-align:left"><?php echo "<strong>Valor total:</strong>"; ?></td>
                <td style="width:30px; text-align:center"><?php echo "<strong>$valorTotal</strong>"; ?></td>
            </tr>
        </tbody>
    </table>

    <?php if ($fidelizacao == 'sim') { ?>
        <?php echo "<ul><li>O seu pedido irá gerar $pontos ponto(s) no <i>Programa de fidelidade.</i></li></ul>"; ?>
    <?php } ?>
    <hr>

    <h2>Pagamento</h2>
    <p>Pagamento único</p>
        <form>
            <button disabled>Pagar</button>
        </form>
    </p>
    <p>Divida a conta</p>
        <form action="aula8-dividir.php" method="GET">
            <input type="hidden" name="preco-unitario" value="<?php echo $precoUnitario; ?>">
            <input type="hidden" name="preco-total" value="<?php echo $valorTotal; ?>">
            <input type="hidden" name="fidelizacao" value="<?php echo $fidelizacao; ?>">
            <input type="number" name="quantidade-dividir" value="quantidade-dividir">
            <button type="submit" name="enviar" value="enviar">Dividir</button>
        </form>
    </p>
</body>

</html>