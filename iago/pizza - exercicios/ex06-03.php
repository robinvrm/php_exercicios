<?php

$recebdiv = $_POST['divide'];
$recebvl = $_POST['valor'];
print_r($recebdiv);
echo "<br>";
print_r($recebvl);
echo "<br>";

$divisao = $recebvl / $recebdiv;

echo "<R1>R$$divisao,00</R1> pila pra cada";
