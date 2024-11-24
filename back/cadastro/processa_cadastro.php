<?php
include '../bd/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_completo = $_POST['nome_completo'];
    $username = $_POST['username'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];

    // Verifica se as senhas coincidem
    if ($senha !== $confirma_senha) {
        echo "As senhas não coincidem!";
    } else {
        $sql = "INSERT INTO usuarios (nome_completo, username, senha) VALUES (?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(1, $nome_completo);
        $stmt->bindParam(2, $username);
        $stmt->bindParam(3, $senha);

        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso!";
            // Redireciona para a página de login
            header("Location: ../login");
            exit();
        } else {
            echo "Erro: " . $stmt->errorInfo()[2];
        }
    }
}
?>