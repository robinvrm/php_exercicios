<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
    <?php include 'includehead.php'; ?>
</head>
<style>
    div {
        text-align: center;
    }

    p {
        text-align: center;
    }
</style>

<body>
    <?php
    $codigo = $_POST['codigo'];
    $arrayLanches['codigo'] = explode(",", $codigo);
    // print_r($arrayLanches);

    $soma = 0;

    foreach ($arrayLanches as $key => $value) {
        foreach ($value as $key => $value2) {
            echo "<br><div>" . $value2;
            if ($value2 == 100) {
                echo "<div> - Cachorro Quente R$12,70<br>";
                $precoitem = 12.70;
            } elseif ($value2 == 101) {
                echo "<div> - Bauru Simples R$4,00<br>";
                $precoitem = 4.00;
            } elseif ($value2 == 102) {
                echo "<div> - Bauru com Ovo R$4,60<br>";
                $precoitem = 4.60;
            } elseif ($value2 == 103) {
                echo "<div> - Hambúrguer R$15,00<br>";
                $precoitem = 15.00;
            } elseif ($value2 == 104) {
                echo "<div> - Cheeseburguer R$13,50<br>";
                $precoitem = 13.50;
            } elseif ($value2 == 05) {
                echo "<div> - Refrigerante R$4,50<br>";
                $precoitem = 4.50;
            } elseif ($value2 != 100 || $value2 != 101 || $value2 != 102 || $value2 != 103 || $value2 != 104 || $value2 != 05) {
                echo " Voce selecionou código(s) inexistente(s) no Menú no momento!</br>
                Por gentileza, volte a tela de menu, exclua o(s) código(s) inválido(s)</br>
                e execute sua escolha novamente!</br>
                Se você preferir, pode solicitar ajuda de um de nossos atendentes!";
                die();
            }
            $soma = $soma + $precoitem;
        }
    }
    echo "<br><br> O total da compra é $soma";
    ?>
    <?php include 'includefooter.php'; ?>
</body>

</html>
<!-- </form>
<form action="./inserir.php" method="post">
    <button type="concluir">Concluir pedido</button>
</form> -->