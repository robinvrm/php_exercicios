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
echo "<hr>";
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
echo "<br>Alteração de array<br>";
//não serve para realizar filtros
$numArray = [1, 112, 25, 36, 85];

$resultado2 = array_map(function ($item) {
    return $item * 2;
}, $numArray);

print_r($resultado2);
echo "<hr>";
//////////////////////////////////////////////

echo "<br>Remove o ultimo item do array<br>";

$numArray = [1, 112, 25, 36, 85];

array_pop($numArray);

print_r($numArray);
echo "<hr>";
//////////////////////////////////////////////

echo "<br>Remove o primeiro item do array<br>";

$numArray = [1, 112, 25, 36, 85];

array_shift($numArray);

print_r($numArray);
echo "<hr>";
//////////////////////////////////////////////

echo "<br>Buscar algo no array<br>";

$numArray = [1, 112, 25, 36, 85];

if (in_array(112, $numArray)) {
    echo "Tem";
} else {
    echo "Não tem";
}
echo "<hr>";
//////////////////////////////////////////////
echo "<br>Buscar algo no array se tiver retorna a posição<br>";

$numArray = [1, 112, 25, 36, 85];

$pos = array_search(36, $numArray);

echo $pos;
echo "<hr>";
//////////////////////////////////////////////
echo "<br>Ordenação em ordem crescente<br>";

$numArray = [1, 112, 25, 36, 85];

sort($numArray);
print_r($numArray);
echo "<hr>";
//////////////////////////////////////////////
echo "<br>Ordenação em ordem decrescente<br>";

$numArray = [1, 112, 25, 36, 85];

rsort($numArray);
print_r($numArray);
echo "<hr>";
//////////////////////////////////////////////
echo "<br>Ordenação em ordem crescente mantendo a chave<br>";

$numArray3 = [1, 112, 25, 36, 85];

asort($numArray3);
print_r($numArray3);
echo "<hr>";
//////////////////////////////////////////////
echo "<br>Ordenação em ordem decrescente mantendo a chave<br>";

$numArray4 = [1, 112, 25, 36, 85];

arsort($numArray4);
print_r($numArray4);
echo "<hr>";
//////////////////////////////////////////////
echo "<br>Destruindo um array e montando uma string<br>";

$arrayNomeCompleto = ["Edson", "Luiz", "Tiepermann", "Junior"];

print_r($arrayNomeCompleto);

$string = implode(" ", $arrayNomeCompleto);

echo "<br><br> String montada: $string";
echo "<hr>";
//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////
echo "<br>ARRAY MAP<br>";
function functionArrayMap($item)
{
    if ($item === "Edson") {
        return "{$item} - Professor da tarde. Chute no S***";
    } elseif ($item === "Robinson") {
        return "{$item} - Professor da noite. Quebrou a caneca";
    } elseif ($item === "Felipe") {
        return "{$item} - Aluno da noite";
    } elseif ($item === "Leonardo") {
        return "{$item} - Aluno da tarde, infiltrado na noite.";
    }
}

$arrayParaMapear = array("Edson", "Robinson", "Felipe", "Leonardo");
echo "<pre>";
print_r(array_map("functionArrayMap", $arrayParaMapear));
echo "</pre>";

echo "<hr>";
//////////////////////////////////////////////

//ARRAYS

echo "<br>ARRAYS<br>";
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
        'faturamento_us' => 659360000,
        'faturamento_br' => 70460000
    ]
];

//array_map
/*A função array_map tem como objetivo percorrer todo o array e mapear cada um dos itens, processando-os com o que é pedido, e gerando um novo array com os novos valores
*/

//vamos supor que o valor total dasa arrecadações são valores brutos, e que nós vamos descontar os impostos para mostrar o valor líquido
//vamos usar os valores fictícios de 16% para o Brasil e 6% para os Estados Unidos.

echo 'array_map<br>';
$filmesDepoisDosImpostos = array_map(function($filme) {
    $filme['faturamento_us'] -= $filme['faturamento_us'] * 0.06;
    $filme['faturamento_br'] -= $filme['faturamento_br'] * 0.16;
    return $filme;
}, $filmes);
echo 'teste<br>';
echo '<pre>';
print_r($filmesDepoisDosImpostos);
echo '</pre>';
echo '<hr>';


//array_filter
/*A função array_filter tem como objetivo filtrar os itens do array que atendam a uma condição estipulada dentro da função e gerando um novo array apenas com os itens filtrados.
*/

echo 'array_filter<br>';
$filmesNotaMenorQueOito = array_filter($filmes, function ($filme) {
    return $filme['imdb'] < 8;
});
echo '<pre>';
print_r($filmesNotaMenorQueOito);
echo '</pre>';
echo '<hr>';


//array_reduce
/*A função array_reduce tem como objetivo reduzir o array a um único valor....
*/
?>
