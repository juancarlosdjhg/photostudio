<?php
include("BD.php");
conectar();

$sql=mysql_query("UPDATE datos_personales SET nombres='".$_POST['nombres']."', apellidos='".$_POST['apellidos']."' , telefono='".$_POST['telefono']."' where cedula='".$_POST['cedula']."'");

$sql1=mysql_query("UPDATE empleado SET id_cargo='".$_POST['id_cargo']."' where id_datos_personales=(select id_datos_personales from datos_personales where cedula='".$_POST['cedula']."')");

$sql2=mysql_query("UPDATE pnf_persona SET id_pnf='".$_POST['pnf']."' where id_datos_personales=(select id_datos_personales from datos_personales where cedula='".$_POST['cedula']."')");


echo "<script> alert('Datos modificados exitosamente.'); </script>";

echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../Menu.html'>";
?>