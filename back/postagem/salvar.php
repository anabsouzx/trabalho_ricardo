<?php

    include 'conexao.php';

    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    $stmt = $mysqli->prepare("INSERT INTO posts (titulo, conteudo) VALUE (?, ?)");
    $stmt->bind_param("ss", $titulo, $conteudo);

    if ($stmt->execute()) {
        echo "Postagem salva! <br/><br/><a href:'index.php'>Criar postagem<a/>";
    } else {
        echo "Erro ao salvar postagem: " . $stmt->error;
    }

    //$smtp->clse();

?>