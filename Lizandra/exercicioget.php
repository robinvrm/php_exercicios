<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get</title>
</head>

<body>
    <h1> Preencher o nome do aluno e suas notas </h1>
    <form action="exercicioget.php" method="get">
        Nome do Aluno: <input name="nome" type="text" placeholder="Nome">
        <br>
        Primeira Nota: <input name="num1" type="text" placeholder="Nota1">
        <br>
        Segunda Nota: <input name="num2" type="text" placeholder="Nota2">
        <br>
        Terceira Nota: <input name="num3" type="text" placeholder="Nota3">
        <button type="submit"> MÉDIA </button>
    </form>

    <?php


    $nome = $_GET['nome'];
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    if ((!is_numeric($num1)) || (empty($num1)) || (!is_numeric($num2))  || (empty($num2)) || (!is_numeric($num3)) || (empty($num3)) ||  (is_numeric($nome))) {
        die("ERROU");
    }

    $media = (($num1 + $num2 + $num3) / 3);

    echo "Média : $media";




    ?>

</body>

</html>