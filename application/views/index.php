<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Agenda de Reuniones </title>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="../../scripts/fullcalendar/fullcalendar.min.css" />
        <script src="../../scripts/fullcalendar/lib/moment.min.js"></script>
        <script src="../../scripts/fullcalendar/fullcalendar.min.js"></script>
        <script src="../../scripts/fullcalendar/gcal.js"></script>
        <script src='../../scripts/fullcalendar/locale-all.js'></script>
        <!-- custom scripts --> 
        <script type="text/javascript" src="js/script.js"></script> 
        <!-- bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" >
   </head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
     <h1>Agenda Salas Reuniones</h1>
    <div id="calendar">
    </div>
    </div>
    </div>
    </div>
<script type="text/javascript">
$(document).ready(function() {
    $('#calendar').fullCalendar({
    
        defaultView: 'agendaWeek',
      locale: 'es',
      
    
    });
});
</script>



</body>
</html>