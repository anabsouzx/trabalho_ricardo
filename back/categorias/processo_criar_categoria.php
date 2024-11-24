<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include '../bd/conexao.php';

        $nome = $_POST['nome'];

        try {
            $sql = "INSERT INTO Categoria (nome) VALUES (:nome)";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':nome', $nome);

            if ($stmt->execute()) {
                echo "Categoria criada com sucesso!";
            } else {
                echo "Erro ao criar categoria: " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $err) {
            echo "Erro ao criar categoria: " . $err->getMessage();
        }

        $con = null;
    }
    ?>