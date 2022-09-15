<?php
$codigo = $_POST['pizza'];
$arraypizza['pizza'] = explode(",", $codigo);
// print_r($arraypizza);

$soma = 0;

foreach ($arraypizza as $key => $value) {
    foreach ($value as $key => $value2) {
        echo "<br><div>" . $value2;
        if ($value2 == 110) {
            echo "<div> - Pizza Grande R$78,00<br>";
            $precoitem = 78.00;
        } elseif ($value2 == 120) {
            echo "<div> - Pizza Média Calabresa R$58,00<br>";
            $precoitem = 58.00;
        } elseif ($value2 == 130) {
            echo "<div> - Pizza Pequena Frango R$48,00<br>";
            $precoitem = 48.00;
        } elseif ($value2 == 140) {
            echo "<div> - Pissa Grande Chocolate R$68,00<br>";
            $precoitem = 68.00;
        } elseif ($value2 == 150) {
            echo "<div> - Pizza Média Romeu e Julieta R$58,00<br>";
            $precoitem = 58.00;
        } elseif ($value2 != 110 || $value2 != 120 || $value2 != 130 || $value2 != 140 || $value2 != 150) {
            echo " Voce selecionou código(s) inexistente(s) no Menú no momento!</br>
                Por gentileza, volte a tela de menu, exclua o(s) código(s) inválido(s)</br>
                e execute sua escolha novamente!</br>
                Se você preferir, pode solicitar ajuda de um de nossos atendentes!";
            die();
        }
        $soma = $soma + $precoitem;
    }
}
echo "<br><br> O total da compra é R$$soma,00 reais";
?>

<form action="./ex06-03.php" method="post">
    <H2>Dividir conta?</H2>
    <input type="number" max="10" min="2" name="divide" placeholder="2 a 10">
    <input type="text" name="valor" value="<?php echo "$soma"; ?>" readonly>
    <button type="submit" name="dividir">Dividir</button>
</form>