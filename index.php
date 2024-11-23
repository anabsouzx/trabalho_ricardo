<?php

include('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de busca</title>
</head>
<body>
<h1>Postagens</h1>
    <form action="">
        <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite o que procura aqui..." type="text">
        <button type="submit">Pesquisar</button>
    </form>
    <br>
    <table width="600px" border="1">
        <tr>
            <th>Títulos</th>
            <th>Usuários</th>
            <th>datas</th>
        </tr>
        <?php
        if (!isset($_GET['busca'])) {  
         ?>
            <tr> 
          <td colspan="3">Digite sua pesquisa...</td> 
        </tr>
        <?php
        } else {
            while($dados = $sql_query->fetch_assoc()) {
         ?>
                   <tr>
                        <td><?php echo $dados['Títulos']; ?></td>
                        <td><?php echo $dados['Usuários']; ?></td>
                        <td><?php echo $dados['Datas']; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        <?php
         ?>
    </table>
        </body>
</html>