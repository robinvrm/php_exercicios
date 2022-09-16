<!-- 01.01 - Conta Pizza
tela principal deverá informar quantidade de pizzas e valores.
5 pizzas/valores diferentes. Na próxima tela deverá aparecer a quantidade
de cada item, valor unitário, valor total dos itens (caso tenha sido escolhido
mais de 1) e valor total da compra.
Nessa tela ter a opção de "rachar a conta" ... caso escolha rachar a conta, deverá
informar em quantos o valor deverá ser dividido.-->

<!-- 01.02 - Adicionando ao exercício anterior, deverá ter opção de fidelização do
cliente, gerando pontos. A cada 50 reais, gera 1 ponto. 
No final da compra, deverá aparecer o saldo gerado na compra atual. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
</head>
<style>
    table,
    tr,
    td {
        border: black 3px solid;
    }
</style>

<body>
    <h1>Conta da Pizza</h1>

    <table>
        <tr>
            <td>110</td>
            <td>Grande</td>
            <td>Quatro Queijos</td>
            <td>R$78,00</td>
        </tr>
        <tr>
            <td>120</td>
            <td>Média</td>
            <td>Calabresa</td>
            <td>R$58,00</td>
        </tr>
        <tr>
            <td>130</td>
            <td>Pequena</td>
            <td>Frango</td>
            <td>R$48,00</td>
        </tr>
        <tr>
            <td>140</td>
            <td>Grande</td>
            <td>Chocolate</td>
            <td>R$68,00</td>
        </tr>

        <tr>
            <td>150</td>
            <td>Média</td>
            <td>Romeu e Julieta</td>
            <td>R$58,00</td>
        </tr>
    </table>
    <br><br>
    <form action="./ex06-02.php" method="post">
        <input type="text" placeholder="codigo pizza" name="pizza">
        <button type="submit" name="pedir">Pedir</button>
    </form>

    <?php



    ?>
</body>

</html>