<?php
//data atual
echo date("d/m/Y");

echo '<hr>';
echo "Hoje e dia:" . date("Y/m/d") . "<br>";
echo "Hoje e dia:" . date("Y.m.d") . "<br>";
echo "Hoje e dia:" . date("Y-m-d") . "<br>";

echo "Hoje e dia:" . date("l") . "<br>";
?>
<!-- 
EXERCÍCIOS -

1. Crie um script que gere o número de dias que já se passaram desde que o ano começou.
2. TELA - fazer uma tela principal, onde deve ter entrada de dados do valor do boleto e data de vencimento.

Backend - verificar se o boleto está sendo pago no dia. Se estiver, mostrar na tela o valor original.

Se estiver em atraso, verificar a quantidade de dias em atraso, aplicar juros de 10% do valor total MAIS 1,50 por dia de atraso.

Se estiver pagando pelo menos 7 dias adiantado, aplicar um desconto de 10% do valor, e a quantidade de dias que está pagando adiantado.

3 - o mesmo exercício anterior, com a possibilidade de enviar pelo menos 3 boletos, mostrar a soma total dos boletos e mostrar separado o juros e descontos de cada um -->