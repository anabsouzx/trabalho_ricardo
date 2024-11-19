<?php

//inicio da conexão com com o BD
$host = "localhost";
$user = "root";
$pass = "";
$dbname ="avaliaçoesbd";
$port = 3306;

try {
    //coneção com a porta 
    $con = new PDO("mysql:host=$host; dbname=" . $dbname, $user, $pass);

    //echo "conexão realizada com sucesso.";
} catch(PDOexception $err) {
    echo "erro: conexão com bd não realizado com sucesso. erro gerado". $err->getmessage();
}
    //fim da conexão
?>