<?php
$login = $_POST["login"];
$senha = $_POST["senha"];

// if (!is_string($login)) {
//     die("Preencha campo de login e senha válido");
// }
// if (!is_string($senha)) {
//     die("Preencha campo de login e senha válido");
// }

if ($login === 'Robin' && $senha === 'desenv') {
    echo "logado com sucesso";
    // echo "<a href=teste.php><a/>";
} elseif ($login != 'Robin' || $senha != 'desenv') {
    echo "Preencha campo de login e senha válido";
    die();
}
