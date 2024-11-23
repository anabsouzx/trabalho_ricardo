<?php
// inicio da conexão com o BD
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "thinkly_bd";
$port = 3306;

try {
    // conexão com a porta
    $con = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão realizada com sucesso.";
} catch (PDOException $err) {
    echo "Erro: Conexão com BD não realizada com sucesso. Erro gerado: " . $err->getMessage();
}
?>