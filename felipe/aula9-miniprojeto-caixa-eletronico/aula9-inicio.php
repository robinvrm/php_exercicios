<?php require 'aula9-usuarios.php'; ?>
<?php
foreach ($usuarios AS $usuario) {
    $nome = $usuario['nome'];
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
    <h2>Bem-vindo <?php echo $nome; ?></h2>
    <h3>O que deseja fazer?</h3>

    <table width="500px">
        <tr>
            <td style="width:20px; text-align:center">
                <form action="aula9-saldo.php" method="POST">
                    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                    <button type="submit" name="enviar" value="enviar">SALDO</button>
                </form>
            </td>
            <td style="width:200px; text-align:left">
                <form action="aula9-retirada.php" method="POST">
                    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                    <button type="submit" name="enviar" value="enviar">RETIRAR DINHEIRO</button>
                </form>
            </td>
        </tr>
    </table>
    <hr>
</body>

</html>