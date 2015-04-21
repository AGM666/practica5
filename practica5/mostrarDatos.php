<?php
	session_start();
	if(isset($_SESSION["usuario"])&& $_SESSION["usuario"]!=""){
		//isset es una función sobrecargada que permite recibir multiples parámetros para evitar hacer validaciones valor por valor y unirlo con operadores lógicos
	?>
		<html>
		<head>
			<meta charset="UTF-8"/>
		</head>
		<body>
			<h2 style="color:blue">Bienvenido</h2>
			<a href="logout.php" target="_self" style="color:gray" >SALIR</a><br/><br/><br/>

			<form method="post" action="mostrarDatos.php">
		
		<label for="Name"> Nombre  </label><br/>
        <input type="text" id="nombre" name="nombre"><br/>
        <label for="Name"> Telefono</label><br/>
        <input type="text" id="telefono" name="telefono"><br/>
        <label for="Name"> Celular </label><br/>
        <input type="text" id="celular" name="celular"><br/>
        <label for="Name"> Email   </label><br/>
        <input type="text" id="email" name="email"><br/>


		<input type="submit" name="insertar" value="Insertar"><br/><br/>
		<input type="submit" name="mostrar" value="Mostrar"><br/>

	</form>
		</body>

		</html>
		<?php

		

if(isset($_REQUEST['mostrar'])){
	$conexion = mysql_connect("localhost","root","manson666") or die (mysql_error());	
	$db = mysql_select_db("cutonala",$conexion);

	$query="select * from alumnos";
	$resultado=mysql_query($query,$conexion);

	$total=mysql_num_rows($resultado);

	echo"<table border='1'><tr><td>ID</td><td>NOMBRE</td><td>TELEFONO</td><td>CELULAR</td><td>EMAIL</td></tr>";

	
	while($dato=mysql_fetch_array($resultado)){
		echo "<tr>";
		echo "<td>".$dato['ID']."</td>";
		echo "<td>".$dato['nombre']."</td>";
		echo "<td>".$dato['telefono']."</td>";
		echo "<td>".$dato['celular']."</td>";
		echo "<td>".$dato['email']."</td>";
        echo "</tr>";




	}
	echo "</table>";
	echo "Total de personas registradas : $total";
}
if(isset($_REQUEST['insertar'])){
	$conexion = mysql_connect("localhost","root","manson666") or die (mysql_error());	
	$db = mysql_select_db("cutonala",$conexion);
    $status = "";
if (isset($_POST["nombre"])) {
	
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    // Creamos la consulta 
    $sql = "INSERT INTO alumnos (nombre, telefono, celular, email) ";
    $sql.= "VALUES ('".$nombre."', '".$telefono."', '".$celular."','".$email."')";
    // enviamos la consulta
    mysql_query($sql, $conexion);
    $status = "ok";
}
}
?>
	<?php
	}	
	else{
	?>
		<script>
			alert("No se ha logeado nunca");
			document.location.href="login.php";
		</script>
	<?php
	}

?>



