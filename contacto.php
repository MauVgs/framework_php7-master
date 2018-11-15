<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <h1 class="center">Contacto</h1>
</head>
<body>

<form action="emailer.php" method="POST" class="container ">
    
    <p>Nombre: <br>
    <input type="text" name="name" placeholder="Nombre" required></p>
    <p>Correo electrónico: <br>
    <input type="email" name="email" placeholder="E-mail" required></p>
    <p>Comentario: <br>
    <textarea name="comment" id="" cols="30" rows="10" placeholder="Comentario" required></textarea></p>
    <p class="center"><input class="waves-effect waves-light btn" type="submit" value="Enviar correo"></p>
</form>


    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>