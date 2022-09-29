<?php

$valor = $_POST['valor'];
$data = $_POST['data'];

$hoje = date('Y-m-d');

$inicio = strtotime($data); // transformando em time
$fim = strtotime($hoje); // transformando em time

$intervalo = $fim - $inicio;
echo "<hr>";
$dias = floor($intervalo / (60 * 60 * 24));
// echo "$dias";
if ($dias == 0) {
    echo "$valor";
} elseif ($dias > 0) {
    $multa = ($dias * 1.50) + ($valor * 0.10 + $valor);
    echo "$multa";
} elseif ($dias <= -7) {
    $desconto = $valor - (0.10 * $valor);
    echo "$desconto";
    echo "<br>";
    echo "dias adiantado $dias";
} elseif ($dias <= -1 || $dias <= -6) {
    $original = $valor;
    echo "$original";
    echo "$dias";
}
