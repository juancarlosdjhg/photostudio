<?php
session_start();
require_once("dompdf_config.inc.php");
include('../php/conexion.php');
conectar();
$can=$_SESSION['ProductoCantidad'];
$nombre=$_SESSION['ProductoNombre'];
$codigo=$_SESSION['ProductoCodigo'];
$total=$_SESSION['ProductoMonto'];		
$submonto=$_SESSION['ProductoFila'];
$fecha=$_SESSION['FECHA'];
$hora=$_SESSION['hora'];
$numero=$_SESSION['NumeroFactura'];
$parar=$_SESSION['parar'];
$precio=$_SESSION['ProductoPrecio'];
$cedula=$_SESSION['cedula'];
$pago=$_SESSION['tipoPago'];


$cadena="SELECT * from persona where cedula='$cedula'";
$ejecutar=mysql_query($cadena);

$regi=mysql_fetch_array($ejecutar);

$nombrePer=$regi['nombre'];
$apellidoPer=$regi['apellido'];
$direccionPer=$regi['direccion'];

$lista="";
	for($i=0; $i<$parar; $i++){

	  $a="<tr align='left' >
		      <td >".$codigo[$i]."</td>
			  <td >".$nombre[$i]."</td>
			  <td >".$can[$i]."</td>
			   <td >".$precio[$i]."</td>
			<td>".$submonto[$i]."</td>
			  </tr>";
	if($i<$parar)
	$lista=$lista.$a;
	

		}
$html =
"<html><body><center>
<img src='../imagenes/membrete2.PNG' width='99%' height='40%'></img></center>
<br>
<p>
        <center>
	<table align='center'><tr><th><font size='12'>Compra y Venta de Articulos Escolares y de Oficina</th></tr><tr><th> Avenida 7, Esquina / Calle 11, Chivacoa - Bruzual - Yaracuy </th></tr><tr><th>R.I.F -12345678, Telf.: (0251)883.10.56</th></tr></table>
<br><br><br><table align='left' width='27%'>
<tr align='left'>
<th align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Numero de Control:
</th><td>".$numero."</td></tr></table>
<br><br>
<table align='left' width='90%'>
<tr align='left'>
<th align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cliente
</th>
<td >".$nombrePer." ".$apellidoPer."
</td>
<th align='left'>Emisi&oacute;n
</th>
<td>".$fecha."
</td>
</tr>
<tr align='left'>
<th align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Direcci&oacute;n
</t>
<td >".$direccionPer."
</td>
<th align='left'>Vence
</th>
<td>".$fecha."
</td>
</tr>
<tr align='left'>
<th align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R.I.F
</th>
<td > ".$cedula."
</td>
<th align='left'>Forma de pago
</th>
<td>".$pago."
</td>
</tr>
</table>
<br><br><br><br><br><br>
<img src='../imagenes/linia.PNG' width='99%' height='40%'></img>
<br><br><br>
		<table cellspadding='10' align='right' width='98%'>
          <tr align='left'>
		      <td ><b>C&oacute;digo</td>
			  <td ><b>Nombre</td>
			  <td ><b>Cantidad</td>
			   <td ><b>Precio </td>
			<td ><b>Monto</td>
			  </tr>
			<tr align='left'><td colspan='5' >---------------------------------------------------------------------------------------------------------------------------------</td></tr>

		
			".$lista."</table> <br><br><br><br><br><br><br><br><br>

		<table width='47%' align='right'>
		<tr  align='left'><th  align='right'>Sub - Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td>".$total."</td></tr>
		<tr align='left' ><th align='right'>Iva&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td>0.00</td></tr>
		<tr  align='left'><th align='right'>Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td>".$total."</td></tr>


	</table><br><br><br><br><br><br>

	<table align='center'><tr><th>__________________________</th></tr><tr><th>Firma y Sello</th></tr></table>

					</center>

</p>
</body></html>";

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper('A4');
$dompdf->render();
$dompdf->stream($numero.".pdf");



?>
