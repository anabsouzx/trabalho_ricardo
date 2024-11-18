<?php
    if(isset($_POST['user'])) {
        include('conexao.php');

        $user = $_POST['user'];
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        
        $mysqli->query("INSERT INTO usuarios (user, pass) VALUES('$user', '$pass')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina para criar cadastro</title>
</head>
<body>
    <h1>Crie sua conta</h1>
    <form action="" method="post">
        Usuario<br/><input type="text" name="user" id="user"><br/>
        Senha<br/><input type="password" name="pass" id="pass"><br/><br/>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>