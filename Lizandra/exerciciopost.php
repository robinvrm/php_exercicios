<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <h1>Formulário </h1>
    <form action="exerciciopost.php" method="post">
        <input name="nome" type="text" placeholder="LOGIN">
        <input name="pass" type="text" placeholder="SENHA">
        <button type="submit"> LOGAR </button>
    </form>

    
    
    <?php
    $login = "robin";
    $senha = "desenv";

$login2 = $_POST['nome'];
$senha2 = $_POST['pass'];

if ($login == $login2 && $senha == $senha2) {
    header('location:logadocomsuss.php');
} else {
    echo'Die';
    die();
}

?>

</body>

</html>