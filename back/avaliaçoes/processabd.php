<?php

session_start(); //inicio da sessão
//incluir o arquivo conexão
include_once './conexao.php';

//definir o fuso de são paulo
date_default_timezone_set('America/Sao_Paulo');

//saber se o usuário acessou pelo menos uma estrela
if(!empty($_post['estrela'])) {

}else{

    //criar a mensagem de erro
    $_SESSION['msg'] = "<p style='color: #f00'>Erro: selecionar pelo menos uma estrela.</p>";

    //redirecionar o usuário para a pagina inicial
    header("Location : index.php");
}




?>