<?php
	
	$conexion=mysqli_connect('localhost','root','','pruebas');
?>

<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table>
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>edad</td>
			<td>escuela</td>
			<td>estatura</td>
		</tr>
		<?php
		$sql="SELECT * from personas";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['NOMBRE'] ?></td>
			<td><?php echo $mostrar['edad'] ?></td>
			<td><?php echo $mostrar['escuela'] ?></td>
			<td><?php echo $mostrar['estatura'] ?></td>
		</tr>
	<?php  
	}
	 ?>
	</table>

</body>
</html>		
