<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>

<body>
    <h1>BIBLIOTECA</h1>
    <hr>
    <h2>Bem-vindo</h2>
    <h3>Empréstimo de livro</h3>

    <form action="aula10-emprestimo.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" value="" required><br><br>
        <label for="titulo-livro">Título do livro: </label>
        <input type="text" name="titulo-livro" value="" required>
        <button type="submit" name="enviar" value="enviar">Emprestar</button>
    </form>
    <hr>
</body>

</html>