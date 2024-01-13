<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Imoveis</title>

    <!-- Custom css file -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- jquery.js -->
    <script src="js/jquery/jquery.js"></script>

    <!-- Bootstrap files -->
    
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- slick -->
    <link href="css/slick.css" rel="stylesheet" />
    <script src="js/slick.js"></script>
    
    <!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
     
</head>

<body>
    <header class="bg-white">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="imagens/15202776221.png"></a>
            <button class="navbar-toggler border border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./imoveis_venda.php">VENDA</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./imoveis_aluguel.php">ALUGUEL</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./imoveis_galpao.php">GALPÃO</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./imoveis_avaliaçao.php">AVALIAÇÃO</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./imoveis_servicos.php">SERVIÇOS</a>
                    </li>

                    <li class="nav-item dropdown user-custom-ms">
                        <a 
                        class="nav-link dropdown-toggle ps-1" 
                        href="#" id="navbarDropdown" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false">
                            <i class="fa-regular fa-circle-user fs-4"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fa-regular fa-heart me-1"></i>Favoritos e listas</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-regular fa-bell me-1"></i>Alertas criados</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-regular fa-calendar-days me-1"></i>Visitas agendadas</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-circle-check me-1"></i>Propostas enviadas</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-signature me-1"></i>Contrato e boletos</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-house-laptop me-1"></i>Cadastrar imóvel</a></li>
                            <li><a class="dropdown-item" href="./login_register.php"><i class="fa-solid fa-circle-user me-1"></i>Perfil</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Adicione a barra de pesquisa abaixo da barra de navegação -->
    <div class="container mt-3 mb-3 search-container">
        <input class="search-input" type="search" placeholder="Digite o nome do condomínio, rua, bairro ou cidade" aria-label="Search">
        <button class="search-button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
    </header>