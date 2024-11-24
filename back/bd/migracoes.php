<?php
include 'conexao.php';

try {
    // Criação da tabela de usuários
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome_completo VARCHAR(255) NOT NULL,
        username VARCHAR(255) NOT NULL,
        senha VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $con->exec($sql);
    echo "Tabela 'usuarios' criada com sucesso.<br>";

    // Criação da tabela de notícias
    $sql = "CREATE TABLE IF NOT EXISTS Noticias (
        id INT AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(255) NOT NULL,
        texto TEXT NOT NULL,
        dataPublicacao DATE NOT NULL,
        autor VARCHAR(255) NOT NULL
    )";
    $con->exec($sql);
    echo "Tabela 'Noticias' criada com sucesso.<br>";

    // Criação da tabela de categorias
    $sql = "CREATE TABLE IF NOT EXISTS Categoria (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL
    )";
    $con->exec($sql);
    echo "Tabela 'Categoria' criada com sucesso.<br>";

    // Criação da tabela intermediária para a relação muitos-para-muitos
    $sql = "CREATE TABLE IF NOT EXISTS NoticiasCategoria (
        id_noticia INT NOT NULL,
        id_categoria INT NOT NULL,
        PRIMARY KEY (id_noticia, id_categoria),
        FOREIGN KEY (id_noticia) REFERENCES Noticias(id) ON DELETE CASCADE,
        FOREIGN KEY (id_categoria) REFERENCES Categoria(id) ON DELETE CASCADE
    )";
    $con->exec($sql);
    echo "Tabela 'NoticiasCategoria' criada com sucesso.<br>";

} catch (PDOException $err) {
    echo "Erro ao criar tabela: " . $err->getMessage();
}

$con = null;
?>

