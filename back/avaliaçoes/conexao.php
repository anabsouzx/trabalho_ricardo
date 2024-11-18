<?php

//inicio da conexão com com o BD
$host = "localhost";
$user = "root";
$pass = "";
$dbname ="avaliaçoesbd";
$port = 3306;

try {
    //coneção com a porta 
    $conn = new PDO("mysql:host=$host; dbname=" . $dbname, $user, $pass);

    //echo "conexão realizada com sucesso.";
} catch(PDOexception $err) {
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}
    //fim da conexão
