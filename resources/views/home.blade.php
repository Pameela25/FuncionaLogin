<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <h1>hola</h1>
        @auth
        <p>Bienvenido ha acedido</p>
        @endauth

        @guest 
        <p>Inicia sesion estas como invitado</p>
        @endguest
        <p>cerrar session</p>
    </body>
</html>
