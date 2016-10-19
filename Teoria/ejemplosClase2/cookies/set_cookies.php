<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">

<?php
	if (!isset($_COOKIE["ultimaVisita"])) {
	setCookie("ultimaVisita", time() );
	$mensaje = "Bienvenido a mi sitio.....";
	}
	else
	$mensaje = "Hola nuevamente......";
?>

   <TITLE>Cookies</TITLE>
 </HEAD>
 <BODY>
	<H1>Este es un ejemplo de cookies - Miremos como cambia en el browser</H1>
	<P>
	<?php
	echo "$mensaje";
	?>	
	</P>	
 </BODY>
</HTML>
