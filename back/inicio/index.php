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
   <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <h1 class="conteudo-principal-escrito-titulo">Trinkly</h1>
                <h2 class="conteudo-principal-escrito-subtitulo">Seu portal de conteúdos educativos para programadores de todas as idades.</h2>
                <hr>
            </div>
    </section>
    
    <form method="GET" action="index.php">
        <!-- Campo de pesquisa -->
        <div class="pesquisa_container">
            <input class="pesquisa-input" type="text" id="nome" name="nome" placeholder="Pesquise pelo nome do evento"><br><br>

            <!-- Seleção de categoria -->
            <select name="categoria" class="pesquisa-select">
                <option value="">Selecione uma categoria</option>
                <?php
                    include '../bd/conexao.php';
                    $sql = "SELECT id, nome FROM Categoria";
                    $stmt = $con->prepare($sql);
                    $stmt->execute();
                    $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($categorias as $categoria) {
                        echo "<option value='{$categoria['id']}'>{$categoria['nome']}</option>";
                    }
                ?>
            </select>
            
            <button type="submit" class="btn-filtro">Pesquisar</button>
        </div>
    </form>

    <hr>

    <main >
        <div class="noticia-nome">
            <h1>Notícias:</h1>
        </div>

        <div class="meio">
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
                        echo "<article class='noticia-container'>";
                        echo "<h3>{$noticia['titulo']}</h3>";
                        echo "<p>{$noticia['texto']}</p>";
                        echo "<p><strong>Data de Publicação:</strong> {$noticia['dataPublicacao']}</p>";
                        echo "<p><strong>Autor:</strong> {$noticia['autor']}</p>";
                        echo "<p><strong>Categoria:</strong> {$noticia['categoria_nome']}</p>";
                        echo "</article>";
                    }
                } else {
                    echo "<p>Nenhuma notícia encontrada.</p>";
                }
            ?>
        </div>
    </main>
</body>
</html>