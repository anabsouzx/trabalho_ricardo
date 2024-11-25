<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Notícia</title>
    <link rel="stylesheet" type="text/css" href="noticias.css">
</head>
<body>
    <script src="script.js"></script>
    <?php include '../componentes/navegacao.php'; ?>
    <h2 class="titulo">Criar Notícia</h2>

    <?php
    include 'processo_criar_noticias.php';
    include '../bd/conexao.php';

    $sql = "SELECT id, nome FROM Categoria";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
<section>
    <form class="formulario" method="POST" action="" onsubmit="return validarFormulario()">
        <div class="input-data">
            <input type="text" id="titulo" name="titulo" required>
            <div class="underline"></div>
            <label for="titulo">Título:</label>
        </div>

        <div class="input-data">
            <input id="texto" name="texto" required></textarea>
            <div class="underline"></div>
            <label for="texto">Texto:</label>
        </div>
        
        <div class="input-data">
            <input type="text" id="autor" name="autor" required>
            <label for="autor">Autor:</label>
        </div>

        <div class="input-data">
            <select id="categoria_id" name="categoria_id" required>
                <option value="">Selecione uma categoria</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nome']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button class="criar_btn" type="submit">Criar Notícia</button>
    </form>
</section>
</body>
</html>