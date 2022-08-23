<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET 2</title>
</head>
<body>
    
</body>
</html>


<h1> Preencha 3 números por gentileza </h1>
    <form action="exercicioget2.php" method="get">
       Número 1: <input name="num1" type="number" placeholder="NUMERO1">
        <br>
        Número 2: <input name="num2" type="number" placeholder="NUMERO2">
        <br>
        Número 3: <input name="num3" type="number" placeholder="NUMERO3">
        <br>
       
        <button type="submit"> QUAL É O MAIOR?  </button>

        <?php 
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];
        $array = [$num1, $num2, $num3];
        max($array);
        echo max($array);

        ?>
    </form>