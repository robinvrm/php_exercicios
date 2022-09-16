<!-- 
02 - Retirada de dinheiro caixa eletrônico.
Tela principal terá que ter as opções consulta de saldo e retirada de valor.
A tela de consulta, irá mostrar o saldo atual do cliente. (5k);
A tela de retirada deve ter a opção do cliente colocar o valor que ele queira tirar.
Na próxima tela, primeiramente precisa verificar se o cliente tem saldo suficiente
para fazer a retirada do valor indicado. //// Caso tenha, deverá mostrar as notas que
o caixa eletrônico tem disponível (um array, que pode variar dentre as notas
disponíveis); Próximo passo, o sistema deve mostrar a quantidade de notas que o
cliente irá receber e o valor que ele informou. No final, o sistema deverá mostrar
o saldo atual que existe na conta; //// -->

<h1>Saldo em caixa R$5.000,00</h1>

<form action="./ex07-01.php" method="post">
    <p>Insira o valor que deseja no campo retirada,<br>
        e o tipo de nota no campo (5,10,20,50,100,200)</p>
    <p>Retirar valores multiplos de 5,10,20,100 e 200</p>
    <input type="number" name="retirada" placeholder="valor retirada">
    <input type="text" name="notas" placeholder="5, 10, 20, 50, 100, 200">
    <button type="submit">Retirar</button>
</form>