<?php

function conectar(){
	
	$conexion = mysql_connect("localhost","root","manson666") or die (mysql_error());	
	$db = mysql_select_db("cutonala",$conexion);
	

	if($conexion->connect_error){

		echo "no conectado";

	}else{
		echo "conectado";
	}

	



}
?>

