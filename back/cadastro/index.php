<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <?php include '../componentes/navegacao.php'; ?>
    <h2 class="titulo">Cadastro de Usuários</h2>

    <?php include 'processa_cadastro.php'; ?>

    <section class="corpo">
    <form class="formulario" action="" method="post">
        <div class="input-data">
        <input type="text" id="nome_completo" name="nome_completo" required>
        <div class="underline"></div>
        <label for="nome_completo">Nome Completo:</label>
        </div>

        <div class="input-data">
        <input type="text" id="username" name="username" required>
        <div class="underline"></div>
        <label for="username">Username:</label>
        </div>

        <div class="input-data">
        <input type="password" id="senha" name="senha" required>
        <div class="underline"></div>
        <label for="senha">Senha:</label>
        </div>

        <div class="input-data">
        <input type="password" id="confirma_senha" name="confirma_senha" required>
        <div class="underline"></div>
        <label for="confirma_senha">Confirmar Senha:</label>
        </div>

        <button class="criar_btn" type="submit">Confirmar Cadastro</button>
    </form>
    </section>
    
</body>
</html>