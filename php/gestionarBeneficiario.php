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
        $("#tabs li:first").attr("id","current");
        $("#content div:first").fadeIn();

    $('#tabs a').click(function(e) {
        e.preventDefault();
        $("#content div").hide();
        $("#tabs li").attr("id","");
        $(this).parent().attr("id","current");
        $('#' + $(this).attr('title')).fadeIn();
    });
})();
</script>




<script type="text/javascript" src="ajaxpro/jquery-11.js">

</script>
  <script type="text/javascript">
  $(document).ready(function(){
   $("#codigo").bind('keyup', function (e) {
	var key = e.keyCode || e.which;
  		if (key === 13) {
  			
	 $.ajax({
	  type: "POST",
	  url: "ajaxpro/datos2.php",
	  data: "documento="+$("#codigo").val(),
	  dataType: "json",
	  success: function(a, aStatus, aJqX){
		 
			if(a==1){
				alert('Ya se encuentra registrado');	
				
				 $("#ced").val("");
				  $("#cedBeneficiario").val("");
				 $("#ape").attr('disabled', 'disabled');
				 $("#nom").attr('disabled', 'disabled');
				 $("#fech").attr('disabled', 'disabled');
				 $("#registrar").attr('disabled', 'disabled');
	  	 			$("#ape").val("");
	  	 			 $("#fech").val("");
						$("#nom").val("");	
				
				}		 
		 else
		 if(a==0 &&  $("#codigo").val()==""){
		 	
		 			$("#ced").val(<?php echo $cedula;?>);
		 			$("#cedBeneficiario").val(<?php echo $cedula;?>);
		 			$("#codigo").val("");
		 		$("#ape").removeAttr("disabled");
		 			$("#nom").removeAttr("disabled");
						$("#fech").removeAttr("disabled");
	  				 $("#ape").val("");
	  				  $("#fech").val("");
						$("#nom").val("");
						$("#registrar").removeAttr("disabled");
					}
					else
					 if(a==0){
					 	$("#ced").val($("#codigo").val());
							$("#cedBeneficiario").val($("#codigo").val());
				 	$("#codigo").val("");
		 				$("#ape").removeAttr("disabled");
		 			$("#nom").removeAttr("disabled");
	  					$("#ape").val("");
	  					 $("#fech").val("");
							$("#nom").val("");
								$("#fech").removeAttr("disabled");
										$("#registrar").removeAttr("disabled");
					}
					
										
					
		  }
		
	  })
	 } })
   });
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
						<center><h3>REGISTRO DE BENEFICIARIOS</h3>
			    	 		<div class="user-img">
								<img src="../web/images/user.png">
					   		</div>
						</center>
      				</div>
				</div>		
						
				<div class="contact_right">
				
				  <div class="contact-form">
				 
				  <table width="650">
			<tr>
				<td>
					<ul id="tabs">
   					 <li><a href="#" title="tab1">Datos</a></li>
   						 <li><a href="#" title="tab2">Beneficiarios</a></li>
					 <li><a href="#" title="tab3">Catálogo</a></li>
								</ul>

						<div id="content">
   					 <div id="tab1">
						    	<span><label>CÉDULA</label></span>
						    	<span><input  type="text" class="cedulaemp" size="30" value="<?php echo $cedula?>" maxlength="8" disabled="disabled" required>
								<input name="cedulaemp" type="hidden" class="cedula" value="<?php echo $cedula ;?>" size="30" maxlength="8" required></span>
						   	
						   	<span><label>NOMBRES</label></span>
						    	<span><input name="nombresemp"  type="text" disabled="disabled" pattern="[a-zA-Z\s]{5,}" title="Solo letras y espacios" class="textbox"  maxlength="50" required value="<?php if($btn==1)echo $_SESSION['nombres']; ?>"></span>
						  
						  		 <span><label>APELLIDOS</label></span>
						    	 <span><input name="apellidosemp" type="text" disabled="disabled" value="<?php if($btn==1)echo $_SESSION['apellidos']; ?>" pattern="[a-zA-Z\s]{5,}" title="Solo letras y espacios" class="textbox" maxlength="50" required></span>
						  
						  		<span><label>TELEFONO</label></span>
						    	<span><input name="telefono" type="text" disabled="disabled" pattern="[0-9]{11}" value="<?php if($btn==1)echo $_SESSION['telefono']; ?>" title="Solo números" class="textbox" maxlength="11" required></span>
						    
						    <span><label>FECHA INGRESO</label></span>
						    	<span><input name="fecha" type="date"  disabled="disabled" value="<?php if($btn==1)echo $_SESSION['fecha']; ?>"  class="textbox"></span>
						 
						  	<span><label>ESTADO CIVIL</label></span>
						    	<span>
									
										<select name="edo" class="textbox" disabled="disabled"> 
										<option value=""> SELECCIONE. </option>
										<option <?php if($btn==1)if($_SESSION['edo']=='CASADO(A).')echo 'selected'; ?> > CASADO(A). </option>
										<option <?php if($btn==1)if($_SESSION['edo']=='SOLTERO(A).')echo 'selected'; ?>> SOLTERO(A). </option>
										<option <?php if($btn==1)if($_SESSION['edo']=='DIVORCIADO(A).')echo 'selected'; ?>> DIVORCIADO(A). </option>
										
									</select>
								</span>
								
								<span><label>CORREO</label></span>
						    	<span><input name="correo" disabled="disabled" type="text" value="<?php if($btn==1)echo $_SESSION['correo']; ?>"  title="" class="textbox" ></span>
						    
						   </div>
    						
													<div id="tab2">
										<span><label>CONSULTA LA CÉDULA</label></span>
						    	<span><input  type="text" id='codigo' name="ceee" class="cedulaBen" size="30" maxlength="8" >
						    	</span>
						    			<hr>	
								 <form method="post" name="contactf" enctype="multipart/form-data" action="centroBeneficiario.php">
									<span><label>CÉDULA</label></span>
						    	<span><input  type="text" class="ced" id='ced' size="30" maxlength="8"  required disabled="disabled">
								</span>
							<span><input  type="hidden" name="cedBeneficiario" class="ced" id='cedBeneficiario' size="30" maxlength="8" >
								</span>
						   	<span><input  type="hidden" disabled name='cedulaBen' id='cedulaBen'class="cedulaBen" size="30" maxlength="8"  required>
						    	</span>
						   	<span><label>NOMBRES</label></span>
						    	<span><input name="nombreBen"  onkeyup='this.value=this.value.toUpperCase();' id='nom' disabled type="text" pattern="[a-zA-Z\s]{5,}" title="Solo letras y espacios" class="textbox"  maxlength="50" required ></span>
						  
						  		 <span><label>APELLIDOS</label></span>
						    	 <span><input name="apellidoBen" id='ape' onkeyup='this.value=this.value.toUpperCase();' disabled type="text" pattern="[a-zA-Z\s]{5,}" title="Solo letras y espacios" class="textbox" maxlength="50" required></span>
						  
						  		
						    <span><label>FECHA NACIMIENTO</label></span>
						    
						   	<span><input name="fecha" disabled  id="fech" type="date" class="textbox" required></span>
						   	
						   	
						   	<span><label>NIVEL DE ESTUDIO</label></span>
						    	<span>
									
										<select name="id_nivel" class="textbox" > 
											<?php 
										
										$resu=mysql_query("select id_nivel_estudio AS id,nombre_nivel_estudio  as nom from nivel_estudio");			
										
								if($resu) {	
									while($data=mysql_fetch_array($resu)) {						
										
										echo "<option value=$data[id]>$data[nom]</option>";
											}
												}
										?>
									</select>
								</span>
						   	
						 	<span><input type="reset" value="LIMPIAR"></span>
						 		<?php	
						   
						   	echo "<span><input type='submit' id ='registrar' disabled name='registrar' value='REGISTRAR' onclick=''></span>";
								
							?>
							
								
						    </div>	
						      </form>
						    
    							<div id="tab3">
    					
    								
						    <span><label>DATOS DE TODOS SUS BENEFICIARIOS</label></span>
						   <span style="width:615px; height: 300px; overflow: auto; padding: 5px" id="bgc">  
						<table  width="600" border="1" >
						<tr><td>
							<label>CÉDULA	</label>			
						
						</td>
						<td>
							<label>NOMBRES Y APELLIDOS	</label>			
						
						</td>
						<td>
							<label>FECHA NACIMIENTO	</label>				
						
						</td>
							
							<td>
								
						
						</td>
						
								</tr>
								 
    				<?php
						
									$resu=mysql_query("SELECT persona.id_persona,hijo.fecha_nacimiento as fecha,persona.cedula,concat (persona.nombres , ' ' ,persona.apellidos) as datos from persona,hijo where persona.id_persona=hijo.id_persona and hijo.id_empleado=(select id_empleado from empleado where id_persona=(select id_persona from persona where cedula='$cedula'))");
						if($resu)
						while($data=mysql_fetch_array($resu)) {
						echo "<tr><td>
							<label>".$data['cedula']."</label>					
						
						</td>
						<td>
							<label>".$data['datos']."</label>				
						
						</td>
						<td>
						<label>".$data['fecha']."</label>				
						
						</td>
							
							<td>
							<form action='#' method='post'>
							<input type='hidden' name='cedula' value='$data[id_persona]'>
						<input type='submit' name='consultar' value='VER' />				
						</form>
						</td>
						
								</tr>		";						
							}	?>
								
								
								
  
				
								</table>						    
						     </span>
						    
						        							</div>
    							   							
						    	</div>
									</td>
									</tr>
									<tr><td>					<div>
						   	
						   
							</div></td></tr>
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
