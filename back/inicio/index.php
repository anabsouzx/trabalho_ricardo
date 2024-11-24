<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
    <?php include '../componentes/navegacao.php'; ?>
   <div class="">
        <h2>Filtrar Notícias</h2>
   </div>
    
    <form method="GET" action="index.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="categoria_id">Categoria:</label>
        <select id="categoria_id" name="categoria_id">
            <option value="">Selecione uma categoria</option>
            <?php
            include '../bd/conexao.php';
            $sql = "SELECT id, nome FROM Categoria";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($categorias as $categoria) {
                echo "<option class='teste' value='{$categoria['id']}'>{$categoria['nome']}</option>";
            }
            ?>
        </select><br><br>

        <button type="submit">Filtrar</button>
    </form>

    <main>
        <h2>Notícias</h2>
        <?php
        include '../bd/conexao.php';

        $nome = isset($_GET['nome']) ? $_GET['nome'] : '';
        $categoria_id = isset($_GET['categoria_id']) ? $_GET['categoria_id'] : '';

        $sql = "SELECT Noticias.*, Categoria.nome AS categoria_nome FROM Noticias
                LEFT JOIN NoticiasCategoria ON Noticias.id = NoticiasCategoria.id_noticia
                LEFT JOIN Categoria ON NoticiasCategoria.id_categoria = Categoria.id
                WHERE 1=1";

        if ($nome) {
            $sql .= " AND Noticias.titulo LIKE :nome";
        }
        if ($categoria_id) {
            $sql .= " AND Categoria.id = :categoria_id";
        }

        $stmt = $con->prepare($sql);

        if ($nome) {
            $stmt->bindValue(':nome', '%' . $nome . '%');
        }
        if ($categoria_id) {
            $stmt->bindValue(':categoria_id', $categoria_id);
        }

        $stmt->execute();
        $noticias = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($noticias) {
            foreach ($noticias as $noticia) {
                echo "<article class='teste'>";
                echo "<h3>{$noticia['titulo']}</h3>";
                echo "<p>{$noticia['texto']}</p>";
                echo "<p><strong>Data de Publicação:</strong> {$noticia['dataPublicacao']}</p>";
                echo "<p><strong>Autor:</strong> {$noticia['autor']}</p>";
                echo "<p><strong>Categoria:</strong> {$noticia['categoria_nome']}</p>";
                echo "</article><hr>";
            }
        } else {
            echo "<p>Nenhuma notícia encontrada.</p>";
        }
        ?>
    </main>
</body>
</html>