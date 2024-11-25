<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include '../componentes/navegacao.php'; ?>
    <h2 class="titulo">Login</h2>

    <?php include 'processa_login.php'; ?>
    <section class="corpo">
        <form class="formulario" method="POST" action="">
            <div class="input-data">
                <input type="text" id="username" name="username" required>
                <div class="underline"></div>
                <label for="username">Nome de usuário:</label>
            </div>
            
            <div class="input-data">
                <input type="password" id="senha" name="senha" required>
                <div class="underline"></div>
                <label for="senha">Senha:</label>
            </div>
            
            <button class="criar_btn" type="submit">Entrar</button>
        </form>
    </section>
</body>
</html>


