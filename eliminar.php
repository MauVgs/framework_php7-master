<?php include "includes/includes.php" ?>
<?php  
	$id=$_GET["id"];
	echo "$id";
	$eliminar = $obj->query("DELETE FROM tabla1 WHERE id_ejemplo1 = '$id'");

	header('location: index.php');
 ?>