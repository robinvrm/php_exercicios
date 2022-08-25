<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
    header("location: aula4-ex3.php"); exit;
}
?>
<?php
if ($login == "robin" && $senha == "desenv") {
    echo "<h1>Logado com sucesso!</h1>";
} else {
    echo "<h1 style = 'color:red'>Usuário e/ou senha incorretos!</h1>";
}
?>