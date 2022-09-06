<?php
$arrayToString = [3, 1, 8, 2, 10];

function getString($array)
{
    return implode(",", $array);
}
$resultToString = getString($arrayToString);
echo "O array em <i>string</i> é: $resultToString";
?>

<br><br>

<?php
$arrayInteger = "5,9,6,1";
function getInteger($array)
{
    return explode(",", $array);
}

$resultInteger = getInteger($arrayInteger);
$resultSum = array_sum($resultInteger);
echo "A soma do array é: $resultSum";
?>