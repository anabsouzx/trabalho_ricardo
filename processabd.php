<?php

session_start(); // Inicia a sessão

// Inclui o arquivo de conexão
include_once './conexao.php';

// Define o fuso horário para São Paulo
date_default_timezone_set('America/Sao_Paulo');

// Verifica se o usuário selecionou pelo menos uma estrela
if (!empty($_POST['estrela'])) { // Usa $_POST em vez de $_post (case-sensitive)

    // Código para lidar com a seleção do usuário vai aqui
    $estrela = filter_input(INPUT_POST, 'estrela', FILTER_DEFAULT);
    
    //texto do usuário
    $mensagem =filter_input(INPUT_POST, 'mensagem', FILTER_DEFAULT);

    //criar a query pra cadastro
    $query_avaliacao = "INSERT INTO avaliacoes (qtd_estrelas, mensagem, created) values (:qtd_estrelas, :mensagem, :created)";

    $cad_avaliacao = $conn->prepare($query_avaliacao);
    $cad_avaliacao->bindParam(':qtd_estrelas',$estrela, PDO::PARAM_INT);
    $cad_avaliacao->bindParam(':mensagem',$mensagem, PDO::PARAM_STR);
    $cad_avaliacao->bindParam(':created', date("y-m-d H:i:s"));

    //acessar o if quando cadastrar corretamente
    if($cad_avaliacao->execute()){
        $_SESSION['msg'] = "<p style='color: green;'> Avaliação cadastrasda com sucesso.</p>";

        // Redireciona o usuário para a página inicial 
    header("Location: index.php");
    }
    else{
        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Avaliação não cadastrada.</p>";
        
        // Redireciona o usuário para a página inicial 
    header("Location: index.php");
    }
} else {

    // Cria uma mensagem de erro
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Necessário selecionar pelo menos 1 estrela.</p>";

    // Redireciona o usuário para a página inicial 
    header("Location: index.php");
}

?>
