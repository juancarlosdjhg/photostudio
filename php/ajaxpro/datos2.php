<?php
//Datos de conexión
include('../BD.php');
conectar();

// defino una clase que voy a utilizar para generar los elementos que voy a devolver
// como respuesta
class ElementosDevolver {
   var $nombre;
   var $apellido;
 var $total;
   
   function __construct($nombre, $apellido,$total){
      $this->nombre = $nombre;
      $this->apellido = $apellido;
	$this->total=$total;
   }
}

$doc = $_POST['documento'];

$sql = mysql_query("SELECT *  FROM persona WHERE cedula='$doc'");
$sql=mysql_fetch_array($sql);

if($sql)
$encontrado=1;
else 
$encontrado=0;
echo $retorno = json_encode($encontrado);



?>
