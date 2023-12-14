<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<!-- <script  >
    window.Echo.channel('Turnos')
 .listen('eventTurno', (e) => {
 console.log(e);
 });
</script> -->
@vite(['resources/js/app.js'])
<script>
    window.Echo.channel('Turnos').listen('.App\\Events\\eventTurno',(e)=>{
        console.log(e);
    })
</script>
</html>