<?php

// funções nativas

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



// função número absoluto (num positivo)

echo "<br> Absoluto <br>";

$num = 10;

echo $num . "<br>";
echo abs($num);
echo "<hr>";

//---------------------------------------------------------------
//função número absoluto (num positivo)

echo "<br><br> Pi <br>";

echo pi();
echo "<hr>";

//---------------------------------------------------------------

// função arredondar núm p baixo

echo "<br><br> Arredondar num para baixo <br>";

$n = 2.8;
echo $n . "<br>";

echo floor($n);

echo "<br><br> Arredondar um para cima <br>";
$n2 = 3.3;
echo "<br>" . $n2 . "<br>";

echo ceil($n2);

echo "<br><br> Arredondar<br>";
$n3 = 3.4;
echo "<br>" . $n3 . "<br>";

echo round($n3);

echo "<br><br> Arredondar casas decimais <br>";
$n4 = 3.653647;
echo "<br>" . $n4 . "<br>";

echo round($n4, 2);
echo "<br>";
echo "<hr>";
//----------------------------------------------------------------

// função num aleatório

echo "<br><br> Número aleatório <br>";

$randomico = rand(2, 100);

echo $randomico;
echo "<hr>";

//----------------------------------------------------------------

//função num menor e maior do array

echo "<br><br> Número maior <br>";

$nMaior = [3, 6, 8, 9, 10, 15, 25];

echo max($nMaior);

echo "<br><br> Número num menor <br>";

$nMenor = [2, 3, 6, 1, 3, 6, 4, 7];

echo min($nMenor);
echo "<hr>";

//----------------------------------------------------------------

//função retirar espaços

echo "<br><br> Manipulação de string <br>";
echo "<br> Retirar espaços <br>";

$nomeComEspaço = "   Rombinson - Machado   ";

echo "teste<br>" . $nomeComEspaço;

$nomeSemEspaço = trim($nomeComEspaço);
$nomeSemEspaçoFinal = rtrim($nomeComEspaço);
$nomeSemEspaçoInicio = ltrim($nomeComEspaço);
// echo "<br>" . $nomeSemEspaço;
echo "<br> com espaço " . strlen($nomeComEspaço);
echo "<br> sem espaço " . strlen($nomeSemEspaço);
echo "<br> sem espaço Final " . strlen($nomeSemEspaçoFinal);
echo "<br> sem espaço Inicio " . strlen($nomeSemEspaçoInicio);
echo "<hr>";

//----------------------------------------------------------------

//função lower/upper

echo "<br><br>LOWER case";
$nome1 = "robinson machado";
echo "<br>" . strtolower($nome1);
echo "<br><br>UPPER case";
$nome1 = "robinson machado";
echo "<br>" . strtoupper($nome1);
echo "<br><br>ucfirst case";
$nome1 = "robinson machado";
echo "<br>" . ucfirst($nome1);
$nome1 = "robinson machado";
echo "<br><br>ucwords case";
echo "<br>" . ucwords($nome1);
echo "<hr>";

//----------------------------------------------------------------
// função recuperar alguns caracteres

echo "<br><br> Escolher alguns strings <br>";

$nome2 = "Tiepermann";

echo "<br>" . $nome2;
echo "<br>" . substr($nome2, 1, 5);
echo "<br>" . substr($nome2, -4, 3);
echo "<hr>";

//----------------------------------------------------------------

//função recuperar alguns caracteres

echo "<br><br> retorna a posição da strin encontrada <br>";

$nome2 = "Tiepperman";

echo $posiçao = strpos($nome2, 'm');
echo "<hr>";

//----------------------------------------------------------------

echo "<br><br> Transformar String em um Array <br>";

echo $nomeCompleto = "Robinson Vicente Rondon Machado <br>";
$nomeArray = explode(" ", $nomeCompleto);

print_r($nomeArray);
echo "<hr>";

//----------------------------------------------------------------

echo "<br><br> Formatar números <br>";

$numeroFormatar = 2569.555;
echo "<br>" . $numeroFormatar;
echo "<br>" . number_format($numeroFormatar, 2, ',', '.');
echo "<br>";
echo "<hr>";


//----------------------------------------------------------------

echo "<br><br> Contar quantas posições tem no array <br>";

$listaArray = [1, "Robinson", 211, "Odonto", "Lions"];

echo "Total: " . count($listaArray);
echo "<hr>";

//----------------------------------------------------------------

echo "<br><br> Diferença entre os arrays <br>";

$listaAlunos = ["Robinson", "Edson", "Rodrigo", "Odonto", "Lions"];
$alunosAprovados = ["Robinson", "Edson"];

$reprovados = array_diff($listaAlunos, $alunosAprovados);

print_r($reprovados);
echo "<hr>";

//----------------------------------------------------------------

echo "<br><br> Filtrar algo no array <br>";

//deve conter true or false

$numArray = [1, 112, 25, 36, 85];

$filtrados = array_filter($numArray, function ($item) {
    if ($item > 36) {
        return true;
    } else {
        return false;
    }
});

