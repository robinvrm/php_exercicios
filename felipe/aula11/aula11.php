<?php
//funçoes nativas//
//////////////////////////////////////////////
echo "Recursiva <br><br>";

function dividir($numero)
{
    $result = $numero / 2;
    echo "$numero <br>";

    if (round($result) > 0) {
        dividir($result);
    }
}

dividir(50);
echo "<hr>";
//////////////////////////////////////////////
//funçao numero absoluto (num positivo)
echo "<br>Absoluto<br>";
$num = -9.5;

echo $num . "<br>";
echo abs($num);
echo "<hr>"
//////////////////////////////////////////////
//funçao numero absoluto (num positivo)
echo "<br>Pi<br>";

echo pi();
echo "<hr>";
//////////////////////////////////////////////
//funçao arredondar num para baixo
echo "<br>Arredondar num para baixo<br>";
$n = 2.8;
echo "<br>" . $n . "<br>";
echo floor($n);

echo "<br>Arredondar num para cima<br>";
$n2 = 3.3;
echo "<br>" . $n2 . "<br>";
echo ceil($n);

echo "<br>Arredondar<br>";
$n3 = 3.5;
echo "<br>" . $n3 . "<br>";
echo round($n);

echo "<br>Arredondar casas decimais<br>";
$n4 = 3.653547;
echo "<br>" . $n4 . "<br>";
echo round($n4, 2);
echo "<hr>";
//////////////////////////////////////////////
//funçao num aleatorio
echo "<br>Número aleatório<br>";

$randomico = rand(2, 100);

echo $randomico;
echo "<hr>";
//////////////////////////////////////////////
//funçao num menor e maior do array
echo "<br>Número num maior<br>";
$nMaior = [3, 6, 8, 9, 10, 15, 25];
echo max($nMaior);

echo "<br>Número num menor<br>";
$nMenor = [2, 3, 6, 1, 3, 6, 4, 7];
echo min($nMaior);
echo "<hr>";
//////////////////////////////////////////////
//funçao retirar espaços
echo "<br>Manipulação de string<br>";
echo "<br>Retirar espaços<br>";

$nomeComEspaco = "    Robinson - Machado    ";

echo "teste<br>" . $nomeComEspaco;

$nomeSemEspaco = trim($nomeComEspaco);
$nomeSemEspacoFinal = rtrim($nomeComEspaco);
$nomeSemEspacoInicio = ltrim($nomeComEspaco);

echo "<br> com espaço " . strlen($nomeComEspaco);
echo "<br> sem espaço " . strlen($nomeSemEspaco);
echo "<br> sem espaço FINAL " . strlen($nomeSemEspacoFinal);
echo "<br> sem espaço INICIO " . strlen($nomeSemEspacoInicio);
echo "<hr>";
//////////////////////////////////////////////
//funçao lower/upper
echo "<br>Manipulação de string<br>";
echo $nome1 = "robinson machado";

echo "<br>" . strtolower($nome1); //tudo minusculo
echo "<br>" . strtoupper($nome1); //tudo maiusculo
echo "<br>" . ucfirst($nome1); //primeira inicial da string maiuscula
echo "<br>" . ucwords($nome1); //primeira inicial de cada palavra maiuscula
echo "<hr>";
//////////////////////////////////////////////
//funçao recuperar alguns caracteres
echo "<br>Escolher algumas strings<br>";

$nome2 = "Tipermann";

echo "<br>" . $nome2;
echo "<br>" . substr($nome2, 1, 5); //o primeiro parametro é de onde inicia (começa em 0) e até onde vai
echo "<br>" . substr($nome2, -4, 3);
echo "<hr>";
//////////////////////////////////////////////
//funçao recuperar alguns caracteres
echo "<br>Retorna a posição da string encontrada<br>";
$posicao = "Tiepperman";
echo $posicao = strpos($nome2, 'p');
echo "<hr>";
//////////////////////////////////////////////
//transformar o nome no array
echo "<br>Transformar o nome no array<br>";

echo $nomeCompleto = "Robinson Vicente Rondon Machado<br>";
$nomeArray = explode(" ", $nomeCompleto);

print_r($nomeArray);
echo "<hr>";
//////////////////////////////////////////////

echo "<br>Formatar números<br>";

$numeroFormatar = 2569.5555;
echo "<br>" . $numeroFormatar;
echo "<br>" . number_format($numeroFormatar, 2, ',', '.');
echo "<hr>";
//////////////////////////////////////////////

echo "<br>Contar quantas posições tem no array<br>";

$listaArray = [1, "Robinson", 211, "Odonto", "Lions"];

echo "Total: " . count($listaArray);
echo "<hr>";
//////////////////////////////////////////////

echo "<br>Diferença entre os arrays<br>";

$listaAlunos = ["Robinson", "Edson", "Rodrigo", "Odonto", "Lions"];
$alunosAprovados = ["Robinson", "Edson"];

$reprovados = array_diff($listaAlunos, $alunosAprovados);

print_r($reprovados);
echo "<hr>";
//////////////////////////////////////////////

echo "<br>Filtrar algo no array<br>";
//deve conter true or false //funçao callback
$numArray = [1, 112, 25, 36, 85];

$filtrados = array_filter($numArray, function ($item) {
    if ($item < 86) {
        return true;
    } else {
        return false;
    }
});

print_r($filtrados);
echo "<hr>";
//////////////////////////////////////////////


?>
