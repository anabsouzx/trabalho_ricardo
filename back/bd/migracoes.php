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

    // Adicione outras migrações aqui

} catch (PDOException $err) {
    echo "Erro ao criar tabela: " . $err->getMessage();
}

$con = null;
?>