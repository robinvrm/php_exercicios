<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Projeto</title>
</head>

<body>
    <h1>Formulário com login e senha</h1>
    <form action="./validatela.php" method="post">
        <input type="password" name="login" placeholder="login">
        <input type="password" name="senha" placeholder="senha">
        <button type="login" onclick="logar(); return false" Placeholder="Enter">Enter</button>
    </form>


</body>

</html>


<!-- Exercício
Colocar o o header e footer do HTML em arquivos separados, e fazer a chamada do arquivo para incluir.

1 - crie um tela de login. usuário e senha, ao clicar no botão LOGIN precisa validar os campos. a validação de campos deverá ser feito em um arquivo separado.
se o login for bem sucedido, entra na segunda página a ser feita,
se não for bem sucedido, mostrar msg de erro na tela. (login
para verificação, crie seu nome e uma senha qualquer)

2 - TELA ao fazer o login.
deverá fazer uma tela onde mostrará as opcoes de cardápio dos lanches, um input para inserir o código do lanche e 2 botões, primeiro INSERIR, segundo CONCLUIR. o botão de inserir, deverá verificar se o código existe (em um arquivo php separado) e caso existir inserir o código do lanche em um array, se não existir, mostrar erro na tela que o código não existe. poderá inserir quantos códigos quiser.
o botão de concluir, fará a soma da compra. Deverá abrir uma terceira tela a ser feita.

3- TELA pedido

nessa tela deverá aparecer os itens pedido pelo cliente, os valores de cada item e o total do pedido. -->