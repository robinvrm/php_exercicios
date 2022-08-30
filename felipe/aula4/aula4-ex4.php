<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <!-- Usando POST
        Crie um formulário onde o usuário informa seu nome, seu e-mail, sua data de nascimento e escolha em um select o tipo de pagamento (pix, cartão de crédito ou boleto). Ao clicar em um botão de submit, exiba todos os dados na tela e não exiba o formulário após o preenchimento.-->

    <h1>Exercício</h1>
    <small>
        <ul>
            <li>Crie um formulário onde o usuário informa seu nome, seu e-mail, sua data de nascimento e escolha em um select o tipo de pagamento (pix, cartão de crédito ou boleto)</li>
            <li>Ao clicar em um botão de submit, exiba todos os dados na tela e não exiba o formulário após o preenchimento</li>
        </ul>
    </small>
    <hr>
    <form action = "aula4-ex4-enviar.php" method = "post">
        <ul>
            <li>
                <label for = "nome">Nome</label>
                <input type = "text" name = "nome" id = "nome" placeholder = "Nome" required>
            </li>
            <li>
                <label for = "email">E-mail</label>
                <input type = "email" name = "email" id = "email" placeholder = "Email" required>
            </li>
            <li>
                <label for = "nascimento">Data de nascimento</label>
                <input type = "date" name = "nascimento" id = "nascimento" placeholder = "nascimento" required>
            </li>
            <li>
                <label for = "pagamento">Forma de pagamento</label>
                <select id = "pagamento" name = "pagamento">
                    <option value = "">- Escolha -</option>
                    <option value = "Pix">Pix</option>
                    <option value = "Cartão de crédito">Cartão de crédito</option>
                    <option value = "Boleto">Boleto</option>
                </select>
            </li>
            <li>
                <button type = "submit" class = "botao" id = "botao"><strong>Enviar</strong></button>
            </li>
        </ul>
    </form>
</body>
</html>