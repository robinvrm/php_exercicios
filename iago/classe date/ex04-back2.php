<?php

$pagamento = $_POST['formapgto'];
$nome = $_POST['nome'];
$entrega = strtolower($_POST['entrega']);
print_r($pagamento);
echo "<br>";
print_r($nome);
echo "<br>";
print_r($entrega);
echo "<br>";
echo "<br>";
echo "<hr>";

if ($entrega == "sul") {
    echo "Entrega grátis para região sul! Prazo de entrega 7 dias.";
} elseif ($entrega == "sudeste") {
    echo "Custo entrega R$15,00 para região sudeste. Prazo de entrega 15 dias.";
} elseif ($entrega == "outras") {
    echo "Custo de entrega R$30,00 para outras regiões. Prazo de entrega 20 dias.";
};
echo "<br>";
echo "<hr>";

if ($pagamento == "pix") {
    echo "Compensação do pagamento por pix será contato a partir da data pagamento.";
} elseif ($pagamento == "cartao") {
    echo "Compensação do pagamento por cartão será contato 12 horas a partir da data do pagamento.";
} elseif ($pagamento == "boleto") {
    echo "Compensação do pagamento por boleto será contado 3 dias a partir da data do pagamento.";
};
echo "<br>";
echo "<hr>";
?>

<form action="./ex03-back.php" method="post">
    <input type="number" name="valor1">
    <input type="date" name="data1">
</form>