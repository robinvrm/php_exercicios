<?php
$login = $_POST["login"];
$senha = $_POST["senha"];

// if (!is_string($login)) {
//     die("Preencha campo de login e senha válido");
// }
// if (!is_string($senha)) {
//     die("Preencha campo de login e senha válido");
// }

if ($login === 'iago' && $senha === '123456') {
    echo "Logado com sucesso! Clic em OK para seguir ao Menu!";
    echo "<a href=teste.php><a/>";
} elseif ($login != 'iago' || $senha != '123456') {
    echo "Preencha campo de login e senha válido";
    die();
}
?>
<form action="./menu.php" method="post">
    <button type="submit">OK</button>
</form>