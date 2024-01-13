<?php include("../php_adm/protect.php");?>
<div class="nav-up d-none d-lg-block">
   <div class="d-flex justify-content-md-between justify-content-center align-items-center">
      <div class="lado-1">
         <select name="select" class="rounded-0 mySelect text-uppercase">
            <option value="valor1" selected>Buscar</option>
            <option value="valor2">Valor 2</option>
            <option value="valor3">Valor 3</option>
         </select>
         <a href="#" class="myButton text-uppercase">Filtrar</a>
      </div>
      <div class="lado-2 ms-1">
         <a href="cadastrar_imovel.php" class="myButton text-uppercase">Adicionar Propriedade</a>
         <a href="#" class="myButton text-uppercase">Exportar Relatório</a>
      </div>
   </div>
</div>
<div class="nav-down mt-3 d-none d-lg-block">
   <div class="d-flex flex-md-row flex-column">
      <div class="input-group-text rounded-0 me-md-1 mb-3">
         <input class="form-check-input mt-0 rounded-0" type="checkbox" value="" aria-label="Checkbox for following text input">
         <label for="customCheckbox" class="form-check-label fs-custom8 gray ms-1">
         Selecionar todos
         </label>
      </div>
      <!-- O segundo valor estará selecionado inicialmente -->
      <select name="select" class="rounded-0 mySelect me-md-1 mb-3">
         <option value="valor1" selected>Tipo de publicação</option>
         <option value="valor2">Valor 2</option>
         <option value="valor3">Valor 3</option>
      </select>
      <select name="select" class="rounded-0 mySelect me-md-1 mb-3">
         <option value="valor1" selected>Alterar status</option>
         <option value="valor2">Valor 2</option>
         <option value="valor3">Valor 3</option>
      </select>
   </div>
</div>
<div class="d-flex justify-content-between align-items-center mt-1 mb-3">
   <div class="ms-res">
      <h1 class="fs-custom1 fw-semibold text-uppercase mn-blue">1 - 4 Imóveis</h1>
   </div>
   <button type="button" class="myButton text-uppercase d-block d-lg-none bg-red white" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus me-1"></i><i class="fa-solid fa-gears"></i></button>
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header border-0">
               <h1 class="modal-title fs-5 fw-semibold mn-blue" id="exampleModalLabel">Filtros</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mt-2">
                  <div class="input-group-text rounded-0 me-md-1 mt-3 mb-3">
                     <input class="form-check-input mt-0 rounded-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                     <label for="customCheckbox" class="form-check-label fs-custom8 gray ms-2 text-uppercase">
                     Selecionar todos
                     </label>
                  </div>

                  <select name="select" class="rounded-0 mySelect text-uppercase w-100">
                     <option value="valor1" selected>Buscar</option>
                     <option value="valor2">Valor 2</option>
                     <option value="valor3">Valor 3</option>
                  </select> 
               </div>
               <div class="mt-2">
                  <!-- O segundo valor estará selecionado inicialmente -->
                  <select name="select" class="rounded-0 mySelect me-md-1 mb-3 text-uppercase w-100">
                     <option value="valor1" selected>Tipo de publicação</option>
                     <option value="valor2">Valor 2</option>
                     <option value="valor3">Valor 3</option>
                  </select>
                  <select name="select" class="rounded-0 mySelect me-md-1 mb-3 text-uppercase w-100">
                     <option value="valor1" selected>Alterar status</option>
                     <option value="valor2">Valor 2</option>
                     <option value="valor3">Valor 3</option>
                  </select>
                  <a href="#" class="myButton text-uppercase w-100 mb-3">Adicionar Propriedade</a>
                  <a href="#" class="myButton text-uppercase w-100">Exportar Relatório</a>
               </div>
            </div>
            <div class="modal-footer border-0">
               <button type="button" class="myButton bg-red white text-uppercase" data-bs-dismiss="modal">Fechar</button>
               <button type="button" class="myButton bg-red white text-uppercase">Salvar mudanças</button>
            </div>
         </div>
      </div>
   </div>
   <select name="select" class="rounded-0 mySelect d-none d-lg-block">
      <option value="valor1" selected>Ordenar por</option>
      <option value="valor2">Valor 2</option>
      <option value="valor3">Valor 3</option>
   </select>
</div>

<div class="d-md-block d-flex justify-content-center">
   <?php include("lista_imoveis_adm.php"); ?>
</div>
