<!-- FUNÇÕES PHP -->
<!-- Principais funções:

--com strings:
strlen(); conta quantidade de caracteres
strtolower(); deixa tudo minúsculo
strtoupper(); deixa tudo maiúsculo
str_replace()/str_ireplace(); procurar, substituir, mensagem

--com array:
explode();
implode();-->

<?php
$nome = "Felipe Holtz de Andrade";
$nomeArray = explode(" ", $nome);   //quebra nos espaços

echo "Primeiro nome: <b>{$nomeArray[0]}</b>,
        último nome: <b>{$nomeArray[1]} {$nomeArray[2]} {$nomeArray[3]}</b>";
?>

<br><br>
<?php
$nome = ['Felipe', 'Holtz', 'de', 'Andrade'];
$nomeArray = implode(" ", $nome);   //quebra nos espaços

echo "Nome: <b>$nomeArray</b>";
?>

<br><br>
<?php
$nome = ['Felipe', 'Holtz', 'de', 'Andrade'];
echo in_array('Felipe', $nome); //retorna true or false, 1 or 0
?>

<br><br>
<?php
$nome = ['Felipe', 'Holtz', 'de', 'Andrade'];
echo is_array($nome); //retorna true or false, 1 or 0
?>

<br><br>
<?php
$nome = ['Felipe', 'Holtz', 'de', 'Andrade'];
print_r($nome);
?>

<br><br>
<?php
$nome = ['Felipe', 'Holtz', 'de', 'Andrade'];
$nome2 = ['teste', 'rua', 'de', 'cavalo'];
$arraysMerge = array_merge($nome, $nome2);
print_r($arraysMerge);
?>

<br><br>
<?php
$nome = ['Felipe', 'Holtz', 'de', 'Andrade'];
echo array_pop($nome);
// array_push();
// array_unshift();
?>

<br><br>
<?php
$nom2 = ['Felipe', 'Holtz', 'de', 'Andrade', 'Felipe', 'Felipe', 'Felipe'];
$result = array_unique($nom2);
print_r($result);
?>