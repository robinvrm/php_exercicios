<?php
if (!empty($_POST) AND (empty($_POST['nome']) OR empty($_POST['email']) OR empty($_POST['nascimento']) OR empty($_POST['pagamento']))) {
    header("location: aula4-ex4.php"); exit;
}
?>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$postNasc = $_POST['nascimento'];
$nascimento = date('d/m/Y', strtotime($postNasc));
$pagamento = filter_input(INPUT_POST, 'pagamento');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <h1>Exercício</h1>
    <ul>
        <li>
            Nome:
            <?php echo $nome; ?>
        </li>
        <li>
            E-mail:
            <?php echo $email; ?>
        </li>
        <li>
            Data de nascimento:
            <?php echo $nascimento; ?>
        </li>
        <li>
            Forma de pagamento:
            <?php echo $pagamento; ?>
        </li>
    </ul>
    
</body>
</html>