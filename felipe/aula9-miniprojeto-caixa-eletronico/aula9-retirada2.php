<?php require 'aula9-usuarios.php'; ?>
<?php require 'aula9-notas-disponiveis.php'; ?>
<?php
$usuarioLogado = $_POST['nome'];
$valorRetirar = number_format($_POST['valor-retirar']);
$notasCaixa = implode(", ", $notasDisponiveis);
?>
<?php
foreach ($usuarios AS $usuario) {
    $nome = $usuario['nome'];
}

if ($usuarioLogado == $nome) {
    $saldo = number_format($usuario['saldo'], 2);
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
    <h1>CAIXA ELETRÔNICO</h1>
    <hr>
    <h2><?php echo $nome; ?>,</h2>
    <h3>Retirada</h3>

    <?php if ($saldo > $valorRetirar) { ?>
        <?php echo "<p>Seu saldo é de R$ $saldo</p>"; ?>
        <?php echo "<p>Deseja retirar R$ $valorRetirar?</p><hr>"; ?>
        <p>As notas disponíveis são:</p>
        <?php echo "<p>$notasCaixa</p>"; ?>
        <hr>
        <p>Escolha quais notas deseja:</p>
        <form action="aula9-retirada3.php" method="POST">
            <input type="hidden" name="nome" value="<?php echo $nome; ?>">
            <input type="hidden" name="saldo" value="<?php echo $saldo; ?>">
            <input type="hidden" name="valor-retirar" value="<?php echo $valorRetirar; ?>">
            <?php foreach ($notasDisponiveis AS $nota) { ?>
                <input type="radio" name="nota-valor" value="<?php echo $nota; ?>">
                <label for="nota-valor"><?php echo $nota; ?></label><br>
            <?php } ?>
            <button type="submit" name="enviar" value="enviar">Escolher</button>
        </form>
    <?php } else { ?>
        <?php echo "<h2 style='color:red;'>Você não tem saldo suficiente para a retirada.</h2>"; ?>
    <?php } ?>
    <hr>
    <button onclick="history.back()">Voltar</button>
</body>

</html>