print_r($filtrados);
echo "<hr>";

//----------------------------------------------------------------


// Alateração do Array

echo "<hr>";

//----------------------------------------------------------------

echo "<br><br> Remove o ultimo item do array <br>";

$numArray = [1, 112, 25, 36, 85];

array_pop($numArray);

print_r($numArray);
echo "<hr>";

//----------------------------------------------------------------

echo "<br><br> Remove o primeiro item do array <br>";

$numArray = [1, 112, 25, 36, 85];

array_shift($numArray);

print_r($numArray);
echo "<hr>";

//----------------------------------------------------------------

echo "<br><br> Buscar algo no array <br>";

$numArray = [1, 112, 25, 36, 85];

if (in_array(112, $numArray)) {
    echo "tem";
} else {
    echo "Não tem";
}
echo "<hr>";
//----------------------------------------------------------------

echo "<br><br> Buscar algo no array se tiver retorna a posição <br>";

$numArray = [1, 112, 25, 36, 85];

$pos = array_search(36, $numArray);

echo $pos;
echo "<hr>";

//----------------------------------------------------------------

echo "<br><br> Ordenação em ordem crescente <br>";

$numArray = [1, 112, 25, 36, 85];

sort($numArray);

echo "<hr>";

//----------------------------------------------------------------

echo "<br><br> Ordenação em ordem decrescente <br>";

$numArray = [1, 112, 25, 36, 85];

rsort($numArray);

print_r($numArray);
echo "<hr>";

//----------------------------------------------------------------

echo "<br><br> Ordenação em ordem crescente mantendo a chave <br>";

$numArray3 = [1, 112, 90, 25, 36, 85];

asort($numArray3);

print_r($numArray3);
echo "<hr>";

//----------------------------------------------------------------

echo "<br><br> Ordenação em ordem decrescente mantendo a chave <br>";

$numArray3 = [1, 112, 90, 25, 36, 85];

arsort($numArray3);

print_r($numArray3);
echo "<hr>";

//----------------------------------------------------------------

echo "<br><br> Destruindo um array e montando uma string <br>";

$arrayNomeCompleto = ["Edson", "Luz", "Tiepermann", "Junior"];

print_r($arrayNomeCompleto);

$string = implode(" ", $arrayNomeCopleto);

echo "<br><br> String montada: $string";
echo "<hr>";

//----------------------------------------------------------------

echo '<br> Array Map<br>';
function functionArrayMap($item)
{
    if ($item === "Edson") {
        return "$item} - Professor da tarde. Chute no S***";
    } elseif ($item === "Robinson") {
        return "{$item} - Professor da Noite. Quebrou a Caneca";
    } elseif ($item === "Felipe") {
        return "{$item} - Aluno da Noite.";
    } elseif ($item === "Leonardo") {
        return "{$item} - Aluno da tarde, infiltrado na noite.";
    }
}

$arrayParaMapear = array("Edson", "Robinson", "Felipe", "Leonardo");
echo "<pre>";
print_r(array_map("functionArrayMap", $arrayParaMapear));
echo "</pre>";

//----------------------------------------------------------------

echo '<br>Arrays<br>';

$filmes = [
    [
        'titulo' => 'Vingadores: Ultimato',
        'imdb' => 8.4,
        'faturamento_us' => 858300000,
        'faturamento_br' => 85660000
    ],
    [
        'titulo' => 'Avatar',
        'imdb' => 7.8,
        'faturamento_us' => 760500000,
        'faturamento_br' => 58210000
    ],
    [
        'titulo' => 'Titanic',
        'imdb' => 7.8,
        'faturamento_us' => 6593600000,
        'faturamento_br' => 70460000
    ],
];

//array_map

//  A função array_map tem como objetivo percorrer todo o array e mapear cada um dos itens, proessando-os
//  com o que é pedido, e gerando um novo array com os novos valores.

// vamos supor que o valor total das arrecadações são valores brutos.
// e que nós vamos descontar os impostos para mostrar o valor líquido.
// Vamos usar os valores fictícios de 16% para o Brasil e 6% para os Estados Unidos.

echo 'Array map';

$filmesDepoisDosImpostos = array_map(function ($filme) {
    $filme['faturamento_us'] -= $filme['faturamento_us'] * 0.06;
    $filme['faturamento_br'] -= $filme['faturamento_br'] * 0.16;
    return $filme;
}, $filmes);
echo 'teste<br>';
echo '<pre>';
print_r($filmesDepoisDosImpostos);
echo "</pre>";
echo '<hr>';

//array_filter
/**
 * A função array_filter tem como objetivos filtrar os itens do array que atendam à uma condição
 * estipulada dentro da função, e gerando um novo array apenas com os itens filtrados.
 */
echo 'array filter';
$filmesNotaMenorQueOito = array_filter($filmes, function ($filme) {
    return $filme['imdb'] < 8;
});
echo "<pre>";
print_r($filmesNotaMenorQueOito);
echo "</pre>";
echo "<hr>";

//array_reduce
/**
 * A função array_reduce tem como objetivo reduzir o array a um único valor
 */
