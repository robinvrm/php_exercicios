<?php

// Exercícios - 
// 1 - Crie um script que gere o número de dias que se passaram desde que o ano começou.

echo "" . date("y-m-d") . "<br>";

$hoje = date('Y-m-d');

$inicio = strtotime('2022-01-01'); // transformando em time
$fim = strtotime($hoje); // transformando em time

echo $intervalo = $fim - $inicio;
echo "<hr>";
echo $dias = floor($intervalo / (60 * 60 * 24));
