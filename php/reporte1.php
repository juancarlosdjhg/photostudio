<?php session_start();?>
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
						<center><h3>Gestionar Beneficiarios</h3>
			    	 		<div class="user-img">
								<img src="../web/images/user.png">
					   		</div>
						</center>
      				</div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
					    <form method="post" action="centroBeneficiario.php">
					    
					    <table width="650">
			<tr>
				<td>
					<ul id="tabs">
					 <li id="uno"><a href="#" title="tab1" >Reporte Parametrizado Pdf</a></li>
   					 <li id="dos"><a href="#" title="tab2">Reporte General</a></li>
   						
				
								</ul>
</form>
						<div id="content">
   					 <div id="tab1">
   					  <form method="post" action="centroReporte.php" name="reporte" id="cat">
   					 <span style="width:600px; height: 380px; overflow: auto; padding:5px"> 		
    					
							<label >SELECCIONE LO QUE DESEA QUE SE GENERE EN EL REPORTE</label><br><br>
						    
    				<table   >

<tr>
<td>
					<label >CONDICIÓN CONTRATO</label>
						    
					 <span style="width:220px; height: 100px; overflow: auto; padding:5px"> 				
						
								
								
							<table cellpadding="5" id="bgc" border="1"><tr><td><input name="cond[]" type="checkbox" ></td></tr>
								<?php 
								include("BD.php");
								conectar();
								
							$query=mysql_query("select id_condicion_contrato as id,nombre_condicion_contrato  as nom from condicion_contrato");			
								
								if($query)
								while($resultados=mysql_fetch_array($query)){
									$id = $resultados['id'];
									$nom = $resultados['nom'];
									echo '<tr cellpadding="25"><td cellpadding="25"><input name="cond[]" type="checkbox" value="'.$id.'" title="Debe seleccionar al menos una"></td><td>'.$nom.'</td></tr>';
									}	
								
								?>
						    	</table>								
								
								
								</span>    					
    					</td><td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    					<td>
					<label>CATEGORÍA</label>
						    
					 <span style="width:190px; height: 100px; overflow: auto; padding:5px"> 				
						
								
								
							<table cellpadding="5" border="1" id="bgc"> <tr><td></td></tr>
								<?php 
							
								
							$query=mysql_query("select id_categoria AS id,nombre_categoria  as nom from categoria");			
								
								if($query)
								while($resultados=mysql_fetch_array($query)){
									$id = $resultados['id'];
									$nom = $resultados['nom'];
									echo '<tr cellpadding="25"><td cellpadding="25"><input   type="checkbox" name="cate[]" value="'.$id.'" title="Debe seleccionar al menos una"></td><td>'.$nom.'</td></tr>';
									}	
								
								?>
						    	</table>								
								
								
								</span>    					    					
    					  					
    					</td>
    					</tr></table>
    						
    					<hr>
				
				<table  >

<tr>
<td>
				<label>FORMACIÓN</label>
					 <span style="width:220px; height: 100px; overflow: auto; padding:5px"> 				
						
								
								
							<table cellpadding="5" border="1" id="bgc"> <tr><td></td></tr>
								<?php 
							
								
							$query=mysql_query("select id_formacion AS id,nombre_formacion  as nom from formacion_postgrado");			
								
								if($query)
								while($resultados=mysql_fetch_array($query)){
									$id = $resultados['id'];
									$nom = $resultados['nom'];
									echo '<tr cellpadding="25"><td cellpadding="25"><input  type="checkbox" name="forma[]" value="'.$id.'" title="Debe seleccionar al menos una"></td><td>'.$nom.'</td></tr>';
									}	
								
								?>
						    	</table>								
								
								
								</span>  </td>								
								
								<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>
								<label>LUGAR DE LABOR</label>
					 <span style="width:190px; height: 100px; overflow: auto; padding:5px"> 				
						
								
								
							<table cellpadding="5" border="1" id="bgc"> <tr><td></td></tr>
								<?php 
							
								
							$query=mysql_query("select id_lugar_labor AS id,nombre_lugar_labor  as nom from lugar_labor");			
								
								if($query)
								while($resultados=mysql_fetch_array($query)){
									$id = $resultados['id'];
									$nom = $resultados['nom'];
									echo '<tr cellpadding="25"><td cellpadding="25"><input  type="checkbox" name="lugar[]" value="'.$id.'" title="Debe seleccionar al menos una"></td><td>'.$nom.'</td></tr>';
									}	
								
								?>
						    	</table>								
								
								
								</span>  </td></tr>
								</table>  					    
    							
    					<hr>
				
				<table  >

<tr>
<td>
				<label>Vivienda</label>
					 <span style="width:220px; height: 100px; overflow: auto; padding:5px"> 				
						
								
								
							<table cellpadding="5" border="1" id="bgc"> <tr><td></td></tr>
								<?php 
							
								
							$query=mysql_query("select id_vivienda AS id,nombre_vivienda  as nom from vivienda");			
								
								if($query)
								while($resultados=mysql_fetch_array($query)){
									$id = $resultados['id'];
									$nom = $resultados['nom'];
									echo '<tr cellpadding="25"><td cellpadding="25"><input  type="checkbox" name="vivienda[]" value="'.$id.'" title="Debe seleccionar al menos una"></td><td>'.$nom.'</td></tr>';
									}	
								
								?>
						    	</table>								
								
								
								</span>  </td>								
								
								<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>
								<label>Dedicación</label>
					 <span style="width:190px; height: 100px; overflow: auto; padding:5px"> 				
						
								
								
							<table cellpadding="5" border="1" id="bgc"> <tr><td></td></tr>
								<?php 
							
								
							$query=mysql_query("select id_dedicacion AS id,nombre_dedicacion  as nom from dedicacion");			
								
								if($query)
								while($resultados=mysql_fetch_array($query)){
									$id = $resultados['id'];
									$nom = $resultados['nom'];
									echo '<tr cellpadding="25"><td cellpadding="25"><input  type="checkbox" name="dedica[]" value="'.$id.'" title="Debe seleccionar al menos una"></td><td>'.$nom.'</td></tr>';
									}	
								
								?>
						    	</table>								
								
								
								</span>  </td></tr>
								</table>
	<hr>
								<table width="40%">


								<tr><td>	<label>Ordenar Por</label>
    					 <select name="oby" class="textbox" >
							<option value="seleccione">Seleccione</option>
							<option value="id">Cédula</option>
							<option value="id_condicion_contrato">Condición de Trabajo</option> 
							<option value="id_categoria">Categoría </option> 
							<option value="id_formacion">Formación</option> 
							<option value="nombre_lugar_labor">Lugar de Trabajo</option>     
							<option value="id_vivienda">Vivienda</option>  					
    					
    					</select></td>
    					    					</tr>
								</table>  					    
				  			
    					
						       	</span>		

										        	
						        	
						   	<input type="submit" value="GENERAR PDF" id="pdf" name="reportepara">	
					  </form>
					    		     	
					    </div>
					    	
					    <div id="tab2">
    					
						        	En Construcción
						        					</div>
						        					
					    </div>
					    </td></tr>
					    </table>
					    
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
<?php 

if($_SESSION['parametrizado']==true || $_SESSION['parametrizado']==1) {
	
echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../dompdf/rep_param.php'>";
$_SESSION['parametrizado']=false;

}

?>