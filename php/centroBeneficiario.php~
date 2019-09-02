<?php
session_start();
include("BD.php");
conectar();


if(isset($_POST["consultaremp"])){
$cedula=$_POST['cedula'];
$_SESSION["cedulaEmp"]=$cedula;

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
		
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=gestionarBeneficiario.php'>";
 	 	}
	
	else
	{		
		$_SESSION["btn"]=0;
		echo "<script>alert('Empleado no registrado, por favor ingrese sus datos');</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=gestionarEmpleado.php'>";		
		
		
			}

		}
		
		
		
		
		
		
		elseif(isset($_POST["registrar"])) {  /*REGISTRAR UN EMPLEADO*/

			
			$cedula=$_SESSION["cedulaEmp"];
			
				$cedulaBen=$_POST["cedBeneficiario"];
				$nombre=$_POST["nombreBen"];
					$apellido=$_POST["apellidoBen"];
						$fecha=$_POST["fecha"];
						$nivel=$_POST["id_nivel"];
						
						
						$resu=mysql_query("select id_empleado as id from empleado where id_persona=(select id_persona from persona where cedula='$cedula')");
						
						
						if($resu){ $id=mysql_fetch_array($resu); $idEmp=$id['id']; } 
						
						$inser=0;
				if($cedulaBen==$cedula){
					
															/* "holaa es empleado"	;*/

						$inser=mysql_query("INSERT INTO persona values ('',NULL,'$nombre','$apellido')");
						
							

					}
					else {
												
													/* "holaa NO es empleado"	;*/
						
						$inser=mysql_query("INSERT INTO persona values ('','$cedulaBen','$nombre','$apellido')");
						
					
						
						}
				
					
					if($inser) {
						
						
						$id=mysql_query("select max(id_persona) as id from persona");
											
						$id_persona=mysql_fetch_array($id);
						
						
						$insertado=mysql_query("INSERT INTO hijo values('','$fecha','$id_persona[id]','$idEmp','$nivel')");						
						
						
						if($insertado) {
							echo "<script>alert('Beneficiario registrado correctamente');</script>";
							
						}
							else {						
							echo "<script>alert('Beneficiario no registrado');</script>";
							}
								
								
								echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=gestionarBeneficiario.php'>";}
									
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
			
					$actualiza=	mysql_query("update persona set nombres='$nombre', apellidos='$apellido' where cedula='$cedula'");		
					
			if($actualiza) {
										
						
				$act=mysql_query("update empleado set email='$email', fecha_ingreso='$fecha', estado_civil='$estadoCivil', telefono='$telefono',id_condicion_contrato='$condicion',id_formacion='$formacion',id_categoria='$categoria', id_dedicacion='$dedicacion',id_lugar_labor='$labor',id_vivienda='$vivienda', direccion_habitacion='$direccionHab' where id_persona=(select id_persona from persona where cedula='$cedula')");							
						
						
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