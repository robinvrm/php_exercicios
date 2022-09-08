<?php

// transformar em string

echo "Transformando Array em String com implode():</br>";
$array = [3, 1, 8, 2, 10];
$nomearray = implode(",", $array);

echo "$nomearray";

echo "<br>";
echo "<br>";

// transformar em array e somar os valores
echo "<br>Transformando String em Array com explode():</br>";
$array2 = "5,9,6,1";
$arraynome = explode(",", $array2);

print_r($arraynome);

echo "<br>";
echo "<br> Somando valores do Array com array_sum():</br>";
echo "Ssoma = " . array_sum($arraynome) . "\n";
