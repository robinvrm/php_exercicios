<?php
    $login = "robin";
    $senha = "desenv";

$login2 = $_POST['nome'];
$senha2 = $_POST['pass'];

if ($login == $login2 && $senha == $senha2) {
    header('location:cardapio.php');
} else {
    echo'Die';
    die();
}

?>
