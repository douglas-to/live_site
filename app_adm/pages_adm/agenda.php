<?php
   include("../php_adm/protect.php");
   include_once("../php_adm/connect.php");
   include("../php_adm/metatags.php"); 
   include("navbar.php"); 
?> 

<section class="container">
   <span id="msg"></span>
   <div class="row mt-5">
      <div class="col-lg-10 mx-auto">
         <div class="fs-custom8 mn-blue bg-card p-5" id="calendar"></div>
      </div>
   </div>
   
   <div class="modal fade" id="visualizarModal" tabindex="-1" aria-labelledby="visualizarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 rounded-0">
                <div class="modal-header border-0">

                    <h1 class="modal-title fs-custom3 fw-semibold" id="visualizarModalLabel">Visualizar o Evento</h1>

                    <h1 class="modal-title  fs-custom3 fw-semibold" id="editarModalLabel" style="display: none;">Editar o Evento</h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <span id="msgViewEvento"></span>

                    <div id="visualizarEvento">

                        <dl class="row">

                            <dt class="col-sm-3 fs-custom3">ID: </dt>
                            <dd class="col-sm-9 fs-custom3 gray" id="visualizar_id"></dd>

                            <dt class="col-sm-3 fs-custom3">Título: </dt>
                            <dd class="col-sm-9 fs-custom3 gray" id="visualizar_title"></dd>

                            <dt class="col-sm-3 fs-custom3">Observação: </dt>
                            <dd class="col-sm-9 fs-custom3 gray" id="visualizar_obs"></dd>

                            <dt class="col-sm-3 fs-custom3">Designado: </dt>
                            <dd class="col-sm-9 fs-custom3 gray" id="visualizar_users"></dd>

                            <dt class="col-sm-3 fs-custom3">Início: </dt>
                            <dd class="col-sm-9 fs-custom3 gray" id="visualizar_start"></dd>

                            <dt class="col-sm-3 fs-custom3">Fim: </dt>
                            <dd class="col-sm-9 fs-custom3 gray" id="visualizar_end"></dd>

                        </dl>

                        <button type="button" class="btn myButton bg-red white fs-custom3 rounded-0" id="btnViewEditEvento">Editar</button>

                        <button type="button" class="btn myButton bg-red white fs-custom3 rounded-0" id="btnApagarEvento">Apagar</button>

                    </div>

                    <div id="editarEvento" style="display: none;">

                        <span id="msgEditEvento"></span>

                        <form method="POST" id="formEditEvento">

                            <input type="hidden" name="edit_id" id="edit_id">

                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <input type="text" name="edit_title" class="form-control rounded-0 fs-custom3 gray" id="edit_title" placeholder="Título do evento">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <input type="datetime-local" name="edit_start" class="form-control rounded-0 fs-custom3" id="edit_start">
                                </div>

                                <div class="col-lg-6">
                                    <input type="datetime-local" name="edit_end" class="form-control rounded-0 fs-custom3" id="edit_end">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <input type="text" name="edit_obs" class="form-control rounded-0 fs-custom3 gray" id="edit_obs" placeholder="Observação do evento">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <input type="text" name="edit_users" class="form-control rounded-0 fs-custom3 gray" id="edit_users" placeholder="Observação do usuário">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <select name="edit_color" class="form-control rounded-0 fs-csutom3" id="edit_color">
                                        <option value="">Selecione</option>
                                        <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                        <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                                        <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                        <option style="color:#8B4513;" value="#8B4513">Marrom</option>
                                        <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                        <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                        <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                        <option style="color:#228B22;" value="#228B22">Verde</option>
                                        <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                    </select>
                                </div>
                            </div>

                            <button type="button" name="btnViewEvento" class="btn myButton bg-red white fs-custom3 rounded-0" id="btnViewEvento">Cancelar</button>

                            <button type="submit" name="btnEditEvento" class="btn myButton bg-red white fs-custom3 rounded-0" id="btnEditEvento">Salvar</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cadastrar -->
    <div class="modal fade" id="cadastrarModal" tabindex="-1" aria-labelledby="cadastrarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 rounded-0">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-custom3 fw-semibold" id="cadastrarModalLabel">Cadastrar o Evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <span id="msgCadEvento"></span>

                    <form method="POST" id="formCadEvento">

                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <input type="text" name="cad_title" class="form-control rounded-0" id="cad_title" placeholder="Título do evento">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <input type="text" name="cad_obs" class="form-control rounded-0" id="cad_obs" placeholder="Observação do evento">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <input type="text" name="cad_users" class="form-control rounded-0" id="cad_users" placeholder="Designação">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <input type="datetime-local" name="cad_start" class="form-control rounded-0" id="cad_start">
                            </div>

                            <div class="col-lg-6">
                                <input type="datetime-local" name="cad_end" class="form-control rounded-0" id="cad_end">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <select name="cad_color" class="form-control rounded-0 fs-custom3 gray" id="cad_color">
                                    <option value="">Selecione</option>
                                    <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                    <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                                    <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                    <option style="color:#8B4513;" value="#8B4513">Marrom</option>
                                    <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                    <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                    <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                    <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                    <option style="color:#228B22;" value="#228B22">Verde</option>
                                    <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" name="btnCadEvento" class="btn myButton bg-red white fs-custom3 rounded-0" id="btnCadEvento">Cadastrar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<script src='../js/plugins/fullCalendar/index.global.min.js'></script>
<script src='../js/plugins/fullCalendar/core/locales-all.global.min.js'></script>
<script src='../js/plugins/bootstrap5/index.global.min.js'></script>
<script src='../bootstrap/js/bootstrap.bundle.min.js'></script>
<script src='../js/calendar.js'></script>
<script src='../js/main.js'></script>
</body>
</html>