<!DOCTYPE html>
<HTML>
 <HEAD>
   <TITLE>Trabajando con include</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
	<H2>Inclusión de Archivos include_once</H2>
     <?php
		include_once("cabecera.inc");
		$base=2;
		$exponente=3;
		include_once("cuerpo.inc");
		echo "<br>Primera inclusión del 'cuerpo.inc'<hr width='40%'>";
		$base=7;
		$exponente=5;
		include_once("cuerpo.inc");
		echo "<br>Segunda inclusión del 'cuerpo.inc'<hr width='40%'>";
		$base=9;
		$exponente=7;
		include_once("cuerpo.inc");
		echo "<br>Tercera inclusión del 'cuerpo.inc'<hr width='40%'>";
		include_once("pie.inc")
       
     ?>
   </CENTER>
 </BODY>
</HTML>
