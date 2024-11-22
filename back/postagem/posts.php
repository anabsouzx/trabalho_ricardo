<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens criadas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        // inclui a conexao com o db
        include 'conexao.php';

        /* seleciona todos os itens da tabela pelo id
        de maneira cronologica, o mais recente fica em cima */
        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $resultado = $mysqli->query($sql);

        // mostra o titulo e o conteudo
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                $titulo = $row['titulo'];
                $conteudo = $row['conteudo'];

                echo "<h2>$titulo</h2>";
                echo "<h3>$conteudo</h3>";
                echo "<hr/>"; // divisao entre postagens
            }
        } else {
            echo "Nenhuma postagem criada."; // caso nao tenha postagens no banco mostra essa mensagem
        }

        $mysqli->close(); // fecha a conexao com o banco de dados

    ?>
</body>
</html>