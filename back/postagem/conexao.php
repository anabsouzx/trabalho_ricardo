<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistema";
    
    $mysqli = mysqli_connect($servername, $username, $password, $dbname);

    if ($mysqli->connect_error) {
        die("falha" . $mysqli->connect_error);
    }
?>