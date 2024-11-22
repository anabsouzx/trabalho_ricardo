<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação posts</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
        <form action="salvar.php" method="POST">
                    <!-- campo para o titulo -->
            <label for="titulo">Titulo da Noticia</label><br/>
            <input type="text" name="titulo" maxlength="500" id="titulo"><br/>
                    <!-- campo para a noticia -->
            <br/><label for="conteudo">Conteudo da Noticia</label><br/>
            <textarea name="conteudo" id="conteudo" required></textarea><br/>
                    <!-- botao para enviar -->
            <input type="submit" value="Publicar">
        </form>
    </div>
</body>
</html>