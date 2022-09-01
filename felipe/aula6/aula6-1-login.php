<!-- Gravar login na session -->

<?php
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;

$sessionLogin = $_SESSION['login'];
$sessionSenha = $_SESSION['senha'];

if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
    header("location: aula6-1-home.php"); exit;
}
?>
<?php
if ($login == "felipe" && $senha == "felipe123") {
    echo "<h1>Logado com sucesso!</h1>";
    echo "<small>O seu usuário gravado em session é <strong>$sessionLogin</strong>, e sua senha é <strong>$sessionSenha</strong></small>";
    // echo "<script type='text/JavaScript'> setTimeout(function () { window.location.href = 'aula5-ex1-produtos.php'; }, 3000); </script>";
} else {
    echo "<h1 style = 'color:red'>Usuário e/ou senha incorretos!</h1>";
    echo "<script type='text/JavaScript'> setTimeout(function () { window.location.href = 'aula6-1-home.php'; }, 3000); </script>";
}
?>
