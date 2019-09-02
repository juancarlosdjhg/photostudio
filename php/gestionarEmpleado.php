<?php
include("BD.php");
conectar();
session_start();

/*
if(isset($_SESSION["cedulaEmp"])==FALSE || $_SESSION["cedulaEmp"]!=1){


	echo "<script> alert('consulta el empleado')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=menu.html'>";
			


}*/


$cedula=$_SESSION["cedulaEmp"];
$btn=$_SESSION["btn"];
	?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Sistema de Información</title>
<link rel="icon" type="image/png" href="../web/images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../web/js/check.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="../web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="../web/js/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="../web/css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="../web/css/JFFormStyle-1.css" />
		<script type="text/javascript" src="../web/js/JFCore.js"></script>
		<script type="text/javascript" src="../web/js/JFForms.js"></script>
		<script type="text/javascript" src="../web/nicEdit.js"></script> 
		<script type="text/javascript">
			(function() {
				JC.init({
					domainKey: ''
				});
				})();
		</script>
<!--nav-->
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>


<link href="tab/css/styles.css" rel="stylesheet" type="text/css" media="all"/>
<script src="tab/js/jquery-1.6.3.min.js"></script>
<script>
$(document).ready(function() {
        $("#content div").hide();
       $("#uno").attr("id","current");
        $("#tab1").fadeIn();
        
    $('#tabs a').click(function(e) {
        e.preventDefault();
        $("#content div").hide();
        $("#tabs li").attr("id","");
        $(this).parent().attr("id","current");
        $('#' + $(this).attr('title')).fadeIn();
    });
    
    
    
})();
</script>



</head>


<body>

<div class="cintillo">
<center><img id="cintillo" height="55px" width="1000px" src="../web/images/cintillo.png"></center>
</div>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
	
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
				<li><font size="5" color="white" >Sistema de Información</li> <br></font>
				<li><a href="../Menu.html">Inicio</a></li> <font color="orange">|</font>
				<li><a href="about.html">Acerca de</a></li> <font color="orange">|</font>
				<li ><a href="contact.html">Contáctanos</a></li>
				<div class="clear"></div>
			</ul>
			<!-- start profile_details -->
					<form class="style-1 drp_dwn">
						<div class="row">
							<div class="grid_3 columns">
							</div>		
						</div>		
					</form>
		</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li><a href="index.html">Inicio</a></li> 
				<li><a href="about.html">Acerca de</a></li> 
				<li><a href="gallery.html">Galeria de fotos</a></li> 
				<li><a href="activities.html">Noticias & Eventos</a></li> 
				<li class="active"><a href="contact.html">Contáctanos</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
	</div>
</div>
</div>
<!--start main -->

