<?php
   include("../php_adm/protect.php");
   include_once("../php_adm/connect.php");
   include("../php_adm/metatags.php"); 
   include("navbar.php"); 
?> 

<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="fs-custom8 mn-blue" id="calendar"></div>
        </div>
    </div>
</div>


<script>
  $(document).ready(function() {
    // Tradução dos dias da semana e meses
    var diasDaSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
    var meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

    $('#calendar').fullCalendar({
      selectable: true,
      select: function(start, end) {
        var title = prompt('Digite o título do evento:');
        if (title) {
          var eventData = {
            title: title,
            start: start,
            end: end
          };
          $('#calendar').fullCalendar('renderEvent', eventData, true);
        }
        $('#calendar').fullCalendar('unselect');
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