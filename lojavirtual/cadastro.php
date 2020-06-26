<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
</head>
<body>

    <h1>Realizar Cadastro</h1>
    <div>
        <form action="cadastrar.php" method="POST">
            <div>
                <div>
                    <input name="nome" type="text" placeholder="Nome Completo" autofocus>
                </div>
            </div>
            <div>
                <div>
                    <input name="usuario" type="text" placeholder="Username">
                </div>
            </div>
            <div>
                <div>
                    <input name="senha" type="password" placeholder="Senha">
                </div>
            </div>
            <button type="submit">Cadastrar</button>
            <p>Já possui conta, clique <a href="login.php">aqui</a></p>

            <!-- <div>
                <p>Cadastro realizado!</p>
            </div>
            <div>
                <p>Username já existe! Informe outro.</p>
            </div> -->

        </form>
    </div>
      
</body>
</html>