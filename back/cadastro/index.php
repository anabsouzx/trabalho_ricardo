<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <?php include '../componentes/navegacao.php'; ?>
    <h2>Cadastro de Usuários</h2>

    <?php include 'processa_cadastro.php'; ?>

    <form action="" method="post">
        <label for="nome_completo">Nome Completo:</label>
        <input type="text" id="nome_completo" name="nome_completo" required><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="confirma_senha">Confirmar Senha:</label>
        <input type="password" id="confirma_senha" name="confirma_senha" required><br><br>

        <button type="submit">Confirmar Cadastro</button>
    </form>
</body>
</html>