<!-- 4 - Fazer um sistema para uma livraria Online.

tela de produtos (10 livros e seus respectivos preços). Os nomes dos livros devem ser todos compostos;

escolha de produtos. Ao escolher os produtos, irá para o carrinho.
No carrinho, aparecer os produtos selecionados, preço de cada 1 e preço total.

Nessa mesma tela, irá cadastrar forma de pagamento, nome da pessoa e endreço de entrega. (regição);

se for região sul, a taxa de entrega é gratis e até 7 dias prazo de entrega.

região sudeste, entrega fixa de 15 reais e entrega em até 15 dias.

outras regiões do brasil, taxa de entrega de 30 reais e entrega em até 20 dias.

Mostrar a previsão de entrega a partir da data do pagamento.

No recibo final, mostrar apenas o primeiro nome do livro e seus respectivos valores, o nome completo da pessoa,
a data limite da entrega e o total da compra.

FORMA DE pagamento
boleto, cartão de crédito e pix.
boleto irá contar a partir de 3 dias da data da compra.
cartão 12 horas a partir da data da compra.
pix conta a partir do momento da compra. -->

<h1>Livrarias Online</h1>

<table>
    <tr>
        <td>Livros</td>
        <td>Preço</td>
    </tr>
    <tr>
        <td>Administradores Ponto Com</td>
        <td>R$70,00</td>
    </tr>
    <tr>
        <td>Os segredos das mentes</td>
        <td>R$55,00</td>
    </tr>
    <tr>
        <td>Programação para Iniciantes</td>
        <td>R$75,00</td>
    </tr>
    <tr>
        <td>Os cientistas de Hitler</td>
        <td>R$99,00</td>
    </tr>
    <tr>
        <td>Quem pensa Enriquece</td>
        <td>R$65,00</td>
    </tr>
    <tr>
        <td>Negócio Escalável</td>
        <td>R$45,00</td>
    </tr>
    <tr>
        <td>Gestão Fácil</td>
        <td>R$50,00</td>
    </tr>
    <tr>
        <td>Harry Poter</td>
        <td>R$77,00</td>
    </tr>
    <tr>
        <td>O senhor dos Anéis</td>
        <td>R$88,00</td>
    </tr>
    <tr>
        <td>O Alienista</td>
        <td>R$95,00</td>
    </tr>
</table>

<br>
<form action="" method="post">

    <div>
        <label for="">100 -HARRY POTTER</label>
        <input type="number" max="10" min="1" name="divide" placeholder="2 a 10">
        <!-- <input type="text" name="item1"> -->
    </div>
    <div>
        <label for="">200 - LIVRO 2</label>
        <input type="number" max="10" min="1" name="divide" placeholder="2 a 10">
        <!-- <input type="text" name="item2"> -->
    </div>

    <button type="submit">ENVIAR COMPRA</button>
</form>