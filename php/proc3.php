<script type="text/javascript" src="ajax.js"></script>
<link rel="icon" type="image/png" href="../web/images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="../web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="../web/js/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="../web/css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="../web/css/JFFormStyle-1.css" />
		<script type="text/javascript" src="../web/js/JFCore.js"></script>
		<script type="text/javascript" src="../web/js/JFForms.js"></script>
		<script type="text/javascript" src="../nicEdit.js"></script> 
		<script type="text/javascript" src="../web/js/jquery-1.9.1.min.js"></script>
<?php

include("BD.php");
conectar();
$q=$_POST['q'];

$sql="select * from comunidad where nombre_comunidad LIKE '".$q."%'";
$res=mysql_query($sql);
if(mysql_num_rows($res)==0){

 echo '<span>No hay resultados</span>';

}else{
echo '<table cellspadding="2">
		<tr>
			<td>
				<span>RESULTADOS:</span>
			</td></tr></table>';
		
while($fila=mysql_fetch_array($res)){
$nombre_comunidad=$fila['nombre_comunidad'];
$id_comunidad=$fila['id_comunidad'];


 echo '<table cellspadding="2" border="0">
		<tr>
			<td><span>NOMBRE DE LA COMUNIDAD</span></td>
			</td>
		</tr>
		<tr>
				<td>
					<span>
					<input disabled="disabled" class="textbox" value="'.$nombre_comunidad.'" type="text" required>
					</td>
					<td></td><td></td><td></td><td></td><td></td><td></td><td>
					<span><a class="link2" href="ModificarComunidad.php?id_comunidad='.$id_comunidad.'">Modificar</a></span>
					</td>
					<td>
					<span><a class="link2" href="EliminarComunidad.php?id_comunidad='.$id_comunidad.'">Eliminar</a></span>
					</td>
					</span>
				</td>
				
		</tr>
	</table>
		';

} 
}

?>

