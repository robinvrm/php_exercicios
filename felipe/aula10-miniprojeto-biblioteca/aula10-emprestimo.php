<?php require 'aula10-usuarios.php'; ?>
<?php $usuarioLogado = $_POST['nome']; ?>
<?php $tituloLivro = $_POST['titulo-livro']; ?>

<?php
$hoje = new DateTimeImmutable();
$limiteAluno = new DateInterval('P3D');
$limiteProfessor = new DateInterval('P10D');
$limiteDevolucaoAluno = $hoje->add($limiteAluno);
$limiteDevolucaoProfessor = $hoje->add($limiteProfessor);
$dataHoje = $hoje->format('d/m/Y H:i:s');
$dataDevolucaoAluno = $limiteDevolucaoAluno->format('d/m/Y');
$dataDevolucaoProfessor = $limiteDevolucaoProfessor->format('d/m/Y');
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
    <h1>BIBLIOTECA</h1>
    <hr>
    






    
    <!-- FALTA ACERTAR DETALHES PARA FUNCIONAR CORRETAMENTE -->








 
    <?php foreach ($usuarios AS $usuario) { ?>
        <?php $nome = $usuario['nome']; ?>
        <?php $funcao = $usuario['funcao']; ?>
        <?php if ($usuarioLogado == $nome) { ?>
            <h3>Recibo - Empréstimo de livro</h3>
            <?php echo "<p>Nome: $nome</p>"; ?>
            <?php echo "<p>Função: $funcao</p>"; ?>
            <br>
            <?php echo "<p>Livro selecionado para empréstimo:</p>"; ?>
            <?php echo "<p>$tituloLivro</p>"; ?>
            <?php echo "<p>Data do empréstimo:</p>"; ?>
            <?php echo "<p>$dataHoje</p>"; ?>

            <?php if ($funcao == 'Aluno') { ?>
                <?php echo "<p>Data de devolução:</p>"; ?>
                <?php echo "<p>$dataDevolucaoAluno</p>"; ?>
            <?php } else if ($funcao == 'Professor') { ?>
                <?php echo "<p>Data de devolução:</p>"; ?>
                <?php echo "<p>$dataDevolucaoProfessor</p>"; ?>
            <?php } ?>
        <?php } else { ?>
            <?php echo "<h2 style='color:red;'>Você não está cadastrado no sistema.</h2>"; exit;?>
        <?php } ?>
    <?php } ?>
    <hr>
</body>

</html>