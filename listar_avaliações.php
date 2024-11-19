<?php 

// Inclui o arquivo de conexão
include_once './conexao.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar as avaliações</title>
</head>
<body>
    
    <!-- Criar menu básico -->
    <a href="index.php">Avaliar</a><br>
    <a href="listar_avaliações.php">listar</a><br>

    <h1>avaliações dos usuários</h1>
    <?php
    
    //recuperar as acaliações dentro do banco de dados 
    $query_avaliacoes = "SELECT id, qtd_estrelas, mensagem
                    FROM avaliacoes
                    ORDER BY id DESC";
    
    // preparar a query
    $result_avaliacoes = $conn->prepare($query_avaliacoes);

    //executar a query
    $result_avaliacoes->execute();

    //percorrer o banco de dados 
    while($row_avaliacao = $result_avaliacoes->fetch(PDO:: FETCH_ASSOC)){
        var_dump($row_avaliacao);
    }

    ?>
    
</body>
</html>