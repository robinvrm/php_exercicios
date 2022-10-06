<?php

session_start();
$_SESSION['nome'] = 'robin';
$_SESSION['idade'] = '34';

echo $_SESSION['nome'];

?>

<h1> Session </h1>