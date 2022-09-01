<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
    header("location: aula5-ex1.php"); exit;
}
?>
<?php
if ($login == "felipe" && $senha == "felipe123") {
    echo "<h1>Logado com sucesso!</h1>";
    echo "<script type='text/JavaScript'> setTimeout(function () { window.location.href = 'aula5-ex1-produtos.php'; }, 3000); </script>";
} else {
    echo "<h1 style = 'color:red'>Usuário e/ou senha incorretos!</h1>";
    echo "<script type='text/JavaScript'> setTimeout(function () { window.location.href = 'aula5-ex1.php'; }, 3000); </script>";
}
?>