<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
</head>
<body>
    <h1> Quais são as notas? </h1>
    <form action="exercicio2.php" method="get" >
      Primeiro Nota: <input name="num1" type="text"  placeholder="Nota1">
      <br>
      Segundo Nota: <input name="num2" type="text"  placeholder="Nota2">     
      <button type="submit"> MÉDIA </button>
    </form>

    <?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$media =($num1 + $num2)/2;

echo "Média : $media"; 


?>
</body>
</html>