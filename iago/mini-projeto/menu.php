<?php
// session_start();
// echo $_SESSION['login'];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <?php include 'includehead.php'; ?>
</head>
<style>
    table,
    tr,
    td {

        border: black solid 3px;
    }

    #centro {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -120px;
        margin-top: -100px;

    }

    form {
        text-align: center;
    }

    h1 {
        text-align: center;
    }

    p {
        text-align: center;
    }
</style>

<body>
    <h1>Menu de Lanches</h1>
    <form action="./calcular.php" method="post">
        <p>Insira os códigos dos itens escolhidos um após o outro com vircula, ex: (100,05,104).<br>
            Repita o código, quando quiser mais de um item do mesmo produto, ex: dois hamburguer e um refrigerante<br>
            (103,103,05).

        </p>
        <input type="text" name="codigo" placeholder="inserir codigo">
        <button type="submit">Inserir</button>
    </form>
    <div id="centro">
        <table>
            <tr>
                <td>Código</td>
                <td>Produto</td>
                <td>Preço</td>
            </tr>
            <tr>
                <td>100</td>
                <td>Cachorro Quente</td>
                <td>R$12,70</td>
            </tr>
            <tr>
                <td>101</td>
                <td>Bauru Simples</td>
                <td>R$4,00</td>
            </tr>
            <tr>
                <td>102</td>
                <td>Bauru com Ovo</td>
                <td>R$4,60</td>
            </tr>

            <tr>
                <td>103</td>
                <td>Hambúrguer</td>
                <td>R$15,00</td>
            </tr>
            <tr>
                <td>104</td>
                <td>Cheeseburguer</td>
                <td>R$13,50</td>
            </tr>
            <tr>
                <td>05</td>
                <td>Refrigerante</td>
                <td>R$4,50</td>
            </tr>
        </table>
    </div>
    <?php include 'includefooter.php'; ?>
    <br>




</body>

</html>