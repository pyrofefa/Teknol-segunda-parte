<?php
	include('conec.php');

	$sql="select * from comentarios";
	$resultado=mysql_query($sql);
	while($row=mysql_fetch_assoc($resultado))
	{
		$arr[]=$row;	
	}
		$json=json_encode($arr);

	echo $json;
?>
