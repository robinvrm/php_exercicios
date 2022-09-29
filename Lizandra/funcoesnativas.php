<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Recursiva <br><br>";
function dividir($numero)
{
    $result = $numero/2;
    echo "$numero <br>";

    if (round($result) > 0) {
        dividir($result);
    }
}

dividir(50);
echo "<hr>";

----------------------------------------------
echo "<br> Absoluto <br>";
$num = -9,5;
echo $num . "<br>";
echo abs($num);
echo "<hr>";

--------------------------------------------------
pi
echo "<br><br> Pi <br>";
echo pi();
echo "<hr>";

--------------------------------------------
Arredondar mais para baixo
echo "<br><br> Arredondar num para baixo <br>";

$n = 2,8;
echo $n . "<br>";

echo floor($n);

echo "<br><br> Arredondar num para cima <br>";
$n2 = 3.3;
echo "<br>" . $n2 . "<br>";

echo ceil($n2);

echo "<br><br> Arredondar<br>";
$n3 = 3.4;
echo "<br>" . $n3 . "<br>";

echo round($n3);

echo "<br><br> Arredondar casos decimais <br>";
$n4 = 3.653647
echo "<br> . $n4 . "<br>";

echo round($n4, 2); 
echo"<hr>";

---------------------------------------------------------------------------
Função número aleatório

echo"<br><br> Número aleatório <br>";

$randomico = rand(2, 100);

echo $randomico;
echo "<br>";
 -------------------------------------------------------------------------------
 Função número maior e menor do array

 echo "<br><br> Número num maior <br>";

 $nMaior = [3, 6, 8, 9, 10, 15, 25, 4];

 echo max($nMaior);

 echo "<br><br> Numero num menor <br>";

 $nMenor = [2, 3, 6, 1, 3, 6, 4 ,7];

 echo min($nMenor);
 echo "<hr>";

 ---------------------------------------------------------------------------------------
 Função retirar espaços 

 echo "<br><br> Manipulação de string <br>";
echo "<br> Retirar espaços <br>";

$nomeComEspaço = "  Lizandra - Izidoro   ";

echo = "teste<br>" . $nomeComEspaço;

$nomeComEspaço = trim($nomeComEspaço);
$nomeSemEspaçoFinal = rtrim($nomeComEspaço);
$nomeSemEspaçoInicio = ltrim($nomeComEspaço);
echo"<br> com espaço" . strlen($nomeComEspaço);
echo"<br> Sem espaço" . strlen($nomeSemEspaço);
echo"<br> Sem espaço final" . strlen($nomeSemEspaçoFinal);
echo"<br> Sem espaço inicio" . strlen($nomeSemEspaçoInicio);
echo "<hr>";
 ----------------------------------------------------------------

 função lower/upper 

 echo $nome1 = "robinson machado";

 echo "<br><br>LOWER case";
 echo "<br>" . strtolower($nome1);

FALTA O RESTO
 ----------------------------------------------------------
Função recuperar alguns caracteres
echo "<br><br> Escolher algumas strings <br>";

$nome2 = "Tiepermann";

(a partir da onde e quantas)

echo "<br>" . $nome2;
echo "<br>" . substr($nome2, 1, 5);
echo "<br>" . substr($nome2, -4, 3); 
echo "<hr>";

----------------------------------------------------------------------
Função recuperar alguns caracteres 

echo "<br><br> retorna a posição de string encontrada<br>";
$nome2 =  "Tieppermann";
echo $posicao = strpos($nome2, 'p');
echo "<br>";

--------------------------------------------------------

echo "<br><br> Transformar o nome no Array <br>";

echo $nomeCompleto = 'Robinson Vicente Rondon Machado<br>";
$nomeArray = explode(" ", $nomeCompleto);

print_r($nomeArray);
echo"<hr>";

--------------------------------------------------
Formatar números

echo"<br><br> Formatar números <br>";

$numeroFormatar = 2569.5555;
echo "<br>" . $numeroFormatar;
echo "<br>" . number_format($numeroFormatar, 2, ',','.');
echo "<hr>";

-----------------------------------------------------------------------
echo"<br><br> Contar quantas posições tem no array <br>";

$ListaArray = [1, "Robinson", 211, "Odonto", "Lions"];

echo "Total: " . count($ListaArray);
echo "<hr>";

--------------------------------------------------------------------------
echo"<br><br> Diferenças entre os arrays <br>";

$listaAlunos = ["Robinson", "Edson", "Rodrigo", "Odonto", "Lions"];
$alunosAprovados = ["Robinson", "Edson"];

$reprovados = array_diff($listaAlunos, $alunosAprovados);

print_r($reprovados);
echo "<hr>";

--------------------------------------------------------------------------------
filtar algo no array







?>
</body>
</html>
