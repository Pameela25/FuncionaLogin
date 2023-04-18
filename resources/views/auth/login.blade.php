<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <form method="POST" action="/home" >
            @csrf
            username/email
            <input type="text" name="username" id="">
            password
            <input type="password" name="password" id="">
            <input type="submit" value="login">
        </form>
    </body>
</html>
