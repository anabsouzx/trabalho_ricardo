<?php

session_start(); //inicio da sessão

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <title>avaliações</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estrelinhas.css">
</head>
<body>
    <h1>avalie</h1>

    <?php
    //imprimir a mensagem de erro ou sucesso 
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <!-- inicio do form -->
    <form method="$_POST" action="processabd.php">

        <!-- carrega o formulario sem definir nenhuma estrela -->
        <div class="estrelas">
        <input type="radio" name="estrela"  id=" vazio" value="" checked>
        
        <!-- primeira estrela -->
        <label for="estrela_um"><i class="opção fa"></i></label>
        <input type="radio" name="estrela" id="estrela_um"  id=" vazio" value="1">

        <!-- segunda estrela -->
        <label for="estrela_dois"><i class="opção fa"></i></label>
        <input type="radio" name="estrela" id="estrela_dois"  id=" vazio" value="2">

        <!-- terceira estrela -->
        <label for="estrela_três"><i class="opção fa"></i></label>
        <input type="radio" name="estrela" id="estrela_três"  id=" vazio" value="3">

        <!-- quarta estrela -->
        <label for="estrela_quatro"><i class="opção fa"></i></label>
        <input type="radio" name="estrela" id="estrela_quatro"  id=" vazio" value="4">

        <!-- quinta estrela -->
        <label for="estrela_cinco"><i class="opção fa"></i></label>
        <input type="radio" name="estrela" id="estrela_cinco"  id=" vazio" value="5"><br><br>

        <!-- envio do questionario -->
        <input type="submit" value="enviar"><br><br>


        </div>

    </form>
    <!-- fim do form -->
</body>
</html>