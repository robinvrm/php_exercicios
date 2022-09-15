<?php

$saldo = 5000;
echo "<br> Saldo anterior R$$saldo";
$retirada = $_POST['retirada'];
echo "<br> Valor retirado R$$retirada";

echo "<br>";
echo "<br>";
$nota = $_POST['notas'];

if ($retirada > $saldo) {
    echo "Valor de retirada maior que o saldo atual em conta";
} elseif ($retirada <= $saldo) {
    $saldoatual = $saldo - $retirada;
    echo "<br> Seu saldo atual $saldoatual";
    echo "<br> Valor da nota $nota";
    $qtdn = $retirada / $nota;
    echo "<br> Quantidade de notas $qtdn";
}
