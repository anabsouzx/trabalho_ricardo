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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estrelinhas.css">

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
        //var_dump($row_avaliacao);

        //extrair o array para imprimir pelo nome do elemento do array

        extract($row_avaliacao);

        echo "<p>avaliação: $id</p>";

        //criar o for para percorrer as 5 estrelas
        for($i = 1; $i <= 5; $i++){

            //acessar o if quando a quantidade de estrelas selecionadas é menor a quantidade de estrelas percorrida e imprime as estrelas preenchida

            if($i <= $qtd_estrelas){
                echo'<i class="estrela-preenchida fa-solid fa-star"></i>';
            }else{
                echo'<i class="estrela-vazia fa-solid fa-star"></i>';

            }
        }
        echo"<p>Mensagem: $mensagem</p><hr/>";
    }

    ?>
    
</body>
</html>
    
</body>
</html>
