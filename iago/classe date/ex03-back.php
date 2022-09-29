<?php

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];
$data1 = $_POST['data1'];
$data2 = $_POST['data2'];
$data3 = $_POST['data3'];

echo "Valores boletos sem juros";
echo "<br>";
echo "<br>";
echo "$valor1";
echo "<br>";
echo "$valor2";
echo "<br>";
echo "$valor3";
echo "<br>";

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];
$data1 = $_POST['data1'];
$data2 = $_POST['data2'];
$data3 = $_POST['data3'];

$hoje1 = date('Y-m-d');
$hoje2 = date('Y-m-d');
$hoje3 = date('Y-m-d');

$inicio1 = strtotime($data1); // transformando em time
$inicio2 = strtotime($data2); // transformando em time
$inicio3 = strtotime($data3); // transformando em time
$fim1 = strtotime($hoje1); // transformando em time
$fim2 = strtotime($hoje2); // transformando em time
$fim3 = strtotime($hoje3); // transformando em time

$intervalo1 = $fim1 - $inicio1;
$intervalo2 = $fim2 - $inicio2;
$intervalo3 = $fim3 - $inicio3;
echo "<hr>";
$dias1 = floor($intervalo1 / (60 * 60 * 24));
$dias2 = floor($intervalo2 / (60 * 60 * 24));
$dias3 = floor($intervalo3 / (60 * 60 * 24));
echo "dias boleto 1 -> $dias1";
echo "<hr>";
echo "dias boleto 2 -> $dias2";
echo "<hr>";
echo "dias boleto 3 -> $dias3";
echo "<hr>";
echo "<hr>";

echo "Total sem juros";
echo "<br>";
$somasj = $valor1 + $valor2 + $valor3;
echo "$somasj";
echo "<hr>";
echo "<hr>";

echo "Boleto 1";
echo "<br>";
echo "<br>";
if ($dias1 == 0) {
    echo "$valor1";
} elseif ($dias1 > 0) {
    $multa1 = ($dias1 * 1.50) + ($valor1 * 0.10 + $valor1);
    echo "$multa1";
    echo "<br>";
    echo "$dias1";
} elseif ($dias1 <= -7) {
    $desconto1 = $valor1 - (0.10 * $valor1);
    echo "$desconto1";
    echo "<br>";
    echo "dias adiantado $dias1";
} elseif ($dias1 <= -1 || $dias1 <= -6) {
    $original1 = $valor1;
    echo "$original1";
    echo "<br>";
    echo "$dias1";
}
echo "<hr>";
echo "<hr>";

echo "Boleto 2";
echo "<br>";
echo "<br>";
if ($dias2 == 0) {
    echo "$valor2";
} elseif ($dias2 > 0) {
    $multa2 = ($dias2 * 1.50) + ($valor2 * 0.10 + $valor2);
    echo "$multa2";
    echo "<br>";
    echo "$diass";
} elseif ($dias2 <= -7) {
    $desconto2 = $valor2 - (0.10 * $valor2);
    echo "$desconto2";
    echo "<br>";
    echo "dias adiantado $dias2";
} elseif ($dias2 <= -1 || $dias2 <= -6) {
    $original2 = $valor2;
    echo "$original2";
    echo "<br>";
    echo "$dias2";
}
echo "<hr>";
echo "<hr>";

echo "Boleto 3";
echo "<br>";
echo "<br>";
if ($dias3 == 0) {
    echo "$valor3";
} elseif ($dias3 > 0) {
    $multa3 = ($dias3 * 1.50) + ($valor3 * 0.10 + $valor3);
    echo "$multa3";
    echo "<br>";
    echo "$dias3";
} elseif ($dias3 <= -7) {
    $desconto3 = $valor3 - (0.10 * $valor3);
    echo "$desconto3";
    echo "<br>";
    echo "dias adiantado $dias3";
} elseif ($dias3 <= -1 || $dias3 <= -6) {
    $original3 = $valor3;
    echo "$original3";
    echo "<br>";
    echo "$dias3";
}
echo "<hr>";
echo "<hr>";

echo "Total boletos com juros";
$somacj = $multa1 + $multa2 + $multa3;
print_r($somacj);
if ($somacj > $somasj) {
    echo "$somacj";
}
