<!DOCTYPE html>

<html>
    <head>
        <title>Mensaje recibido</title>
    </head>

    <body>
        Contenido del mensaje
        
        <p>Recibiste mensaje de: {{ $msg['nombre'] }} </p>
        <p>Su correo es: {{ $msg['email'] }}</p>
        <p>Asunto: {{ $msg['asunto'] }}</p>
        <p>Contenido: {{ $msg['contenido'] }}</p>




    </body>


</html>