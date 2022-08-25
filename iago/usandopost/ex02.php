<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de pagamento</title>
</head>

<body>
    <!--2. Crie um formulário onde o usuário informa seu nome, seu e-mail, sua data de
    nascimento e escolha em um select o tipo de pagamento (pix, cartão de crédito ou boleto).
    Ao clicar em botão de submit, exiba todos os dados na tela e não exiba o formulário após
    o preenchimento -->

    <!-- falta ocultar o formulário após o preenchimento -->

    <h1>Formulário com tipo de pagamento</h1>

    <form action="./ex02.php" method="post">
        <input type="text" name="nome" placeholder="nome">
        <input type="email" name="email" placeholder="e-mail">
        <input type="birthday" name="datan" placeholder="data de nascimento">
        <select name="formapgto" id="pgto">
            <option value=""></option>
            <option value="pix">pix</option>
            <option value="cartao">cartão de crédito</option>
            <option value="boleto">boleto</option>
        </select>
        <button type="submit" name="submit" Placeholder="Enter">Enviar</button>
    </form>
    <?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $datan = $_POST['datan'];
    $formapgto = $_POST['formapgto'];

    /** falta validar campos **/


    echo "$nome";
    echo "<br/>";
    echo "$email";
    echo "<br/>";
    echo "$datan";
    echo "<br/>";
    echo "$formapgto";
    ?>

</body>

</html>