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
      <h5 class="mn-blue fs-custom3 text-center">Agenda</h5>
      <div class="fs-custom8 mn-blue bg-card p-5" id="calendar"></div>
    </div>
  </div>

  <div class="modal fade" id="ViewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ViewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-0">
        <div class="modal-header border-0">
          <h1 class="modal-title fs-custom1 fw-semibold" id="ViewModalLabel">Detalhes do Evento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <dl class="row">
            <dt class="col-sm-3 fs-custom3">ID:</dt>
            <dd class="col-sm-9 fs-custom3" id="viewId"></dd>

            <dt class="col-sm-3 fs-custom3">Título:</dt>
            <dd class="col-sm-9 fs-custom3" id="viewTitle"></dd>

            <dt class="col-sm-3 fs-custom3">Ínicio:</dt>
            <dd class="col-sm-9 fs-custom3" id="viewStart"></dd>

            <dt class="col-sm-3 fs-custom3">Fim:</dt>
            <dd class="col-sm-9 fs-custom3" id="viewEnd"></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-0">
        <div class="modal-header border-0">
          <h1 class="modal-title fs-custom1 fw-semibold" id="registerModalLabel">Cadastrar evento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <span id="msgCadEvent"></span>

          <form method="POST" id="formCadEvent">
            <div class="row mb-3">
                <label for="cadTitle" class="col-sm-2 col-form-label">Título</label>
                <div class="col-sm-10">
                    <input type="text" name="cadTitle" class="form-control" id="cadTitle" placeholder="Título do evento">
                </div>
            </div>

            <div class="row mb-3">
                <label for="cadStart" class="col-sm-2 col-form-label">Início</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="cadStart" class="form-control" id="cadStart">
                </div>
            </div>

            <div class="row mb-3">
                <label for="cadEnd" class="col-sm-2 col-form-label">Fim</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="cadEnd" class="form-control" id="cadEnd">
                </div>
            </div>

            <div class="row mb-3">
                <label for="cadColor" class="col-sm-2 col-form-label">Cor</label>
                <div class="col-sm-10">
                    <select name="cadColor" class="form-control" id="cadColor">
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

            <button type="submit" name="btnCadEvent" class="btn btn-success" id="btnCadEvent">Cadastrar</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    const registerModal = new bootstrap.Modal(document.getElementById("registerModal"));

    var calendar = new FullCalendar.Calendar(calendarEl, {
      themeSystem: 'bootstrap5',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      locale: 'pt-br',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: '../php_adm/list_events.php',
      eventClick: function(info){
        const ViewModal =  new bootstrap.Modal(document.getElementById("ViewModal"));

        document.getElementById("viewId").innerText = info.event.id;
        document.getElementById("viewTitle").innerText = info.event.title;
        document.getElementById("viewStart").innerText = info.event.start.toLocaleString();
        document.getElementById("viewEnd").innerText = info.event.end !== null ? info.event.end.toLocaleString() : info.event.start.toLocaleString();

        ViewModal.show();
      },

      select: function(info){
        document.getElementById("cadStart").value = convertData(info.start);
        document.getElementById("cadEnd").value = convertData(info.end);
        registerModal.show();
      }
    });

    calendar.render();

    function convertData(data){
      const dataObj = new Date(data);
      const year = dataObj.getFullYear();
      const month = String(dataObj.getMonth() + 1).padStart(2, '0');
      const day = String(dataObj.getDate()).padStart(2, '0');
      const hours = String(dataObj.getHours()).padStart(2, '0');
      const minute = String(dataObj.getMinutes()).padStart(2, '0');

      return `${year}-${month}-${day}-${hours}-${minute}`;
    }

    const formCadEvent = document.getElementById("formCadEvent");
    const msg = document.getElementById("msg");
    const msgCadEvent = document.getElementById("msgCadEvent");
    const btnCadEvent = document.getElementById("btnCadEvent");

    if(formCadEvent){
      formCadEvent.addEventListener("submit", async (e) => {
        e.preventDefault();
        btnCadEvent.value = "Salvando...";
        
        const dataForm = new FormData(formCadEvent);

        const datas = await fetch("../php_adm/register_event.php", {
          method: "POST",
          body: dataForm
        });

        const response = await datas.json();

        if(!response['status']){
            
          msgCadEvent.innerHTML = `<div class="alert alert-danger" role="alert">${response['msg']}</div>`;
        
          }else{
            msg.innerHTML = `<div class="alert alert-success" role="alert">${response['msg']}</div>`;
            msgCadEvent.innerHTML = "";
            formCadEvent.reset();

            const newEvent = {
              id: response['id'],
              title: response['title'],
              color: response['color'],
              start: response['start'],
              end: response['end']
            }

            calendar.addEvent(newEvent);

            removeMsg();
        
            registerModal.hide();
        }

        btnCadEvent.value = "Cadastrar";

      });
    }

    function removeMsg(){
      setTimeout(() => {
        document.getElementById("msg").innerHTML = "";
      }, 3000)
    }
  });

</script>
<script src='../js/plugins/fullCalendar/index.global.min.js'></script>
<script src='../js/plugins/fullCalendar/core/locales-all.global.min.js'></script>
<script src='../js/plugins/bootstrap5/index.global.min.js'></script>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>