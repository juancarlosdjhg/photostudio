<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Sistema de Proyectos y Eventos Institucionales</title>
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
		<div class="logo">
			<a href="../Menu.html"><img src="../web/images/logo.png" alt=""></a>
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
				<li><font size="5" color="white" >Sistema </li> <br></font>
				<li><a href="../Menu.html">Inicio</a></li> <font color="orange">|</font>
				<li><a href="about.html">Acerca de</a></li> <font color="orange">|</font>
				<li class="active"><a href="contact.html">Contáctanos</a></li>
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
				<li><a href="../Menu.html">Inicio</a></li> 
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
						<center><h3>Gestionar Empleados</h3>
			    	 		<div class="user-img">
								<img src="../web/images/user.png">
					   		</div>
						</center>
      				</div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
					    <form method="post" action="centroEmpleado.php">
					    
					    <table width="650">
			<tr>
				<td>
					<ul id="tabs">
   					 <li id="uno"><a href="#" title="tab1">Consultar</a></li>
   						 <li id="dos"><a href="#" title="tab2">Catálogo</a></li>
				
								</ul>

						<div id="content">
   					 <div id="tab1">
   					 
   					 
   					 
   					<span><input type="submit" class="submit" name="consultar" value="CONSULTAR"></span>
						    	<span><label>CÉDULA</label></span>
								
						    	<span><input name="cedula" type="text2" pattern="[0-9]{7,8}" title="Solo números" class="cedula" size="30" maxlength="8" required></span>
						   								 	
					    						   	
						   	<span><label>NOMBRES</label></span>
						    	<span><input name="nombres"  type="text" pattern="[a-zA-Z\s]{5,}" title="Solo letras y espacios" class="textbox"  maxlength="50" required disabled="disabled" ></span>
						  
						  		 <span><label>APELLIDOS</label></span>
						    	 <span><input name="apellidos" type="text" disabled="disabled" pattern="[a-zA-Z\s]{5,}" title="Solo letras y espacios" class="textbox" maxlength="50" required></span>
						  
						  		<span><label>TELEFONO</label></span>
						    	<span><input name="telefono" type="text" pattern="[0-9]{11}" disabled="disabled"  title="Solo números" class="textbox" maxlength="11" required></span>
						    
						    <span><label>FECHA INGRESO</label></span>
						    	<span><input name="fecha" type="date" disabled="disabled"   class="textbox"></span>
						 
						  	<span><label>ESTADO CIVIL</label></span>
						    	<span>
									
										<select name="edo" class="textbox" disabled="disabled" > 
										<option value=""> SELECCIONE. </option>
										<option > > CASADO(A). </option>
										<option >> SOLTERO(A). </option>
										<option >> DIVORCIADO(A). </option>
										
									</select>
								</span>
								
								<span><label>CORREO</label></span>
						    	<span><input name="correo" type="text" disabled="disabled"  title="" class="textbox" ></span>
						    
							
					    </div>
					     </form>
    							<div id="tab2">
    					
    								
						    <span><label>DATOS DE TODOS LOS EMPLEADOS</label></span>
						     <span style="width:615px; height: 300px; overflow: auto; padding: 5px">  
						<table  width="600" border="1" id="bgc" >
						<tr><td>
							<label>CÉDULA	</label>				
						
						</td>
						<td>
							<label>NOMBRES Y APELLIDOS	</label>					
						
						</td>
						<td>
							<label>FECHA	</label>					
						
						</td>
							
							<td>
								
						
						</td>
						
								</tr>
								<?php
						
									include("BD.php");
									conectar();
									
									$resu=mysql_query("SELECT persona.cedula,concat (persona.nombres , ' ' ,persona.apellidos) as datos from persona,empleado where persona.id_persona=empleado.id_persona");
						if($resu)
						while($data=mysql_fetch_array($resu)) {
						echo "<tr><td>
							<label>".$data['cedula']."</label>					
						
						</td>
						<td>
							<label>".$data['datos']."</label>					
						
						</td>
						<td>
							<label>FECHA</label>					
						
						</td>
							
							<td>
							<form action='centroEmpleado.php' method='post'>
							<input type='hidden' name='cedula' value='$data[cedula]'>
						<input type='submit' name='consultar' value='VER' />				
						</form>
						</td>
						
								</tr>		";						
							}	?>
								
								
								
								</table>						    
						    
						    </span>
						        							</div>
					    </div>
					    </td></tr></table>
					  
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