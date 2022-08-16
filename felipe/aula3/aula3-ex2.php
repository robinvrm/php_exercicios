<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 2</title>
</head>
<body>
    <!-- Desenvolva um script que recebe duas notas de um aluno. Em seguida deve ser calcular a média do aluno e dar o seguinte resultado:
        A mensagem "Aprovado", se a média alcançada for maior ou igual a seis;
        A mensagem "Reprovado", se a média for menor do que seis;
        A mensagem "Aprovado com Distinção", se a média for igual a dez. -->

    <h1>Exercício 2</h1>
    <small>
        <span>
            Desenvolva um script que recebe duas notas de um aluno. Em seguida deve ser calcular a média do aluno e dar o seguinte resultado:
        </span>
        <ul>
            <li>
                A mensagem "Aprovado", se a média alcançada for maior ou igual a seis;
            </li>
            <li>
                A mensagem "Reprovado", se a média for menor do que seis;
            </li>
            <li>
                A mensagem "Aprovado com Distinção", se a média for igual a dez.
            </li>
        </ul>
    </small>
    <hr>
    <form action = "aula3-ex2.php" method = "post">
        <input type = "text" name = "num1" placeholder = "Valor 1">
        <input type = "text" name = "num2" placeholder = "Valor 2">
        <button type = "submit" name = "enviar" value = "enviar">Calcular a média</button>
    </form>
    <br>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $msgAprov = 'Aprovado';
    $msgReprov = 'Reprovado';
    $msgAprovDist = 'Aprovado com distinção';
    $media = ($num1+$num2)/2;

    if ($media < 6) {
        echo $msgReprov;
    }
    else if ($media >= 6 && $media < 10) {
        echo $msgAprov;
    }
    else if ($media = 10) {
        echo $msgAprovDist;
    }
    ?>
</body>
</html>