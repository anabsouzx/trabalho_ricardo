<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../bd/conexao.php';

    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $dataPublicacao = date('Y-m-d');
    $autor = $_POST['autor'];
    $categoria_id = $_POST['categoria_id'];

    try {
        $sql = "INSERT INTO Noticias (titulo, texto, dataPublicacao, autor) VALUES (:titulo, :texto, :dataPublicacao, :autor)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':texto', $texto);
        $stmt->bindParam(':dataPublicacao', $dataPublicacao);
        $stmt->bindParam(':autor', $autor);

        if ($stmt->execute()) {
            $noticia_id = $con->lastInsertId();
            $sql = "INSERT INTO NoticiasCategoria (id_noticia, id_categoria) VALUES (:id_noticia, :id_categoria)";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':id_noticia', $noticia_id);
            $stmt->bindParam(':id_categoria', $categoria_id);
            $stmt->execute();

            echo "Notícia criada com sucesso!";
        } else {
            echo "Erro ao criar notícia: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $err) {
        echo "Erro ao criar notícia: " . $err->getMessage();
    }

    $con = null;
}
?>