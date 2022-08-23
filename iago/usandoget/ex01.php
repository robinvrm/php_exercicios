<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Alunos</title>
</head>

<body>
    <!-- 1 - crie um formulário que receba o nome do estudante, 
    3 notas de 0 a 10 e calcule a média quando um botão de submit
    for pressionado! Faça a validação dos campos de modo que usuario tenha que
    preencher todos os campos e todos os numéricos. -->

    <h1>Média alunos</h1>

    <form action="./ex01.php" method="get">
        <input type="text" name="name" placeholder="name">
        <input type="number" name="nota1" placeholder="nota1">
        <input type="number" name="nota2" placeholder="nota2">
        <input type="number" name="nota3" placeholder="nota3">
        <button type="submit">Calcular</button>
    </form>
    <?php
    $name = $_GET['name'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $media = ($nota1 + $nota2 + $nota3) / 3;

    if (is_numeric($name)) {
        die("inserir nome");
    }
    echo "<br/>";
    if ($nota1 < 0 || $nota1 > 10) {
        die("insira apenas números de 0 a 10 no campo nota 3, nota 2 e nota 3");
    }
    if (!is_numeric($nota1)) {
        die("inserir nota 1");
    }
    if ($nota2 < 0 || $nota2 > 10) {
        die("insira apenas números de 0 a 10 no campo nota 3, nota 2 e nota 3");
    }
    if (!is_numeric($nota2)) {
        die("inserir nota2");
    }
    if ($nota3 < 0 || $nota3 > 10) {
        die("insira apenas números de 0 a 10 no campo nota 3, nota 2 e nota 3");
    }
    if (!is_numeric($nota3)) {
        die("inserir nota 3");
    }
    echo "A nota de $name é $media";
    ?>
</body>

</html>