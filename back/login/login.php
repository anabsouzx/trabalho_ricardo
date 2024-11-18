<?php
    if(isset($_POST['user'])) {
        include("conexao.php");
        $user = $_POST['user'];
        $pass = $_POST['pass' ];
        
        $sql_code = "SELECT * FROM usuarios WHERE user = '$user' LIMIT 1";
        $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);
        
        $usuarios = $sql_exec->fetch_assoc();
        if(password_verify($pass, $usuarios['pass'])) {
            header('location:paglogin.html');
        } else {
            echo "Falha ao logar! senha ou e-mail incorretos";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de login</title>
</head>
<body>
    <h1>Entre na sua conta</h1>
    <form action="" method="post">
        Usuario<br/><input type="text" name="user" id="user"><br/>
        Senha<br/><input type="password" name="pass" id="pass"><br/><br/>
        <input type="submit" value="Logar">
    </form>
</body>
</html>