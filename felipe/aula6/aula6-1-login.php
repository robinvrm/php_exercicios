<!-- Gravar login na session -->

<?php
session_start();

$_SESSION['login'] = $_POST['login'];
$_SESSION['senha'] = $_POST['senha'];

$sessionLogin = $_SESSION['login'];
$sessionSenha = $_SESSION['senha'];
print_r($_SESSION);

if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
    header("location: aula6-1-home.php"); exit;
}
?>
<?php
if ($sessionLogin == "felipe" && $sessionSenha == "felipe123") {
    echo "<h1>Logado com sucesso!</h1>";
    echo "<small>O seu usuário gravado em session é <strong>$sessionLogin</strong>, e sua senha é <strong>$sessionSenha</strong></small>";
    // echo "<script type='text/JavaScript'> setTimeout(function () { window.location.href = 'aula5-ex1-produtos.php'; }, 3000); </script>";
} else {
    echo "<h1 style = 'color:red'>Usuário e/ou senha incorretos!</h1>";
    echo "<script type='text/JavaScript'> setTimeout(function () { window.location.href = 'aula6-1-home.php'; }, 3000); </script>";
}
?>
