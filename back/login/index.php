<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include '../componentes/navegacao.php'; ?>
    <h2>Login</h2>

    <?php include 'processa_login.php'; ?>
    
    <form method="POST" action="">
        <label for="username">Nome de usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>


