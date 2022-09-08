<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo sort</title>
</head>

<body>
    <!--2. Crie um formulário que receba três números e verifique qual dele é o maior.
    Faça validação dos campos de modo que o usuário tenha que preencher todos os campos -->


    <h1>Verificar qual número é maior</h1>

    <form action="./ex02.php" method="get">
        <input type="number" name="n1" placeholder="número 1">
        <input type="number" name="n2" placeholder="número 2">
        <input type="number" name="n3" placeholder="número 3">
        <button type="submit">Enviar</button>
    </form>

    <?php
    //** Verificar porque não está dando opção de colocar número fracionado**/

    $numero1 = $_GET['n1'];
    $numero2 = $_GET['n2'];
    $numero3 = $_GET['n3'];
    $array = [];

    if (!is_numeric($numero1)) {
        die("inserir numero em todos os campos");
    }
    if (!is_numeric($numero2)) {
        die("inserir numero em todos os campos");
    }
    if (!is_numeric($numero3)) {
        die("inserir numero em todos os campos");
    }

    array_push($array, $numero1, $numero2, $numero3);
    sort($array);

    echo end($array);
    ?>

</body>

</html>