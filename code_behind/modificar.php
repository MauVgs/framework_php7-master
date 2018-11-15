<?php 

	$id=$_GET["id"];
	$datos2 = $obj->get_row("SELECT nombre, email, password FROM tabla1 WHERE id_ejemplo1 = '$id'");




	
	if(!empty($_POST)){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$actualizar = $obj->query("UPDATE tabla1 SET nombre = '$name', email = '$email', password = '$pass' WHERE id_ejemplo1 = '$id'");

	header('location:index.php');	
	}
 ?>