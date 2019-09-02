<?php
session_start();
include("BD.php");
conectar();


if(isset($_POST["consultar"])){
$cedula=$_POST['cedula'];
$_SESSION["cedulaEmp"]=$cedula;

$resultado=mysql_query("select  * from persona,hijo where persona.id_persona=hijo.id_persona and persona.cedula=$cedula");

if(mysql_num_rows($resultado)==0){

$resultado=mysql_query("select * from persona,empleado where persona.id_persona=empleado.id_persona and persona.cedula=$cedula");

 if(mysql_num_rows($resultado)>0){
 	$_SESSION["btn"]=1;
 
 		$resulta=mysql_fetch_array($resultado);
 		
 		$_SESSION["nombres"]=$resulta["nombres"];
		$_SESSION["apellidos"]=$resulta["apellidos"];
		$_SESSION["correo"]=$resulta["email"];
		$_SESSION["fecha"]=$resulta["fecha_ingreso"];
		$_SESSION["edo"]=$resulta["estado_civil"];
		$_SESSION["telefono"]=$resulta["telefono"];
		$_SESSION["condicion"]=$resulta["id_condicion_contrato"];
		$_SESSION["formacion"]=$resulta["id_formacion"];
		$_SESSION["categoria"]=$resulta["id_categoria"];
		$_SESSION["dedicacion"]=$resulta["id_dedicacion"];
		$_SESSION["lugar"]=$resulta["id_lugar_labor"];
		$_SESSION["vivienda"]=$resulta["id_vivienda"];
		$_SESSION["direccion"]=$resulta["direccion_habitacion"];

 			
 			
    	}
	
	else
	{		
		$_SESSION["btn"]=0;
			}
echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=gestionarEmpleado.php'>";
}
else {
	
	echo "<script>alert('La persona se encuentra como Beneficiario');</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=ConsultarEmpleado.php'>";
	}


		}
		
		elseif(isset($_POST["registrar"])) {  /*REGISTRAR UN EMPLEADO*/

			
			$cedula=$_SESSION["cedulaEmp"];
			
				$nombre=$_POST["nombres"];
					$apellido=$_POST["apellidos"];
					$direccionHab=$_POST["direccionHabita"];
					$estadoCivil=$_POST["edo"];
					$fecha=$_POST["fecha"];
					$email=$_POST["correo"];
					
					
					$condicion=$_POST["id_condicion"];
					$formacion=$_POST["id_formacion"];
					$categoria=$_POST["id_categoria"];
					$dedicacion=$_POST["id_dedicacion"];
					$labor=$_POST["id_lugar"];
					$vivienda=$_POST["id_vivienda"];		
					$telefono=$_POST["telefono"];			
										
				$insertado=	mysql_query("INSERT INTO persona values('','$cedula',UPPER('$nombre'),UPPER('$apellido'))");

				if($insertado) {
					
					$max0=	mysql_query("select max(id_persona) as id from persona");
					$max=mysql_fetch_array($max0);
					$max1=$max["id"];
					
		
					
				$insertado=	mysql_query("INSERT INTO empleado values('','$email','$fecha','$estadoCivil','$telefono','$max1','$condicion','$formacion','$categoria','$dedicacion','$labor','$vivienda',UPPER('$direccionHab'))");
					
					
					
				if(isset($_FILES["sintesis"]) && $_FILES["sintesis"]["name"]!='')
					{
							
								$tmp_name = $_FILES["sintesis"]["tmp_name"];
									$name = $_FILES["sintesis"]["name"];
		
							$result=mysql_query("SELECT id_empleado as pen from empleado where id_persona=(select id_persona from persona where cedula='$cedula')");
								$data=mysql_fetch_assoc($result);
									$nombrei=($data['pen'])."_".$name;


							$dire="../data/$nombrei";
					move_uploaded_file($tmp_name, $dire);
					
							$tirasql2="INSERT INTO sintesis_curricular VALUES ('', '$dire','$data[pen]')";
					
										
		
									mysql_query($tirasql2);	
										
					
																	
					
							}
					
					
					
					if($insertado) {
					
							echo "<script>alert('Datos insertado correctamente');</script>";
					
					}else {
						
							echo "<script>alert('Datos no insertados');</script>";
						
						
						}
					echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../menu.html'>";
					}
					else{
						echo "<script>alert('Datos no insertados');</script>";
						echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../menu.html'>";
							}

									}
									
									
									
									
									  /*MODIFICAR*/
			
			elseif(isset($_POST["mod"])) {	
			
					
			$cedula=$_SESSION["cedulaEmp"];
			
				$nombre=$_POST["nombres"];
					$apellido=$_POST["apellidos"];
					$direccionHab=$_POST["direccionHabita"];
					$estadoCivil=$_POST["edo"];
					$fecha=$_POST["fecha"];
					$email=$_POST["correo"];
					
					
					$condicion=$_POST["id_condicion"];
					$formacion=$_POST["id_formacion"];
					$categoria=$_POST["id_categoria"];
					$dedicacion=$_POST["id_dedicacion"];
					$labor=$_POST["id_lugar"];
					$vivienda=$_POST["id_vivienda"];		
					 $telefono=$_POST["telefono"];			
			
					$actualiza=	mysql_query("update persona set nombres=UPPER('$nombre'), apellidos=UPPER('$apellido') where cedula='$cedula'");		
					
			if($actualiza) {
										
						
				$act=mysql_query("update empleado set email='$email', fecha_ingreso='$fecha', estado_civil='$estadoCivil', telefono='$telefono',id_condicion_contrato='$condicion',id_formacion='$formacion',id_categoria='$categoria', id_dedicacion='$dedicacion',id_lugar_labor='$labor',id_vivienda='$vivienda', direccion_habitacion=UPPER('$direccionHab') where id_persona=(select id_persona from persona where cedula='$cedula')");							
						
						
		if(isset($_FILES["sintesis"]) && $_FILES["sintesis"]["name"]!='')
					{
							
							
		
	$result=mysql_query("SELECT id_empleado as pen from empleado where id_persona=(select id_persona from persona where cedula='$cedula')");
	$data=mysql_fetch_assoc($result);
	$id_emp=$data['pen'];

		$result=mysql_query("SELECT direccion as dire from sintesis_curricular where id_empleado='$id_emp'");
			$data=mysql_fetch_array($result);
				$dire_vieja=$data['dire'];


							$tmp_name = $_FILES["sintesis"]["tmp_name"];
									$name = $_FILES["sintesis"]["name"];
										$nombrei=$id_emp."_".$name;
											$dire="../data/$nombrei";
											
						
						if($data) 
						$str="update sintesis_curricular set direccion='$dire' where id_empleado = '$id_emp'";	
						else 
						$str="INSERT INTO sintesis_curricular VALUES ('', '$dire','$id_emp')";
										
	$result = mysql_query($str);  
					
				if($result){
					
					if($data)
					  unlink($dire_vieja);
						move_uploaded_file($tmp_name, "$dire ");			
							}
				
				
						
							}	
						
						
						
						
							if($act && $actualiza) {						
								echo "<script>alert('Datos actualizados correctamente');</script>";
								}
						else
									echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../menu.html'>";	
									
									}
					echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../menu.html'>";
					
					
	}		
	
	
					/*ELIMINAR*/
	
	else
	if(isset($_POST["eliminar"])) {
		
				$cedula=$_SESSION["cedulaEmp"];
				$a=mysql_query("delete from persona,empleado where persona.cedula='$cedula' and empleado.id_persona=(select id_persona from persona where cedula='$cedula')");		
		
			if($a) {
				echo "<script>alert('Datos eliminados correctamente');</script>";
				echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../menu.html'>";
				
		}
			}	
			
			
			/*ELIMINAR FOTO*/
			elseif(isset($_POST['borrarsin'])) {
				
				
								$cedula=$_SESSION["cedulaEmp"];
								
						$result=mysql_query("SELECT direccion as dire from sintesis_curricular where id_empleado=(select id_empleado from empleado where id_persona=(select id_persona from persona where cedula='$cedula'))");
							$data=mysql_fetch_array($result);
								$dire_vieja=$data['dire'];


	$result = mysql_query("delete from sintesis_curricular where id_empleado = (select id_empleado from empleado where id_persona=(select id_persona from persona where cedula='$cedula'))");  
					
				if($result){
					
					  unlink($dire_vieja);
				
							}		
								
						echo "<script>alert('Sintesis eliminada correctamente');</script>";
				echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=gestionarEmpleado.php'>";
				
				
			}				
								
								
								
								
?>