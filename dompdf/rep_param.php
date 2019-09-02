<?php
session_start();
require_once("dompdf_config.inc.php");
include('../php/BD.php');
conectar();

	
 // Standard inclusions   
 include("../pChart/pchart/pData.class");
 include("../pchart/pChart/pChart.class");
 

$val=mysql_query("select count(distinct empleado.id_lugar_labor) as total_lugar from lugar_labor,empleado where lugar_labor.id_lugar_labor=empleado.id_lugar_labor");
	$a=mysql_fetch_array($val);
		$tamanio=$a['total_lugar'];

if($tamanio>0 && $tamanio<=8) {
  $arreglo_contador = array($tamanio);
  	$arreglo_nombre = array($tamanio);
  		$arreglo_numero = array($tamanio);
			}
			else {
				$tamanio=8;
		$arreglo_contador = array($tamanio);
  		$arreglo_nombre = array($tamanio);
  			$arreglo_numero = array($tamanio);
				}
				
		$val=mysql_query("select lugar_labor.id_lugar_labor as id ,lugar_labor.nombre_lugar_labor as lugar , count(empleado.id_lugar_labor) as total from lugar_labor,empleado where empleado.id_lugar_labor=lugar_labor.id_lugar_labor group by lugar");
		
		$i=0;
			while($val2=mysql_fetch_array($val)){
			
			$arreglo_contador[$i] = $val2['total'];
 				 $arreglo_nombre[$i] = $val2['lugar'];
 					 $arreglo_numero[$i] = $val2['id'];
			
						$i++;
						if($i>8) 
						break;
						
						}
						
					$lis="";
											
 for($i=0; $i<$tamanio;$i++){

		 		 		
			 			 $a="<tr align='left' >
		    			  <td >".$arreglo_numero[$i]." )- ".$arreglo_nombre[$i]."</td>
		    			  <td >".$arreglo_contador[$i]."</td>
		    			
									</tr>";
									
				
				
						$lis=$lis.$a;	
															
							
			}						
						
						
						
						
		
 // Dataset definition 
 $DataSet = new pData;
 $DataSet->AddPoint($arreglo_contador,"Serie1");
 $DataSet->AddPoint($arreglo_numero,"Serie2");
 $DataSet->AddAllSeries();
 $DataSet->SetAbsciseLabelSerie("Serie2");

 // Initialise the graph
 $Test = new pChart(550,400);
 	$Test->setFontProperties("../pchart/Fonts/tahoma.ttf",15);


 // Draw the pie chart
 $Test->AntialiasQuality = 0;
 $Test->setShadowProperties(2,2,200,200,200);
 $Test->drawFlatPieGraphWithShadow($DataSet->GetData(),$DataSet->GetDataDescription(),220,200,160,PIE_PERCENTAGE,8);
 $Test->clearShadow();

 $Test->drawPieLegend(450,30,$DataSet->GetData(),$DataSet->GetDataDescription(),250,250,250);

 $Test->Render("example13.png");
 
 
  /*----------------------------------------------------------------------------------*/
 
 /*DOMPDF*/
$fecha=date('d-m-Y');
		$order="";
			$sql=$_SESSION['sql'];
			 $order=$_SESSION['ordenar'];
			  $columnaLugar=0;
			
			$columnaLugar=$_SESSION['numlabor'];

		$resp=mysql_query("SELECT persona.cedula as id ,empleado.email as correo, empleado.telefono as cel, concat(persona.nombres , ' ', persona.apellidos ) as datos ,lugar_labor.nombre_lugar_labor as lugar FROM empleado,persona,lugar_labor WHERE persona.id_persona=empleado.id_persona and empleado.id_lugar_labor=lugar_labor.id_lugar_labor $sql  $order");

			$num=0;

		    	$num = mysql_num_rows($resp);
	$lista=""; 
	 while($registro=mysql_fetch_array($resp) ){


				
				$hijos=mysql_query("select count(*) as hijos from hijo where id_empleado=(select id_empleado from empleado where id_persona=(select id_persona from persona where cedula=$registro[id]))");
			 		$num=mysql_fetch_array($hijos);
			 		  $numHijo=$num["hijos"];
			 		
		 		 		
			 			 $a="<tr align='left' >
		    			  <td >".$registro['id']."</td>
		    			  <td >".$registro['datos']."</td>
		    			  <td >".$numHijo."</td>
		    			  <td >".$registro['correo']."</td>
		    			  <td >".$registro['cel']."</td>
						<td >".$registro['lugar']."</td>
							
									</tr>";
									
				
				
						$lista=$lista.$a;										
							
			}

		

if($lista=="") {
$lista="no se encontraron resultados"	;
	}
$html =
"<html><body><center>
<img src='../web/images/cintillo2.png' width='80%'></img>
<br>
REP&Uacute;BLICA BOLIVARIANA DE VENEZUELA<br>
MINISTERIO DEL PODER POPULAR PARA LA EDUCACI&Oacute;N UNIVERSITARIA, CIENCIA Y TECNOLOG&Iacute;A<br>
INSTITUTO UNIVERSITARIO DE TECNOLOG&Iacute;A DE YARACUY<br>
INDEPENDENCIA - YARACUY
<br><br>
&nbsp;&nbsp;&nbsp;
REPORTE DE EMPLEADOS<br>
&nbsp;&nbsp;&nbsp;
Fecha de Emision: ".$fecha."

<br><br><br>

		<table cellspadding='4' align='center' width='95%'>
          <tr align='left' >
		      <td  bgcolor=#E0FFFF width='10%'><b>C&eacute;dula</td>
		        <td bgcolor=#E0FFFF ><b>Nombres y Apellidos</td>
		                <td bgcolor=#E0FFFF width='2%'><b>N&uacute;mero de Hijos</td><td bgcolor=#E0FFFF width='18%'><b>Correo</td><td bgcolor=#E0FFFF width='15%'><b>Tel&eacute;fono</td><td bgcolor=#E0FFFF width='15%'><b>Lugar</td>
			  				  </tr>
			<tr align='left'><td colspan='5' >--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</td></tr>

		
			".$lista."
<br><br><tr align='left'><td colspan='5' >--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</td></tr>

</table> <br><br>
<table cellspadding='4' align='center' width='50%'>

<tr >
<td colspan='2'>
<br>
<b>
GRAFICA DE EMPLEADOS REGISTRADOS POR LUGAR DE TRABAJO </b><br>
<img src='example13.png'></img>
</td>
</tr>


<tr>
<td bgcolor=#E0FFFF align='left' >
LEYENDA
</td>
<td bgcolor=#E0FFFF align='left' width='1%'>
TOTAL
</td>
</tr>

".$lis."

</table>
	

					</center>

</p>
</body></html>";
ini_set("memory_limit","32M");   
$dompdf = new DOMPDF();

$dompdf->load_html($html);
$dompdf->set_paper("letter","landscape");
$dompdf->render();
$dompdf->stream("rep_empleados.pdf");

unlink("example13.png");


?>
