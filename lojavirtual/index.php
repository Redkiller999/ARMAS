<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
</head>
<body>
    
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <div>
            <div>
                <input name="usuario" name="text" placeholder="Username" autofocus="">
            </div>
        </div>

        <div>
            <div>
                <input name="senha" type="password" placeholder="Senha">
            </div>
        </div>

        <button type="submit">Entrar</button>
        
        <div>
            <p>Ainda não tem conta, <a href="cadastro.php">Cadastrar</a></p>
        </div>

        <div>
        <?php if (isset($_SESSION['nao_autenticado'])) { ?>
        <div>
            <p>Usuário ou senha inválidos.</p>
        </div>
        <?php } else; unset($_SESSION['nao_autenticado']); ?>
    <div>
    </form>

</body>
</html>