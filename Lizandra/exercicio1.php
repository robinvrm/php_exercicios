<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Olá, qual é o horário agora? </h1>

    <form action="exercicio1.php" method="post">
        <input name="numHor" type="text" placeholder="Horário">
        <br>
        <br>
        <button type="submit"> Saudação </button>
    </form>

    <?php

    $horario = $_POST['numHor'];

    if ($horario <= 12) {
        echo "Bom dia.";
    } else if ($horario >12 && $horario <= 18) {
        echo "Boa tarde";
    } else if ($horario > 18 && $horario <= 24) {
        echo "Boa noite";
    }



    ?>
</body>

</html>