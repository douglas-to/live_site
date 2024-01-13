<?php 
   include("../php_adm/protect.php");
   include("../includes_adm/header.php");
   ?>
<body>
   <!-- Desktop Navigation -->
   <header class="ps-3 pe-3 mt-3">
      <div class="col-md-12">
         <div class="nav1">
            <ul class="nav d-flex flex-row justify-content-md-between justify-content-center align-items-center">
               <li class="nav-item d-block d-lg-none me-5">
                  <button class="btn fs-sidebarbtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                  <i class="fa-solid fa-bars gray2"></i>
                  </button>
               </li>
               <li class="nav-item">
                  <a class="navbar-brand" href="#">
                  <img src="../imagens/15202776221.png" alt="Brand">
                  </a>
               </li>
               <li class="nav-item d-block d-lg-none ms-5">
                  <div class="profile-circle-res"></div>
               </li>
               <li class="nav-item">
                  <div class="d-flex flex-row d-none d-lg-block">
                     <input class="search-input-adm" type="search" aria-label="Search">
                     <button class="search-button-adm" type="submit">
                     <i class="fa-solid fa-magnifying-glass"></i> 
                     <span class="text-input custom-ms-2">Pesquisar</span>
                     </button>
                  </div>
               </li>
               <li class="nav-item d-flex flex-row align-items-center">
                  <button class="btn d-none d-lg-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                  <i class="fa-solid fa-bars gray2"></i>
                  </button>
                  <a class="text-decoration-none gray2 me-3 d-none d-lg-block" aria-current="page" href="#">
                  <i class="fa-solid fa-plus"></i>
                  </a>
                  <a class="text-decoration-none gray2 me-3 d-none d-lg-block" aria-current="page" href="#">
                  <i class="fa-solid fa-earth-americas"></i>
                  </a>
                  <a class="text-decoration-none gray2 me-3 d-none d-lg-block" aria-current="page" href="#">
                  <i class="fa-regular fa-bell"></i>
                  </a>
                  <div class="dropstart d-none d-lg-block">
                     <a class="text-decoration-none gray me-3" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                     <i class="fa-solid fa-caret-down gray2"></i>
                     </a>
                     <ul class="dropdown-menu border-0">
                        <li class="dropdown-item">
                           <a class="fs-custom8 text-decoration-none gray" href="#">
                           <i class="fa-regular fa-envelope me-2 black"></i>E-mail
                           </a>
                        </li>
                        <li class="dropdown-item">
                           <a class="fs-custom8 text-decoration-none gray" href="#">
                           <i class="fa-solid fa-calendar-day me-2 black"></i>Tarefas
                           </a>
                        </li>
                        <li class="dropdown-item">
                           <a class="fs-custom8 text-decoration-none gray" href="#">
                           <i class="fa-solid fa-user-group me-2 black"></i>Contatos
                           </a>
                        </li>
                        <li class="dropdown-item">
                           <a class="fs-custom8 text-decoration-none gray" href="#">
                           <i class="fa-solid fa-map-location-dot me-2 black"></i>Imóveis
                           </a>
                        </li>
                        <li class="dropdown-item">
                           <a class="fs-custom8 text-decoration-none gray" href="#">
                           <i class="fa-solid fa-globe me-2 black"></i>Editar Site
                           </a>
                        </li>
                        <li class="dropdown-item">
                           <a class="fs-custom8 text-decoration-none gray" href="register.php">
                           <i class="fa-solid fa-user-plus me-2 black"></i>Cadastrar Colaborador
                           </a>
                        </li>
                        <li class="dropdown-item">
                           <a class="fs-custom8 text-decoration-none gray" href="#">
                           <i class="fa-solid fa-gear me-2 black"></i>Configurações
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="d-flex flex-row align-items-center">
                     <div class="profile-circle custom-display"></div>
                     <div class="dropstart ms-2 custom-display">
                        <a class="text-decoration-none gray2" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>
                        <ul class="dropdown-menu mt-3 border-0">
                           <li class="d-flex align-items-center dropdown-item mb-2">
                              <div class="profile-circle"></div>
                              <div class="d-flex flex-column ms-2">
                                 <h1 class="fs-custom8">Guber Oliveira</h1>
                                 <a class="text-decoration-none gray fs-custom8" href="#">Editar perfil</a>
                              </div>
                           </li>
                           <li class="dropdown-item">
                              <a class="fs-custom8 text-decoration-none gray" href="#">Portal Publico</a>
                           </li>
                           <li class="dropdown-item">
                              <a class="fs-custom8 text-decoration-none gray" href="#">Quadros de propriedades</a>
                           </li>
                           <li class="dropdown-item">
                              <a class="fs-custom8 text-decoration-none gray" href="#">Configurações</a>
                           </li>
                           <li class="dropdown-item">
                              <a class="fs-custom8 text-decoration-none gray" href="../php_adm/logout.php">Encerrar sessão</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
      <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
         <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">
               <a class="navbar-brand" href="#">
               <img src="../imagens/15202776221.png" alt="Brand">
               </a>
            </h5>
            <button type="button" class="btn-close mn-blue" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
            <nav id="sidebar" class="bg-white">
               <ul class="nav flex-column fs-custom1">
                  <li class="nav-item">
                     <div class="d-flex flex-row d-block d-lg-none mb-3">
                        <input class="search-input-adm w-100" type="search" aria-label="Search">
                        <button class="search-button-adm" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i> 
                        </button>
                     </div>
                  </li>
                  <div class="mb-4">
                     <li class="nav-item">
                        <a class="nav-link active" href="#">
                        <i class="fa-solid fa-arrow-left me-2"></i>Portal Publico
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="imoveis.php">
                        <i class="fa-regular fa-heart me-2"></i>Quadros de Propriedades
                        </a>
                     </li>
                  </div>
                  <div class="mb-3">
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fa-regular fa-circle-down me-2"></i>Atalhos
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fa-regular fa-envelope me-2"></i>Caixa de Correio
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fa-solid fa-house me-2"></i>Minhas Propriedades
                        </a>
                     </li>
                  </div>
                  <div class="mb-4">
                     <li class="nav-item">
                        <a class="nav-link" href="agenda.php">
                        <i class="fa-solid fa-book me-2"></i>Agenda
                        </a>  
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fa-solid fa-user-group me-2"></i>Colaboradores
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                        <i class="fa-solid fa-chart-simple me-2"></i>Dashboard
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="tasks.php">
                        <i class="fa-regular fa-lightbulb me-2"></i>Tarefas
                        </a>
                     </li>
                  </div>
                  <div>
                     <li class="nav-item">
                        <a class="nav-link" href="edit.php">
                        <i class="fas fa-tools me-2"></i>Editar Site
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fa-regular fa-user me-2"></i>Contatos
                        </a>
                     </li>
                     <li class="nav-item d-flex align-items-center custom-ms-1 d-block d-lg-none mt-3">
                        <div class="profile-circle"></div>
                        <div class="d-flex flex-column ms-2">
                           <h1 class="fs-custom8">Guber Oliveira</h1>
                           <a class="text-decoration-none gray fs-custom8" href="#">Editar perfil</a>
                        </div>
                     </li>
                  </div>
               </ul>
            </nav>
         </div>
      </div>
   </header>
