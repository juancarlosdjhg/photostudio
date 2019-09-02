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
session_start();
include("BD.php");
conectar();
$q=$_POST['q'];

$sql="select * from proyecto where titulo_proyecto LIKE '".$q."%'";
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
$titulo_proyecto=$fila['titulo_proyecto'];
$id_proyecto=$fila['id_proyecto'];
$_SESSION['id_proyecto']=$id_proyecto;
 echo '<table cellspadding="2" border="0">
		<tr>
			<td><span>TITULO DEL PROYECTO</span></td>
		
		</tr>
		<tr>
				<td class="titulo">
					<form method="post" action="AsociarProyecto2.php">
					<span><input disabled="disabled" class="" value="'.$titulo_proyecto.'" type="text" required>	</span>				
					<input name="id_proyecto" value="'.$id_proyecto.'" type="hidden">	
				</td>
				<td>
					<span><input value="SELECCIONAR" class="button5" type="submit"></span>
				</td>
					</form>
				</td>
				
		</tr>
	</table>
		';

} 
}

?>

