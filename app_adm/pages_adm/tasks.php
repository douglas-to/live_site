<?php
   include("../php_adm/protect.php");
   include_once("../php_adm/connect.php");
   include("../php_adm/metatags.php"); 
   include("navbar.php"); 
?> 

<section class="container mt-5">
   <div class="row">
      <div class="col-lg-12">
         <div class="row">
            <div class="col-lg-5">
               <h1 class="mn-blue fs-custom6 fw-semibold">Relatórios</h1>
               <p class="fs-custom8 gray2">Veja o desempenho geral do seus agentes por período.</p>
            </div>
         </div>

         <div class="row mt-1 mb-3">
            <div class="col-lg-4 mb-2 mb-lg-0">
               <div class="card rounded-0 h-100">
                  <div class="card-body">
                     <h5 class="card-title mn-blue fs-custom1 fw-semibold">Clientes potenciais</h5>
                     <p class="card-text fs-custom3 gray2">Número de clientes criados a partir de solicitações as suas propriedades ou adicionadas manualmente.</p>
                     <a href="#" class="myButton"><i class="fa-solid fa-magnifying-glass me-2"></i>Visitar sessão</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 mb-2 mb-lg-0">
               <div class="card rounded-0 h-100">
                  <div class="card-body">
                     <h5 class="card-title mn-blue fs-custom1 fw-semibold">Designações de clientes potenciais</h5>
                     <p class="card-text fs-custom3 gray2">Número de leads atribuídos a cada usuário / clientes e seu status.</p>
                     <a href="#" class="myButton"><i class="fa-solid fa-user-tag me-2"></i>Visitar sessão</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 mb-2 mb-lg-0">
               <div class="card rounded-0 h-100">
                  <div class="card-body">
                     <h5 class="card-title mn-blue fs-custom1 fw-semibold">Clientes potenciais ganhos</h5>
                     <p class="card-text fs-custom3 gray2">Número de leads fechado ou suspenso por cada usuário / clientes.</p>
                     <a href="#" class="myButton"><i class="fa-solid fa-user-check me-2"></i>Visitar sessão</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="row mb-3">
            <div class="col-lg-4 mb-2 mb-lg-0">
               <div class="card rounded-0 h-100">
                  <div class="card-body">
                     <h5 class="card-title mn-blue fs-custom1 fw-semibold">Fontes de clientes potenciais</h5>
                     <p class="card-text fs-custom3 gray2">Porcentagem de leads capturados por cada fonte registrada.</p>
                     <a href="#" class="myButton"><i class="fa-solid fa-chart-pie me-2"></i>Visitar sessão</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 mb-2 mb-lg-0">
               <div class="card rounded-0 h-100">
                  <div class="card-body">
                     <h5 class="card-title mn-blue fs-custom1 fw-semibold">História de atividades</h5>
                     <p class="card-text fs-custom3 gray2">Número de atividades registradas por categoria ao longo de um período de tempo.</p>
                     <a href="#" class="myButton"><i class="fa-solid fa-clock-rotate-left me-2"></i>Visitar sessão</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 mb-2 mb-lg-0">
               <div class="card rounded-0 h-100">
                  <div class="card-body">
                     <h5 class="card-title mn-blue fs-custom1 fw-semibold">Solicitações da web</h5>
                     <p class="card-text fs-custom3 gray2">Número de solicitações da web do meu site, dashboard e portal público.</p>
                     <a href="#" class="myButton"><i class="fa-solid fa-display me-2"></i>Visitar sessão</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="row mb-3">
            <div class="col-lg-4 mb-2 mb-lg-0">
               <div class="card rounded-0 h-100">
                  <div class="card-body">
                     <h5 class="card-title mn-blue fs-custom1 fw-semibold">Fontes de solicitações web</h5>
                     <p class="card-text fs-custom3 gray2">Porcentagem de solicitações web capturadas por cada fonte registrada.</p>
                     <a href="#" class="myButton"><i class="fa-solid fa-globe me-2"></i>Visitar sessão</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 mb-2 mb-lg-0">
               <div class="card rounded-0 h-100">
                  <div class="card-body">
                     <h5 class="card-title mn-blue fs-custom1 fw-semibold">Propriedades com mais solicitações web</h5>
                     <p class="card-text fs-custom3 gray2">Relatório por origem das propriedades com mais solicitações web durante um período.</p>
                     <a href="#" class="myButton"><i class="fa-regular fa-handshake me-2"></i>Visitar sessão</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 mb-2 mb-lg-0">
               <div class="card rounded-0 h-100">
                  <div class="card-body">
                     <h5 class="card-title mn-blue fs-custom1 fw-semibold">Solicitações da web de propriedades</h5>
                     <p class="card-text fs-custom3 gray2">Relatório por fonte das propriedades com mais solicitações web durante um período.</p>
                     <a href="#" class="myButton"><i class="fa-solid fa-house-flag me-2"></i>Visitar sessão</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php include("../includes_adm/footer.php"); ?>