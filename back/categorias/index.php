<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Categoria</title>
</head>
<body>
    <?php include '../componentes/navegacao.php'; ?>
    <h2>Criar Categoria</h2>

    <?php include 'processo_criar_categoria.php'; ?>

    <form method="POST" action="">
        <label for="nome">Nome da Categoria:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <button type="submit">Criar Categoria</button>
    </form>
</body>
</html>