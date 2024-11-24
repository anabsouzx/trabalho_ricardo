<style>

        nav {
            background-color: #f8f9fa;
            padding: 10px;
        }
        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #007bff;
        }
        .cabecalho {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        padding: 24px;
    }

    .cabecalho-imagem {
        display: flex;
        align-items: center;
        height: 72px;
    }
        .nav {
        align-items: center;
        display: inline-flex;
        position: relative;
        overflow: hidden;
        max-width: 100%;
        background-color: #fff;
        padding: 0 20px;
        border-radius: 40px;
        box-shadow: 0 10px 40px rgba(159, 162, 177, 0.8);
    }
    .nav-item {
        color: #83818c;
        padding: 20px;
        text-decoration: none;
        transition: 0.3s;
        margin: 0 6px;
        z-index: 1;
        font-family: "DM Sans", sans-serif;
        font-weight: 500;
        position: relative;
    }
    
    .nav-item:before {
        content: "";
        position: absolute;
        bottom: -6px;
        left: 0;
        width: 100%;
        height: 5px;
        background-color: #dfe2ea;
        border-radius: 8px 8px 0 0;
        opacity: 0;
        transition: 0.3s;
    }
    .nav-item:not(.is-active):hover:before {
        opacity: 1;
        bottom: 0;
    }
    .nav-item:not(.is-active):hover {
        color: #333;
    }
    .nav-indicator {
        position: absolute;
        left: 0;
        bottom: 0;
        height: 4px;
        transition: 0.4s;
        height: 5px;
        z-index: 1;
        border-radius: 8px 8px 0 0;
    }
    </style>
<header class="cabecalho">
    <img class ="cabecalho-imagem" src =".../trabalho_ricardo/back/imagens/Trinkly.png" alt="logo da página">
    <nav class="nav">
        <a href="../inicio" class="nav-item">Início</a>
        <a href="../categorias" class="nav-item">Criar Categorias</a>
        <a href="../noticias" class="nav-item">Notícias</a>
        <a href="../cadastro" class="nav-item">Cadastro de Usuário</a>
        <a href="../login" class="nav-item">Login</a>
    </nav>
    <script src="script.js"></script>
</script>
</header>