<!-- <php
function inserir(){
    echo "teste";

}
?> -->

<?php
$codigo = $_POST['codigo'];
$arrayLanches['codigo'] = explode(",", $codigo);
// print_r($arrayLanches);
$soma = 0;
foreach ($arrayLanches as $key => $value) {
    foreach ($value as $key => $value2) {
        echo "<br>" . $value2;
        if ($value2 == 100) {
            echo " - Cachorro Quente R$12,70";
            $precoitem = 12.70;
        } elseif ($value2 == 101) {
            echo " - Bauru Simples R$4,00";
            $precoitem = 4.00;
        } elseif ($value2 == 102) {
            echo " - Bauru com Ovo R$4,60";
            $precoitem = 4.60;
        } elseif ($value2 == 103) {
            echo " - Hambúrguer R$15,00";
            $precoitem = 12.70;
        } elseif ($value2 == 104) {
            echo " - Cheeseburguer R$13,50";
            $precoitem = 13.50;
        } elseif ($value2 == 05) {
            echo " - Refrigerante R$4,50";
            $precoitem = 4.50;
        }
        $soma = $soma + $precoitem;
    }
}
echo "<br><br> O total da compra é $soma";

?>

<!-- </form>
<form action="./inserir.php" method="post">
    <button type="concluir">Concluir pedido</button>
</form> -->