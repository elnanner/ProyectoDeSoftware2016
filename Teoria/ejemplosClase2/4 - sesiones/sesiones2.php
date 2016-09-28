<!DOCTYPE html>

<html>

<head>
<meta charset="iso-8859-1">

<?php
  session_start();
  unset($_SESSION['contador']);
?>
   <TITLE>Trabajando con Sesiones</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Trabajando con Sesiones</H2><BR><BR>
     <P>Variable <B>'contador'</B> actualizada<BR>
        de la sesión <B><?php echo session_id() ?></B><BR>
        con nombre <B><?php echo session_name() ?></B>
        <BR><BR><A HREF="sesiones1.php">volver</A></P>
   </CENTER>
 </BODY>
</HTML>
