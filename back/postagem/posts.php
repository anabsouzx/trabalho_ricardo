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

        include 'conexao.php';

        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $resultado = $mysqli->query($sql);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                $titulo = $row['titulo'];
                $conteudo = $row['conteudo'];

                echo "<h2>$titulo</h2>";
                echo "<h3>$conteudo</h3>";
                echo "<hr/>";
            }
        } else {
            echo "Nenhuma postagem criada.";
        }

        $mysqli->close();

    ?>
</body>
</html>