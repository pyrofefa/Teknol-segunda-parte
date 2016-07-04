<?php
	include('conec.php');

	$sql="select * from comentarios";
	$resultado=mysql_query($sql);
?>
<table>
	<tr>
    	<td>Id</td>
		<td>Nombre</td>
		<td>Correo</td>
		<td>Comentario</td>
	<tr>
<?php
	while($rw=mysql_fetch_array($resultado))
	{
?>
	<tr>
    	<td> <?php echo ($id=$rw['id']);?></td>
		<td> <?php echo ($nombre=$rw['nombre']); ?></td>
		<td> <?php echo ($correo=$rw['correo']); ?></td>
		<td> <?php echo ($comentario=$rw['comentario']); ?></td>
	</tr>

<?php
	} 
?>
</table>
