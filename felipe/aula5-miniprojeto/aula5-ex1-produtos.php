<?php include 'aula5-ex1-header.php'; ?>
<div id = "header">
        <h1>Cardápio</h1>
        <table>
            <tr>
                <th>Código</th>
                <th>Produto</th>
                <th>Preço Unitário (R$)</th>
            </tr>
            <tr>
                <td>100</td>
                <td>Cachorro Quente</td>
                <td>R$ 12,70</td>
            </tr>
            <tr>
                <td>101</td>
                <td>Bauru Simples</td>
                <td>R$ 4,00</td>
            </tr>
            <tr>
                <td>102</td>
                <td>Bauru com ovo</td>
                <td>R$ 4,60</td>
            </tr>
            <tr>
                <td>103</td>
                <td>Hambúrguer</td>
                <td>R$ 15,00</td>
            </tr>
            <tr>
                <td>104</td>
                <td>Cheeseburger</td>
                <td>R$ 13,50</td>
            </tr>
            <tr>
                <td>105</td>
                <td>Refrigerante</td>
                <td>R$ 4,50</td>
            </tr>
        </table>
        <br>
        <span>
            Escolha os itens desejados, digite o código do produto abaixo e aperte em INSERIR. <br>
            Ao concluir seu pedido, aperte em CONCLUIR.
        </span>
        <hr>
        <form action = "aula5-ex1-produtos-verifica.php" method = "post">
            <form action = "" method = "post">
                <input type = "text" name = "codigo" id = "codigo" placeholder = "Digite o código" required>
                <button type = "submit" class = "botao" id = "botao-inserir"><strong>INSERIR</strong></button>
            </form>
            <button type = "submit" class = "botao" id = "botao-concluir"><strong>CONCLUIR</strong></button>
        </form>
        <br>
    </div>
    
<?php include 'aula5-ex1-footer.php'; ?>