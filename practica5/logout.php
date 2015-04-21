<?php
	
	session_start();
	session_unset();
	
	
	setcookie("usuario","",time()-365*24*60*60);
	if(ini_get("session.use_cookies")){
		$parametros=session_get_cookie_params(); 
		setcookie(session_name(),"",time()-365*24*60*60,$parametros["path"],$parametros["domain"],$parametros["secure"],$parametros["domain"],$parametros["http-only"]);
		
	}

	
	session_destroy();
?>
<script>
	document.location.href="login.php";
</script>
