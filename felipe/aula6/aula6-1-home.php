<?php include '../aula5-miniprojeto/aula5-ex1-header.php'; ?>
<div id = "header">
        <h1>Digite seus dados para logar!</h1>
        <hr>
        <form action = "aula6-1-login.php" method = "post">
            <input type = "text" name = "login" id = "login" placeholder = "login" required>
            <input type = "password" name = "senha" id = "senha" placeholder = "Senha" required>
            <button type = "submit" class = "botao" id = "botao"><strong>Entrar</strong></button>
        </form>
        <br>
    </div>
<?php include '../aula5-miniprojeto/aula5-ex1-footer.php'; ?>