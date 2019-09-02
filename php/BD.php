<?php 
function conectar(){
$bd=mysql_connect("localhost","root","") or die ("No se conecto");
mysql_select_db("sindicato",$bd) or die ("No existe la bd");

}

/*
$user = 'postgres';
$passwd = 'yeizi';
$db = 'SIBISO';
$port = 5432;
$host = 'localhost';
$strCnx = " user=$user password=$passwd port=$port dbname=$db host=$host";
pg_connect($connection_string);
$cnx = pg_connect($strCnx) or die ("Error de conexion.");
echo "Conexion exitosa <hr>"; 	
	*/

?>