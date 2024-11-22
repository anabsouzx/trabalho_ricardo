<?php

    include 'conexao.php'; // inclusao da conexao com o db

    // define variaveis para o titulo e conteudo digitado em forms.php
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    // prepare é feito para evitar ataques ao banco de dados
    $stmt = $mysqli->prepare("INSERT INTO posts (titulo, conteudo) VALUE (?, ?)"); //insere os conteudos no db
    $stmt->bind_param("ss", $titulo, $conteudo); // vincula os valores dos '?' na query

    if ($stmt->execute()) { //testa a execução da inserção
        echo "Postagem salva! <br/><br/><a href='index.php'>Criar postagem<a/>"; //se positivo mostra que foi salvo e mostra um link para voltar ao começo
    } else {
        echo "Erro ao salvar postagem: " . $stmt->error; //se nao funcionar mostra o erro
    }

    //$smtp->clse();

?>