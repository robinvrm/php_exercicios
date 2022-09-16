<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>

<body>

    <h1>Cardápio de Lanches</h1>

    <form action="./ex05.php" method="post">
        <input type="number" name="codigo" placeholder="codigo">
        <button type="submit">Procurar</button>
    </form>

    <?php

    $codigo = $_POST['codigo'];

    if ($codigo == 100) {
        echo "Cachorro Quente R$12,70";
    } elseif ($codigo == 101) {
        echo "Bauru Simples R$4,00";
    } elseif ($codigo == 102) {
        echo "Bauru com Ovo R$4,60";
    } elseif ($codigo == 103) {
        echo "Hambúrguer R$15,00";
    } elseif ($codigo == 104) {
        echo "Cheeseburguer R$13,50";
    } elseif ($codigo == 05) {
        echo "Refrigerante R$4,500";
    }



    ?>


</body>

</html>