<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Categoria</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include '../componentes/navegacao.php'; ?>
    
    <h2 class="titulo">Criar Categoria</h2>

    <?php include 'processo_criar_categoria.php'; ?>

    <section>
        <form class="formulario" method="POST" action="" class="criacao">
            <div class="input-data">
                <input type="text" id="nome" name="nome" required>
                <div class="underline"></div>
                <label for="nome" >Nome da Categoria:</label>
            </div>

            <button class="criar_btn" type="submit" class="btn-cate">Criar Categoria</button>
        </form>
    </section>
    
</body>
</html>