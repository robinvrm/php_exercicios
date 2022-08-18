<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <!-- Usando GET
        Crie um formulário que receba o nome do estudante, 3 notas de Zero à Dez e calcule a média quando um botão de submit for pressionado! Faça a validação dos campos de modo que usuário tenha que preencher todos os campos e todos numéricos. -->

    <h1>Exercício</h1>
    <h4>Usando GET</h4>
    <small>
        <ul>
            <li>Crie um formulário que receba o nome do estudante, 3 notas de Zero à Dez e calcule a média quando um botão de submit for pressionado</li>
            <li>Faça a validação dos campos de modo que usuário tenha que preencher todos os campos e todos numéricos</li>
        </ul>
    </small>
    <hr>
    <form action = "aula4-ex1.php" method = "get">
        <input type = "text" name = "nome" placeholder = "Nome" required>
        <input type = "number" name = "nota1" placeholder = "Nota 1" required>
        <input type = "number" name = "nota2" placeholder = "Nota 2" required>
        <input type = "number" name = "nota3" placeholder = "Nota 3" required>
        <button type = "submit" name = "enviar" value = "enviar">Calcular a média</button>
    </form>
    <br>
    <?php
    $nome = $_GET['nome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $media = ($nota1+$nota2+$nota3)/3;
    ?>
    <?php echo "$nome tem média $media"; ?>
</body>
</html>