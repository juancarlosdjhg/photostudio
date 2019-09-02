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

$sql="select * from datos_personales where cedula='".$q."'";
$res=mysql_query($sql);

if(mysql_num_rows($res)==0){

 echo '<span>No hay resultados con ese numero de cédula</span><input type="text" class="cedula2" maxlength="0" title="Ingrese un autor" required>';

}else{

while($fila=mysql_fetch_array($res)){
$nombres=$fila['nombres'];
$apellidos=$fila['apellidos'];

 echo '<table cellspadding="2">
		<tr>
			<td>
				<span>NOMBRES</span></td><td><span>APELLIDOS</span>
			</td>
		</tr>
		<tr>
				<td>
					<span><input disabled="disabled"  value="'.$nombres.'" type="text2" class="cedula2" required>
					<input name="nombres[]" value="'.$nombres.'" type="hidden" required title="Ingrese un autor"></span>
				</td>
				<td><span><input disabled="disabled" type="text2" value="'.$apellidos.'" class="cedula2" required>
				<input name="apellidos[]" value="'.$apellidos.'" type="hidden" required title="Ingrese un autor"></span></span>
				</td>
		</tr>
	</table>
		';

} 
}

?>

