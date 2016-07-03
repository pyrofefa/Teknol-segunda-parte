<?php
	include('conec.php');
	
	$nombreioc=$_POST['nombre'];
	$correioc=$_POST['correo'];
	$comentariosioc=$_POST['comentarios'];


	$sql="insert into comentarios (nombre, correo, comentario) values ('".$nombreioc."','".$correioc."','".$comentariosioc."')";
	$resultado=mysql_query($sql);
?>



