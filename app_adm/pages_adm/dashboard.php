<?php
   include("../php_adm/protect.php");
   include_once("../php_adm/connect.php");
   include("../php_adm/metatags.php"); 
   include("navbar.php"); 
?>
   

   <div class="container-fluid py-4 mt-5">
   <h1 style="color:#758198;" class="fs-custom2 ps-3 fw-semibold" id="saudacao"></h1>
   <p style="color:#344767;" class="ps-3 fs-custom3 fw-bolder" id="data"></p>
   <div class="row">
      <div class="col-xl-3 col-sm-6 mb-4">
         <div class="card border-0 bg-card rounded-0">
            <div class="card-body p-3">
               <div class="row">
                  <div class="col-12">
                     <div class="numbers">
                        <p style="color:#758198;" class="mb-0 text-uppercase fw-semibold fs-custom1">Novos Leads</p>
                        <div class="d-flex">
                           <h5 style="color:#344767;" class="fw-bolder me-3">2</h5>
                           <span class="fs-custom3 fw-semibold mt-1">181 no total</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
         <div class="card border-0 bg-card rounded-0">
            <div class="card-body p-3">
               <div class="row">
                  <div class="col-12">
                     <div class="numbers">
                        <p style="color:#758198;" class="mb-0 text-uppercase fw-semibold fs-custom1">Visitas</p>
                        <div class="d-flex">
                           <h5 style="color:#344767;" class="fw-bolder me-3">10</h5>
                           <span class="fs-custom3 fw-semibold mt-1">181 no total</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
         <div class="card border-0 bg-card rounded-0">
            <div class="card-body p-3">
               <div class="row">
                  <div class="col-12">
                     <div class="numbers">
                        <p style="color:#758198;" class="mb-0 text-uppercase fw-semibold fs-custom1">Propostas</p>
                        <div class="d-flex">
                           <h5 style="color:#344767;" class="fw-bolder me-3">2</h5>
                           <span class="fs-custom3 fw-semibold mt-1">181 no total</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6">
         <div class="card border-0 bg-card rounded-0">
            <div class="card-body p-3">
               <div class="row">
                  <div class="col-12">
                     <div class="numbers">
                        <p style="color:#758198;" class="mb-0 text-uppercase fw-semibold fs-custom1">Contratos</p>
                        <div class="d-flex">
                           <h5 style="color:#344767;" class="fw-bolder me-3">1</h5>
                           <span class="fs-custom3 fw-semibold mt-1">181 no total</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row mt-4">
      <div class="col-lg-3">
         <div class="card mb-2 rounded-0 border-0 bg-card">
            <div class="card-body">
               <h5 style="color:#344767;" class="card-title text-uppercase fw-semibold fs-custom1">Status das oportunidades</h5>
               <canvas id="pizzaChart"></canvas>
            </div>
         </div>
      </div>
      <div class="col-lg-9 mb-lg-0 mb-4">
         <div class="card border-0 rounded-0 bg-card" style="height:51.5vh;">
            <div class="card-body p-3">
               <h6 style="color:#344767;" class="card-title text-uppercase fw-semibold fs-custom1">Estátísticas das propriedades</h6>
               <div class="d-flex flex-column flex-md-row mt-2">
                  
               </div>
               <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row mt-4">
      <div class="col-lg-6 mb-lg-0 mb-4">
         <div class="row d-flex flex-md-row flex-column">
            <div class="col-lg-7">
               <div class="card mb-2 rounded-0 border-0 bg-card">
                  <div class="card-body" style="height:74vh;">
                     <h5 style="color:#344767;" class="card-title text-uppercase fw-semibold fs-custom1">Negócios em andamento</h5>
                     <h6 class="card-subtitle mb-2 text-body-secondary fw-semibold fs-custom3">R$ 1.327.400,00 em negócios</h6>
                     <canvas id="donutChart"></canvas> 
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="card mb-4 rounded-0 border-0 bg-card">
                  <div class="card-body">
                     <h5 style="color:#344767;" class="card-title text-uppercase fw-semibold fs-custom2">Tarefas</h5>
                     <h6 class="card-subtitle mb-2 text-body-secondary fw-semibold fs-2 gray"><i class="fa-solid fa-clock me-2 gray fs-6"></i>12</h6> 
                  </div>
               </div>

               <div class="card mb-4 rounded-0 border-0 bg-card">
                  <div class="card-body">
                     <h5 style="color:#344767;" class="card-title text-uppercase fw-semibold fs-custom2">E-mail</h5>
                     <h6 class="card-subtitle mb-2 text-body-secondary fw-semibold fs-2"><i class="fa-solid fa-envelope me-2 gray fs-6"></i>32</h6> 
                  </div>
               </div>

               <div class="card mb-4 rounded-0 border-0 bg-card">
                  <div class="card-body">
                     <h5 style="color:#344767;" class="card-title text-uppercase fw-semibold fs-custom2">Contatos</h5>
                     <h6 class="card-subtitle mb-2 text-body-secondary fw-semibold fs-2"><i class="fa-solid fa-user-plus me-2 gray fs-6"></i>12</h6> 
                  </div>
               </div>

               <div class="card rounded-0 border-0 bg-card">
                  <div class="card-body"> 
                     <h5 style="color:#344767;" class="card-title text-uppercase fw-semibold fs-custom2">Imóveis</h5>
                     <h6 class="card-subtitle mb-2 text-body-secondary fw-semibold fs-2"><i class="fa-solid fa-house me-2 gray fs-6"></i>54</h6> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-6 mb-lg-0 mb-4">
         <div class="row d-flex flex-md-row flex-column">
            <div class="col-lg-6">
               <div class="card mb-2 rounded-0 border-0 bg-card" style="height:74vh;">
                  <div class="card-body">
                     <h5 style="color:#344767;" class="card-title text-uppercase fw-semibold fs-custom1">Imóveis recentes</h5>
                     <ul class="list-group mt-4">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                           <div class="d-flex">
                              <div class="circle2"></div>
                              
                              <div class="d-flex flex-column ms-2">
                                 <h6 style="color:#344767;" class="fs-custom3 fw-bold mb-0">Rua Oscar Freire, 1100 - SP</h6>
                                 <span style="color:#758198;" class="fs-custom3 mb-0">13 ago, <span class="fw-semibold">15:13</span></span>
                              </div>
                           </div>
                        </li>

                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                           <div class="d-flex">
                              <div class="circle2"></div>
                              
                              <div class="d-flex flex-column ms-2">
                                 <h6 style="color:#344767;" class="fs-custom3 fw-bold mb-0">Rua Oscar Freire, 1100 - SP</h6>
                                 <span style="color:#758198;" class="fs-custom3 mb-0">13 ago, <span class="fw-semibold">15:13</span></span>
                              </div>
                           </div>
                        </li>

                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                           <div class="d-flex">
                              <div class="circle2"></div>
                              
                              <div class="d-flex flex-column ms-2">
                                 <h6 style="color:#344767;" class="fs-custom3 fw-bold mb-0">Rua Oscar Freire, 1100 - SP</h6>
                                 <span style="color:#758198;" class="fs-custom3 mb-0">13 ago, <span class="fw-semibold">15:13</span></span>
                              </div>
                           </div>
                        </li>

                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                           <div class="d-flex">
                              <div class="circle2"></div>
                              
                              <div class="d-flex flex-column ms-2">
                                 <h6 style="color:#344767;" class="fs-custom3 fw-bold mb-0">Rua Oscar Freire, 1100 - SP</h6>
                                 <span style="color:#758198;" class="fs-custom3 mb-0">13 ago, <span class="fw-semibold">15:13</span></span>
                              </div>
                           </div>
                        </li>

                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                           <div class="d-flex">
                              <div class="circle2"></div>
                              
                              <div class="d-flex flex-column ms-2">
                                 <h6 style="color:#344767;" class="fs-custom3 fw-bold mb-0">Rua Oscar Freire, 1100 - SP</h6>
                                 <span style="color:#758198;" class="fs-custom3 mb-0">13 ago, <span class="fw-semibold">15:13</span></span>
                              </div>
                           </div>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="card mb-4 rounded-0 border-0 bg-card" style="height:35vh;">
                  <div class="card-body">
                     <h5 style="color:#344767;" class="card-title text-uppercase fw-semibold fs-custom2">Imóveis para locação</h5>
                     <h6 class="card-subtitle mb-2 fw-normal fs-2 mt-4 mb-4 red">640</h6>
                     <h6 style="color:#758198;" class="card-subtitle mb-2 fw-semibold fs-2 mt-4 mb-4">20 <span class="fs-6">Ativos</span></h6>
                     <p  class="fs-custom3 fw-normal mt-4 mb-4 gray2">Abril de 2023 <span style="color:#758198;" class="fs-custom3 fw-bold">(150 alugados)</span></p> 
                  </div>
               </div>

               <div class="card mb-4 rounded-0 border-0 bg-red" style="height:35vh;">
                  <div class="card-body">
                     <h5 class="card-title text-uppercase fw-semibold fs-custom2 white">Imóveis á venda</h5>
                     <h6 class="card-subtitle mb-2 fw-normal fs-2 mt-4 mb-4 white">640</h6>
                     <h6 class="card-subtitle mb-2 fw-semibold fs-2 mt-4 mb-4 white">20 <span class="fs-6">Ativos</span></h6>
                     <p  class="fs-custom3 fw-normal mt-4 mb-4 white">Abril de 2023 <span class="fs-custom3 fw-bold">(90 vendidos)</span></p> 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   
   <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="../js/plugins/chartjs.min.js"></script>
   <script src="../js/main.js"></script>
   <script>
      function chartLine(){
         const ctx = document.getElementById('chart-line');

         new Chart(ctx, {
            type: 'line',
            data: {
               labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Jun', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
               datasets: [{
                     label: 'Grafico',
                     data: [12, 19, 3, 5, 2, 3, 2, 5, 1, 2, 0, 1],
               }]
            },
            options: {
               maintainAspectRatio: false, // Adicione esta linha para desativar o aspect ratio padrão
               responsive: true,
               scales: {
                     y: {
                        beginAtZero: true
                     }
               }
            }
         });
      }

      chartLine();
   </script>
   
   <script>
      function chartPizza(){
      // Grafico Pizza
         const ctx = document.getElementById('pizzaChart');

         new Chart(ctx, {
            type: 'pie',
            data: {
                  labels: ['Ganhos', 'Abertos', 'Perdidos', 'Suspenso'],
                  datasets: [{
                     label: '# of Votes',
                     data: [100, 50, 80, 8],
                     backgroundColor: [
                        'rgb(45, 206, 179)',
                        'rgb(113, 104, 228)',
                        'rgb(230, 65, 65)',
                        'rgb(251, 150, 64)'
                     ],
                  }]
            },
            options: {
                  plugins: {
                     legend: {
                        position: 'right',
                     }
                  }
            }
         });

         // Fim grafico Pizza
   };
  
   chartPizza();
   </script>

   <script>
      function chartDonut(){
         // Grafico Donut
         const ctx2 = document.getElementById('donutChart');

         new Chart(ctx2, {
            type: 'doughnut',
            data: {
               labels: ['Negócios', 'Vendas', 'Aluguéis'],
               datasets: [{
                     label: '# of Votes',
                     data: [100, 50, 80],
                     backgroundColor: [
                        'rgb(45, 206, 179)',
                        'rgb(113, 104, 228)',
                        'rgb(251, 150, 64)'
                     ],
               }]
            },
            options: {
               plugins: {
                     legend: {
                        position: 'right',
                     }
               }
            }
         });
         
         // Fim grafico Donut
      };

  chartDonut();
   </script>

   <script>// Detectar hora dashboard
function timeAndDay() {
    function obterSaudacao() {
        var saudacao = "Bom dia";

        var agora = new Date();
        var hora = agora.getHours();

        if (hora >= 12 && hora < 18) {
            saudacao = "Boa tarde";
        } else if (hora >= 18 || hora < 6) {
            saudacao = "Boa noite";
        }

        return saudacao;
    }

    // Função para obter a data formatada (dia, mês e ano)
    function obterData() {
        var agora = new Date();
        var options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        var dataFormatada = agora.toLocaleDateString('pt-BR', options);
        return dataFormatada;
    }

    // Atualiza o conteúdo do elemento h1 e p
    function atualizarConteudo() {
        var saudacaoAtual = obterSaudacao();
        var dataAtual = obterData();

        document.getElementById("saudacao").textContent = saudacaoAtual + ", GUBER!";
        document.getElementById("data").textContent = "Hoje é " + dataAtual;
    }

    // Chama a função ao carregar a página
    window.onload = function() {
        atualizarConteudo();
    };
}

timeAndDay();
// Fim detectar hora dashboard</script>

   </body>
   </html>
   
   

