<!-- Aula de session -->

<?php
session_start();
$_SESSION['nome'] = 'Felipe';
$_SESSION['idade'] = '33';

echo $_SESSION['nome'];
?>
<h1>SESSION</h1>
