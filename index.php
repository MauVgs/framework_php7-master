<?php include "includes/includes.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title> Formulario </title>
	<link rel="shortcut icon" href="logo.png" />
	<h1 class="container center">Bienvenido</h1>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<script src="validar.js"></script>
</head>
<body>
	<form method="POST" class="container center" onsubmit="return validar()">
		<input id="name" type="text" name="name" placeholder="Nombre">
		<input id="email" type="email" name="email" placeholder="E-mail">
		<input id="pass" type="password" name="pass" placeholder="Contraseña">
		<button class="waves-effect waves-light btn" type="submit">Agregar</button>
		<a class="waves-effect waves-light btn" href="contacto.php">Contacto</a>
	</form>
	<table class="container">
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Correo</td>
				<td>Contraseña</td>
				<td>Modificar</td>
				<td>Eliminar</td>
			</tr>
		<?php foreach ($datos as $elementos):?>
			<tr>
				<td><?php echo $elementos->id_ejemplo1 ?></td>
				<td><?php echo $elementos->nombre; ?></td>
				<td><?php echo $elementos->email; ?></td>
				<td><?php echo $elementos->password; ?></td>
				<td><a class="waves-effect waves-light btn" href="modificar.php?id=<?php echo $elementos->id_ejemplo1?>">
				Modificar</a></td>
				<td> <a class="waves-effect waves-light btn" href="eliminar.php?id=<?php echo $elementos->id_ejemplo1?>">
				Eliminar</a></td>
			</tr>
		<?php endforeach; ?>

	</table>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>