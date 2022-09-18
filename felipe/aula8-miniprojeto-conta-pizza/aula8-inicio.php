<?php require 'aula8-pizzas.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>

<body>
    <h1>Cardápio de pizza</h1>
    <hr>
    <h3>Escolha as suas pizzas abaixo!</h3>

    <?php foreach ($saboresPizzas as $pizza) { ?>
        <table width="500px">
            <tr>
                <td style="width:20px; text-align:center"><?php echo $pizza['codigo']; ?></td>
                <td style="width:200px; text-align:left"><?php echo $pizza['produto']; ?></td>
                <td style="width:30px; text-align:center"><?php echo $pizza['preco_unitario']; ?></td>
            </tr>
        </table>
    <?php } ?>
    <hr>

    <h2>Adicionar ao carrinho:</h2>
    <p>Selecione <strong>um sabor</strong> e adicione ao carrinho</p>
    <form action="aula8-carrinho.php" method="GET">
        <?php foreach ($saboresPizzas as $pizza) { ?>
            <input type="radio" name="sabor" value="<?php echo $pizza['produto']; ?>">
            <label for="sabor"><?php echo $pizza['produto']; ?></label><br>
        <?php } ?>
        <input type="number" name="quantidade" value="quantidade"><br>
        <span>Deseja partipar do programa de pontos?</span>
        <input type="radio" name="fidelizacao" value="sim">
        <label for="sim">Sim</label>
        <input type="radio" name="fidelizacao" value="nao">
        <label for="nao">Não</label><br>
        <button type="submit" name="enviar" value="enviar">Adicionar</button>
        </form>
    <br>
</body>

</html>