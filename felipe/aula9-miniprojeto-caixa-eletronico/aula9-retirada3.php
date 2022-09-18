<?php require 'aula9-usuarios.php'; ?>
<?php require 'aula9-notas-disponiveis.php'; ?>
<?php
$usuarioLogado = $_POST['nome'];
$valorRetirar = number_format($_POST['valor-retirar']);
$notaValor = $_POST['nota-valor'];
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







    
    <!-- FALTA ACERTAR DETALHES PARA FUNCIONAR CORRETAMENTE -->








    <?php $novoSaldo = number_format(($saldo - $valorRetirar), 2); ?>
    <?php
    if (isset($notaValor)) {
        switch($notaValor) {
            case 50:
                if ($valorRetirar % 50 == 0) {
                    $qtdNotas = $valorRetirar / 50;
                    echo "<p>Sua retirada será de $qtdNotas notas de 50.</p>";
                    echo "<h3>Seu novo saldo após a retirada é de: R$ $novoSaldo.</h3>";
                } else if ($valorRetirar % 50 == 1) {
                    echo "<p style = 'color:red'>Não há notas suficientes do valor de sua retirada.</p>";
                }
                break;
            case 100:
                if ($valorRetirar % 100 == 0) {
                    $qtdNotas = $valorRetirar / 100;
                    echo "<p>Sua retirada será de $qtdNotas notas de 100.</p>";
                    echo "<h3>Seu novo saldo após a retirada é de: R$ $novoSaldo.</h3>";
                } else if ($valorRetirar % 100 == 1) {
                    echo "<p style = 'color:red'>Não há notas suficientes do valor de sua retirada.</p>";
                }
                break;
            default:
                echo "<p style = 'color:red'>Tente novamente.</p>";
                break;
        }
    }
    ?>
    <hr>
    <button onclick="history.back()">Voltar</button>
</body>

</html>