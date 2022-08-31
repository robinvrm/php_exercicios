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

    <form action="./calcular.php" method="post">
        <input type="text" name="codigo" placeholder="inserir codigo">

        <button type="submit">Inserir</button>
</body>

