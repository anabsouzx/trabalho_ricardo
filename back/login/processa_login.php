<?php
include '../bd/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $senha = $_POST['senha'];

    try {
        $sql = "SELECT * FROM usuarios WHERE username = :username";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $usuario_retornado_do_banco = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($usuario_retornado_do_banco) {
            if ($usuario_retornado_do_banco['senha'] === $senha) {
                setcookie('username', $usuario_retornado_do_banco['username'], time() + 120, "/");
                setcookie('user_id', $usuario_retornado_do_banco['id'], time() + 120, "/");
                echo "Login realizado com sucesso!<br>";
            } else {
                echo "Nome de usuário ou senha incorretos.";
            }
        } else {
            echo "Nome de usuário ou senha incorretos.";
        }
    } catch (PDOException $err) {
        echo "Erro ao realizar login: " . $err->getMessage();
    }
}
?>