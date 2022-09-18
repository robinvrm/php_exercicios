<?php $usuarioLogado = $_POST['nome']; ?>
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
    <h2><?php echo $usuarioLogado; ?>,</h2>
    <h3>deseja retirar quanto?</h3>
    <form action="aula9-retirada2.php" method="POST">
        <input type="hidden" name="nome" value="<?php echo $usuarioLogado; ?>">
        <input type="number" name="valor-retirar" value="valor-retirar">
        <button type="submit" name="enviar" value="enviar">Retirar</button>
    </form>
    <hr>
    <button onclick="history.back()">Voltar</button>
</body>

</html>