<?php
    // definicao de variaveis pra conexao do banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistema";
    
    $mysqli = mysqli_connect($servername, $username, $password, $dbname); // realização da conexão

    //checa se existe um erro na conexao e mostra o erro
    if ($mysqli->connect_error) {
        die("falha" . $mysqli->connect_error);
    }
?>