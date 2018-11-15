<?php include 'includes/includes.php' ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<title>Hola mundo</title>
</head>
<body>

	<form method="POST" class="container center">
		<input type="text" name="name" value="<?php echo $datos2->nombre; ?>">
		<input type="email" name="email" value="<?php echo $datos2->email; ?>">
		<input type="text" name="pass" value="<?php echo $datos2->password; ?>">
		<button class="waves-effect waves-light btn">Modificar</button>
	</form>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>