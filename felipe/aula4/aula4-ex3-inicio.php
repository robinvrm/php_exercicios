<?php
if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
header("location: aula4-ex3.php"); exit;
}
?>
<?php
    function entrar() 
    {
        if ($login == "robin" && $senha == "desenv") {
            echo "<h1>Logado com sucesso!</h1>";
        } else {
            echo "Usuário e/ou senha incorretos!";
        }
    } 
?>
<?php
$login = $_POST['login'];
$senha = $_POST['senha'];
?>