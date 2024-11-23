<?php

$host = "localhost";
//precisa estar conectado a um banco de dados pra puxar a pesquisa
//$db = "nome_do_bancodedos";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass, $db);
if($mysqli->connect_errno) {
    die("Falha na conexão com o banco de dados");
?>