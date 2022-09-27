<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>

<body>
    <h1>Boletos</h1>
    <hr>
    <h2>Pagamento</h2>

    <form action="aula12-ex3-pagar.php" method="POST">
        <label for="nome">Valor do boleto 1:</label>
        <input type="text" name="valor-boleto1" value="" required><br><br>
        <label for="titulo-livro">Data de vencimento 1:</label>
        <input type="date" name="data-vencimento1" value="" required>
        <label for="nome">Valor do boleto 2:</label>
        <input type="text" name="valor-boleto2" value="" required><br><br>
        <label for="titulo-livro">Data de vencimento 2:</label>
        <input type="date" name="data-vencimento2" value="" required>
        <label for="nome">Valor do boleto 3:</label>
        <input type="text" name="valor-boleto3" value="" required><br><br>
        <label for="titulo-livro">Data de vencimento 3:</label>
        <input type="date" name="data-vencimento3" value="" required>
        <button type="submit" name="enviar" value="enviar">Valor a pagar</button>
    </form>
    <hr>
</body>

</html>