<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$datan = $_POST['datan'];
$formapgto = $_POST['formapgto'];

/** falta validar campos **/
if (empty($nome)) {
    echo "valide o nome";
    return false;
}
if (empty($email)) {
    echo "valide o email";
    return false;
}
if (empty($datan)) {
    echo "valide o data de nascimento";
    return false;
}
if (empty($formapgto)) {
    echo "valide o forma de pagamento";
    return false;
}
echo "$nome";
echo "<br/>";
echo "$email";
echo "<br/>";
echo "$datan";
echo "<br/>";
echo "$formapgto";
