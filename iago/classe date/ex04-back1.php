<?php

echo "CARRINHO DE COMPRAS <br><br><hr>";

$totalcodigo100 = 0;
$totalcodigo200 = 0;
$totalcodigo300 = 0;
$totalcodigo400 = 0;
$totalcodigo500 = 0;
$totalcodigo600 = 0;
$totalcodigo700 = 0;
$totalcodigo800 = 0;
$totalcodigo900 = 0;
$totalcodigo1000 = 0;

$array = [];
$array['qtd'][]= $_POST['qtd1'];
$array['nomeLivro'][] = $_POST['livro1'];
$array['qtd'][] = $_POST['qtd2'];
$array['nomeLivro'][] = $_POST['livro2'];

echo "<pre>";
print_r($array);
$codigo100 = $_POST['qtd1'];
$codigo200 = $_POST['qtd2'];
$codigo300 = $_POST['qtd3'];
$codigo400 = $_POST['qtd4'];
$codigo500 = $_POST['qtd5'];
$codigo600 = $_POST['qtd6'];
$codigo700 = $_POST['qtd7'];
$codigo800 = $_POST['qtd8'];
$codigo900 = $_POST['qtd9'];
$codigo1000 = $_POST['qtd10'];
$nome100 = $_POST['livro1'];

// echo "Quantidade: Administradores Ponto Com ($codigo100)";
// echo "<br>";
// echo "Quantidade: Os segredos das mentes ($codigo200)";
// echo "<br>";
// echo "Quantidade: Programação para Iniciantes ($codigo300)";
// echo "<br>";
// echo "Quantidade: Os cientistas de Hitler ($codigo400)";
// echo "<br>";
// echo "Quantidade: Quem pensa Enriquece ($codigo500)";
// echo "<br>";
// echo "Quantidade: Negócio Escalável ($codigo600)";
// echo "<br>";
// echo "Quantidade: Gestão Fácil ($codigo700)";
// echo "<br>";
// echo "Quantidade: Harry Poter ($codigo800)";
// echo "<br>";
// echo "Quantidade: O senhor dos Anéis ($codigo900)";
// echo "<br>";
// echo "Quantidade: O Alienista ($codigo1000)";
// echo "<br>";
// echo "<br>";
echo "<br>";
if ($codigo100 >= 1) {
    echo "Livro: $nome100 $codigo100, Preço unitário R$70,00";
    echo "<br>";
    $totalcodigo100 = $codigo100 * 70.00;
    echo "Total $codigo100 unidades R$$totalcodigo100,00";
    echo "<br>";
    echo "<br>";
};
if ($codigo200 >= 1) {
    echo "Livro: Os segredos das mentes, Quantidade $codigo200, Preço unitário R$55,00";
    echo "<br>";
    $totalcodigo200 = $codigo200 * 55.00;
    echo "Total $codigo200 unidades R$$totalcodigo200,00";
    echo "<br>";
    echo "<br>";
};

if ($codigo300 >= 1) {
    echo "Livro: Programação para Iniciantes, Quantidade $codigo300, Preço unitário R$75,00";
    echo "<br>";
    $totalcodigo300 = $codigo300 * 75.00;
    echo "Total $codigo300 unidades R$$totalcodigo300,00";
    echo "<br>";
    echo "<br>";
};

if ($codigo400 >= 1) {
    echo "Livro: Os cientistas de Hitler, Quantidade $codigo400, Preço unitário R$99,00";
    echo "<br>";
    $totalcodigo400 = $codigo400 * 99.00;
    echo "Total $codigo400 unidades R$$totalcodigo400,00";
    echo "<br>";
    echo "<br>";
};

if ($codigo500 >= 1) {
    echo "Livro: Quem pensa Enriquece, Quantidade $codigo500, Preço unitário R$65,00";
    echo "<br>";
    $totalcodigo500 = $codigo500 * 65.00;
    echo "Total $codigo500 unidades R$$totalcodigo500,00";
    echo "<br>";
    echo "<br>";
};

if ($codigo600 >= 1) {
    echo "Livro: Negócio Escalável, Quantidade $codigo600, Preço unitário R$45,00";
    echo "<br>";
    $totalcodigo600 = $codigo600 * 45.00;
    echo "Total $codigo600 unidades R$$totalcodigo600,00";
    echo "<br>";
    echo "<br>";
};

if ($codigo700 >= 1) {
    echo "Livro: Gestão Fácil, Quantidade $codigo700, Preço unitário R$50,00";
    echo "<br>";
    $totalcodigo700 = $codigo700 * 50.00;
    echo "Total $codigo700 unidades R$$totalcodigo700,00";
    echo "<br>";
    echo "<br>";
};

if ($codigo800 >= 1) {
    echo "Livro: Harry Poter, Quantidade $codigo800, Preço unitário R$77,00";
    echo "<br>";
    $totalcodigo800 = $codigo800 * 77.00;
    echo "Total $codigo800 unidades R$$totalcodigo800,00";
    echo "<br>";
    echo "<br>";
};

if ($codigo900 >= 1) {
    echo "Livro: O senhor dos Anéis, Quantidade $codigo900, Preço unitário R$88,00";
    echo "<br>";
    $totalcodigo900 = $codigo900 * 88.00;
    echo "Total $codigo900 unidades R$$totalcodigo900,00";
    echo "<br>";
    echo "<br>";
};

if ($codigo1000 >= 1) {
    echo "Livro: O Alienista, Quantidade $codigo1000, Preço unitário R$95,00";
    echo "<br>";
    $totalcodigo1000 = $codigo1000 * 95.00;
    echo "Total $codigo1000 unidades R$$totalcodigo1000,00";
    echo "<br>";
    echo "<br>";
};
echo "<br><hr>";
$totalprodutos = $totalcodigo100 + $totalcodigo200 + $totalcodigo300 + $totalcodigo400 + $totalcodigo500 +
    $totalcodigo600 + $totalcodigo700 + $totalcodigo800 + $totalcodigo900 + $totalcodigo1000;
echo "Total em produtos R$$totalprodutos,00";
echo "<br>";
echo "<br>";
echo "Insira abaixo a forma de pagamento, seu nome completo, e o endereço completo de entrega:<br>";
?>

<form action="./ex04-back2.php" method="post">
    <select name="formapgto" id="pgto">
        <option value="">Escolha</option>
        <option value="pix">pix</option>
        <option value="cartao">cartao</option>
        <option value="boleto">boleto</option>
    </select>
    <input type="text" name="totalprodutos" value="<?php echo $totalprodutos; ?>">
    <input type="text" name="nomelivro" value="<?php ?>">
    <!-- <input type="text" name="total" value="<?php
                                                // echo $codigo100, $codigo200; 
                                                ?>"> -->
    <input type="text" placeholder="nome completo" name="nome">
    <input type="text" placeholder="endereço completo" name="entrega">
    <button type="submit" name="submit">Enviar</button>
</form>