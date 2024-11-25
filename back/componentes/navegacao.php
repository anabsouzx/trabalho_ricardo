<style>
    .cabecalho {
        display: flex;
        justify-content: center; 
        align-items: center;
        padding: 12px;
    }

    .navbar {
        background-color: #f8f9fa;
        padding: 10px;
        margin: 0 10px;
        text-decoration: none;
        color: #007bff;
        border-radius: 40px;
        box-shadow: 0 10px 40px rgba(159, 162, 177, 0.8);
        display: flex;
        justify-content: center; 
        align-items: center;
        gap: 10px;
        padding: 16px;
    }

    .nav-item {
        color: #83818c;
        text-decoration: none;
        transition: 0.3s;
        z-index: 1;
        font-family: "DM Sans", sans-serif;
        font-weight: 500;
        position: relative;
    }

    .nav-item {
        color: #83818c;
        text-decoration: none;
        transition: 0.3s;
        margin: 0 6px;
        z-index: 1;
        font-family: "DM Sans", sans-serif;
        font-weight: 500;
    }
    
    .nav-item:before {
        content: "";
        position: absolute;
        bottom: -6px;
        left: 0;
        width: 100%;
        height: 5px;
        background-color: #591fb8;
        border-radius: 8px 8px 0 0;
        opacity: 0;
        transition: 0.3s;
    }

    .nav-item:not(.is-active):hover:before {
        opacity: 1;
        bottom: -6px;
    }

    .nav-item:not(.is-active):hover {
        color: #380c80;
    }

    .nav-indicator {
        position: absolute;
        left: 0;
        bottom: 0px;
        height: 4px;
        transition: 0.4s;
        height: 5px;
        z-index: 1;
        border-radius: 8px 8px 0 0;
    }
</style>
<header class="cabecalho">
    <img src=<?php echo "Trinkly.png"; ?> alt="logo da página">
    <nav class="navbar">
        <a href="../inicio" class="nav-item">Início</a>
        <a href="../categorias" class="nav-item">Criar Categorias</a>
        <a href="../noticias" class="nav-item">Criar Notícias</a>
        <a href="../cadastro" class="nav-item">Cadastro de Usuário</a>
        <a href="../login" class="nav-item">Login</a>
    </nav>
    <script src="script.js"></script>
    </script>
</header>