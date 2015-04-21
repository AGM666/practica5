<?php
	session_start();
	if(isset($_SESSION["usuario"]) && $_SESSION["usuario"]!=""){
		
	?>
		<script>
			
			document.location.href="mostrarDatos.php";
		</script>
	<?php
	}
	
?>
<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
	<form action="validar.php" method="POST" name="login">	
		<label>Usuario</label>
		<input type="text" name="usuario"/><br/>
		
		<label>Contraseña</label>
		<input type="password" name="pass"/><br/>
		<input type="submit" value="Ingresar" name="ingresar"/>
	</form>

</body>

</html>
