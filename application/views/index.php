<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Calendar Display</title>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="../../scripts/fullcalendar/fullcalendar.min.css" />
        <script src="../../scripts/fullcalendar/lib/moment.min.js"></script>
        <script src="../../scripts/fullcalendar/fullcalendar.min.js"></script>
        <script src="../../scripts/fullcalendar/gcal.js"></script>
        <script src='../../scripts/fullcalendar/fullcalendar.js'></script>
        <script src='../../scripts/fullcalendar/locale-all.js'></script>
    </head>
    <body>

    <div class="container">
    <div class="row">
    <div class="col-md-12">

    <h1>Caelndar</h1>
    <div id="calendar">
    
</div>
    </div>
    </div>
    </div>


<script type="text/javascript">
$(document).ready(function() {
    $('#calendar').fullCalendar({
      locale: 'es'
    });
});
</script>
    </body>
</html>