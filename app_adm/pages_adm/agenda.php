<?php
   include("../php_adm/protect.php");
   include_once("../php_adm/connect.php");
   include("../php_adm/metatags.php"); 
   include("navbar.php"); 
?> 

<section class="container">
  <div class="row mt-5">
    <div class="col-lg-12">
      <div class="fs-custom8 mn-blue" id="calendar"></div>
    </div>
  </div>
</section>

<!-- Adicione este código ao corpo do seu HTML -->
<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title">Nova tarefa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12">
            <input id="eventTitle" type="text" class="form-control rounded-0" placeholder="Escreva sua tarefa aqui">
          </div>
        </div> 
      </div>

      <div class="modal-footer border-0">
        <button type="button" class="myButton bg-red white" id="saveEvent">Salvar</button>
        <button type="button" class="myButton bg-red white" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    var diasDaSemana = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
    var meses = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];

    $('#calendar').fullCalendar({
      selectable: true,
      select: function(start, end){
        var modal = new bootstrap.Modal(document.getElementById('myModal'));

        modal.show();

        $('#saveEvent').on('click', function(){
          var title = $('#eventTitle').val();

          if(title){
            var eventData = {
              title: title,
              start: start,
              end: end
            };

            $('#calendar').fullCalendar('renderEvent', eventData, true);
          }

          modal.hide();

          $('#eventTitle').val('');
          $('#saveEvent').off('click');
        });

        modal._element.addEventListener('hidden.bs.modal', function(){
          $('#eventTitle').val('');
          $('#saveEvent').off('click');
        });
        
        $('#myModal').on('hidden.bs.modal', function () {
          $('#eventTitle').val('');
          $('#saveEvent').off('click');
        });
      },
      
      header: {
        left: 'prev,next today',
        right: 'title',
      },

      dayNamesShort: diasDaSemana,
      monthNames: meses,
      buttonText: {
        today: 'Hoje',
      },
    });
    
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>