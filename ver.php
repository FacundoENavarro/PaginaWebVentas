<?php
	// incluimos el fichero de conexión

	require_once('dbcon.php');
	
	// extraemos la informacion de la tabla usuarios..
	$sql = "SELECT * FROM usuario";
	$query = $con->query($sql);
	if ($query->num_rows  > 0) {
		$output = "";
		$output .= "<table class='table table-hover table-striped'>
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Contraseña</th>
						<th>Mail</th>
						<th>Editar</th>
						<th>Borrar</th>
					</tr>
				</thead>";
		while ($row = $query->fetch_assoc()) {
		$output .= "<tbody>
					<tr>
						<td>{$row['id_usuario']}</td>
						<td>{$row['nombre']}</td>
						<td>{$row['apellido']}</td>
						<td>{$row['contraseña']}</td>
						<td>{$row['mail']}</td>
						<td><button class='btn btn-success btn-sm editar-btn' data-id='{$row['id_usuario']}' data-toggle='modal' data-target='#exampleModal'>Editar</button></td>
						<td><button class='btn btn-danger btn-sm borrar-btn' data-id='{$row['id_usuario']}'>Borrar</button></td>
					</tr>
			</tbody>";
		}
	$output .="</table>";
	echo $output;
	}else{
		echo "<h5>Ningún registro fue encontrado</h5>";
	}
	
?>
