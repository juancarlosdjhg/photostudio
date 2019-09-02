<?php 
include("BD.php");
conectar();

$userID=$_POST['userID'];
$userPass=$_POST['userPass'];

$tirasql= "SELECT * FROM usuario WHERE nombre_usuario='".$userID."' AND clave='".$userPass."' ";
$query = mysql_query($tirasql);
$resultados = mysql_num_rows($query);

if ($resultados==0) {
	echo "<script> alert('Usuario y/o Contraseña Incorrecta')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../index.html'>";
}

else { 
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../Menu.html'>";
	}


?>