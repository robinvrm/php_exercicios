<?php require 'aula9-usuarios.php'; ?>
<?php $usuarioLogado = $_POST['nome']; ?>
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
    <h3>seu saldo é de:</h3>
    <ul>
        <li><?php echo "R$ $saldo"; ?></li>
    </ul>
    <hr>
    <button onclick="history.back()">Voltar</button>
</body>

</html>