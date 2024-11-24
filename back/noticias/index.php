<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Notícia</title>
</head>
<body>
    <script src="script.js"></script>
    <?php include '../componentes/navegacao.php'; ?>
    <h2>Criar Notícia</h2>

    <?php
    include 'processo_criar_noticias.php';
    include '../bd/conexao.php';

    $sql = "SELECT id, nome FROM Categoria";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

<form method="POST" action="" onsubmit="return validarFormulario()">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="texto">Texto:</label>
        <textarea id="texto" name="texto" required></textarea><br><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br><br>

        <label for="categoria_id">Categoria:</label>
        <select id="categoria_id" name="categoria_id" required>
            <option value="">Selecione uma categoria</option>
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nome']; ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <button type="submit">Criar Notícia</button>
    </form>
</body>
</html>