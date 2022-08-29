<style>
    table,
    tr,
    td {
        border: black solid 3px;
    }
</style>

<body>
    <h1>Cardápio de Lanches</h1>
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
    <br>

    <form action="./menu.php" method="post">
        <input type="number" name="codigo" placeholder="inserir codigo">

        <button type="submit">Inserir</button>

    </form>

    <form action="./inserir.php" method="post">
        <button type="concluir">Concluir pedido</button>
    </form>
</body>

<?php
$codigo = $_POST['codigo'];
// $codigo = [];


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
    echo "Refrigerante R$4,50";
}

?>