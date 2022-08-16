<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 1</title>
</head>
<body>
    <!-- Desenvolva um script com mensagens de saudações. Crie uma variável para inserir um horário e a partir do horário realizar as verificações, se o horário for até as 12 horas, escreva Bom dia, se passar das 12 e for até as 18 horas escreva boa tarde e se passar das 18 horas até a 0 horas escreva boa noite; -->
    
    <h1>Exercício 1</h1>
    <small>
        Desenvolva um script com mensagens de saudações. Crie uma variável para inserir um horário e a partir do horário realizar as verificações, se o horário for até as 12 horas, escreva Bom dia, se passar das 12 e for até as 18 horas escreva Boa tarde e se passar das 18 horas até a 0 horas escreva Boa noite.
    </small>
    <hr>
    <form action = "aula3-ex1.php" method = "post">
        <input type = "text" name = "horario" placeholder = "Horário">
        <button type = "submit" name = "enviar" value = "enviar">Saudação</button>
    </form>
    <br>
    <?php
    $horario = $_POST['horario'];
    $saudacao1 = 'Bom dia';
    $saudacao2 = 'Boa tarde';
    $saudacao3 = 'Boa noite';

    if ($horario < 12) {
        echo $saudacao1;
    }
    else if ($horario >= 12 && $horario < 18) {
        echo $saudacao2;
    }
    else if ($horario >= 18 && $horario < 24) {
        echo $saudacao3;
    }
    ?>
</body>
</html>