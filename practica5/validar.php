<?php
	session_start();
	if(isset($_POST["usuario"],$_POST["pass"]) && $_POST["usuario"]!="" && $_POST["pass"]!=""){
		
		if($_POST["usuario"]=="admin" && $_POST["pass"]="1234"){
			$_SESSION["usuario"]=$_POST["usuario"];
		?>  
			
			<script>
				document.location.href="mostrarDatos.php";
			</script>
		<?php		
		}
		else{
		?> 
			<script>
				alert("Usuario o password invalidos");
				document.location.href="login.php";
			</script>
		<?php
		}

	}
	else{
	?>
		<script>
			alert("No se ha logeado nunca o coloco datos en blanco al ingresar");
			document.location.href="login.php";
		</script>
	<?php
	}

?>