<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="contact">				
				<div class="contact_left">
					<div class="contact_info">
						<center><h3>Gestionar Empleado</h3>
			    	 		<div class="user-img">
								<img src="../web/images/user.png">
					   		</div>
						</center>
      				</div>
				</div>		
						
				<div class="contact_right">
				
				  <div class="contact-form">
				  <form method="post" name="contactf" enctype="multipart/form-data" action="centroEmpleado.php">
				  <table width="650">
			<tr>
				<td>
					<ul id="tabs">
   					 <li id="uno"><a href="#" title="tab1">Paso 1</a></li>
   						 <li id="dos"><a href="#" title="tab2">Paso 2</a></li>
					 <li id="tres"><a href="#" title="tab3">Paso 3</a></li>
								</ul>

						<div id="content">
   					 <div id="tab1">
						    	<span><label>CÉDULA</label></span>
						    	<span><input  type="text" class="cedula" size="30" value="<?php echo $cedula?>" maxlength="8" disabled="disabled" required>
								<input name="cedula" type="hidden" class="cedula" value="<?php echo $cedula ;?>" size="30" maxlength="8" required></span>
						   	
						   	<span><label>NOMBRES</label></span>
						    	<span><input name="nombres" onkeyup='this.value=this.value.toUpperCase();' type="text" pattern="[a-zA-Z\s]{5,}" title="Solo letras y espacios" class="textbox"  maxlength="50" required value="<?php if($btn==1)echo $_SESSION['nombres']; ?>"></span>
						  
						  		 <span><label>APELLIDOS</label></span>
						    	 <span><input name="apellidos" type="text" onkeyup='this.value=this.value.toUpperCase();' value="<?php if($btn==1)echo $_SESSION['apellidos']; ?>" pattern="[a-zA-Z\s]{5,}" title="Solo letras y espacios" class="textbox" maxlength="50" required></span>
						  
						  		<span><label>TELEFONO</label></span>
						    	<span><input name="telefono" type="text" pattern="[0-9]{11}" value="<?php if($btn==1)echo $_SESSION['telefono']; ?>" title="Solo números" class="textbox" maxlength="11" required></span>
						    
						    <span><label>FECHA INGRESO</label></span>
						    	<span><input name="fecha" type="date"  value="<?php if($btn==1)echo $_SESSION['fecha']; ?>"  class="textbox"></span>
						 
						  	<span><label>ESTADO CIVIL</label></span>
						    	<span>
									
										<select name="edo" class="textbox" > 
										<option value=""> SELECCIONE. </option>
										<option <?php if($btn==1)if($_SESSION['edo']=='CASADO(A).')echo 'selected'; ?> > CASADO(A). </option>
										<option <?php if($btn==1)if($_SESSION['edo']=='SOLTERO(A).')echo 'selected'; ?>> SOLTERO(A). </option>
										<option <?php if($btn==1)if($_SESSION['edo']=='DIVORCIADO(A).')echo 'selected'; ?>> DIVORCIADO(A). </option>
										
									</select>
								</span>
								
								<span><label>CORREO</label></span>
						    	<span><input name="correo" type="text" value="<?php if($btn==1)echo $_SESSION['correo']; ?>"  title="" class="textbox" ></span>
						    
						   </div>
    						
													<div id="tab2">
							
						    	<span><label>CONDICIÓN CONTRATO</label></span>
						    	<span>
									
								<select name="id_condicion" class="textbox">
								


										<?php 
										
										$resu=mysql_query("select id_condicion_contrato AS id,nombre_condicion_contrato  as nom from condicion_contrato");			
										
		if($resu) {	
			while($data=mysql_fetch_array($resu)) {	
				
					if($data['id']==$_SESSION['condicion'] && $btn==1)
			
							echo "<option value=$data[id] selected >$data[nom]</option>";
							
							else
								echo "<option value=$data[id]>$data[nom]</option>";	 
										}
										}
										?>
									</select>
								</span>
								
									<span><label>FORMACIÓN</label></span>
						    	<span>
									
										<select name="id_formacion" class="textbox"> 
										<?php 
										
										$resu=mysql_query("select id_formacion AS id,nombre_formacion  as nom from formacion_postgrado");			
										
										if($resu) {	
												
										while($data=mysql_fetch_array($resu)) {						
									if($data['id']==$_SESSION['formacion'] && $btn==1)
			
									echo "<option value=$data[id] selected >$data[nom]</option>";
							
									else
										echo "<option value=$data[id]>$data[nom]</option>";
										}
										}
										?>
									</select>
								</span>
								
								<span><label>CATEGORÍA</label></span>
						    	<span>
									
										<select name="id_categoria" class="textbox" > 
										<?php 
										
										$resu=mysql_query("select id_categoria AS id,nombre_categoria  as nom from categoria");			
										
								if($resu) {	
										
											
								  while($data=mysql_fetch_array($resu)) {						
										if($data['id']==$_SESSION['categoria'] && $btn==1)
			
										echo "<option value=$data[id] selected >$data[nom]</option>";
							
											else
												echo "<option value=$data[id]>$data[nom]</option>";
												}
										}
										?>
									</select>
								</span>
								
								
								<span><label>DEDICACIÓN</label></span>
						    	<span>
									
										<select name="id_dedicacion" class="textbox" > 
										<?php 
										
										$resu=mysql_query("select id_dedicacion AS id,nombre_dedicacion  as nom from dedicacion");			
										
							if($resu) {	
								while($data=mysql_fetch_array($resu)) {						
									if($data['id']==$_SESSION['dedicacion'] && $btn==1)
			
										echo "<option value=$data[id] selected >$data[nom]</option>";
							
										else
											echo "<option value=$data[id]>$data[nom]</option>";
										}
										}
										?>
									</select>
								</span>
								
								
								<span><label>LUGAR DE LABOR</label></span>
						    	<span>
									
										<select name="id_lugar" class="textbox" > 
											<?php 
										
				$resu=mysql_query("select id_lugar_labor AS id,nombre_lugar_labor  as nom from lugar_labor");			
										
					if($resu) {	
						while($data=mysql_fetch_array($resu)) {						
							if($data['id']==$_SESSION['lugar'] && $btn==1)
			
								echo "<option value=$data[id] selected >$data[nom]</option>";
							
								else
									echo "<option value=$data[id]>$data[nom]</option>";
										}
										}
										?>
									</select>
								</span>
								
									<span><label>VIVIENDA</label></span>
						    	<span>
									
										<select name="id_vivienda" class="textbox" > 
											<?php 
									
										$resu=mysql_query("select id_vivienda AS id,nombre_vivienda  as nom from vivienda");			
										
								if($resu) {	
									while($data=mysql_fetch_array($resu)) {						
										if($data['id']==$_SESSION['vivienda'] && $btn==1)
			
										echo "<option value=$data[id] selected >$data[nom]</option>";
							
									else
										echo "<option value=$data[id]>$data[nom]</option>";
											}
												}
										?>
									</select>
								</span>
						    </div>	
						    
    							<div id="tab3">
    							<span><label>DIRECCIÓN DE HABITACIÓN</label></span>
						    	<span><input name="direccionHabita"   onkeyup='this.value=this.value.toUpperCase();' value="<?php if($btn==1)echo $_SESSION['direccion']; ?>"  type="text" title="" class="textbox" ></span>
						    	
									<span><label>SINTESIS CURRICULAR</label></span>
									
									
														
							<?php
							if($btn==1){
					$archivos=mysql_query("select id_sintesis,direccion as direccion from sintesis_curricular where id_empleado=(select id_empleado from empleado where id_persona=(select id_persona from persona where cedula='$cedula'))");
								if($archivos) 							
								while ($data=mysql_fetch_array($archivos)){
						

							echo "
							<form method='post' action='centroEmpleado.php'>							
													<input type='hidden' name='valor' value='$data[id_sintesis]'>		
								<img height='80' width='80' src='../web/images/pdf.png'/>
								<input type='submit' name='borrarsin' value='BORRAR'>
							</form>
										";

						 }}
						 ?>									
									
								<span>
									
										<input type="file"   name="sintesis" >
								</span>
    							
									<span><label>ARCHIVO 2</label></span>
						    	<span>
			
										<input type="file" name="archivo" >
										
								</span>    							
    							
						   		<span><input type="reset" value="BORRAR"></span>
						   	<?php	
						   	if($btn==0) {
						   	echo "<span><input type='submit' name='registrar' value='REGISTRAR' onclick=''></span>";
										}
										elseif($btn==1) {
									echo "<span><input type='submit' name='eliminar' value='ELIMINAR' onclick=''></span>
									<span><input type='submit' name='mod' value='MODIFICAR' onclick=''></span>
									 ";
								
										}
							?>
							
								
						
    							</div>
    							   							
						    	</div>
						    	
									</td>
									</tr>						</table>
										
								
					    </form>
				    </div>
  				</div>		
  				<div class="clear"></div>		
		  </div>
	</div>
</div>
</div>		
<!--start main -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
			</div>
			<div class="soc_icons">
				
			</div>
			<div class="clear"></div>
</div>
</div>
</div>		
</body>
</html>
