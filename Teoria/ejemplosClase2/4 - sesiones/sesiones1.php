<!DOCTYPE html>

<html>

<head>
<meta charset="iso-8859-1">

<?php
  session_start();
  if (isset($_SESSION['contador'])) {
     $_SESSION['contador']++;
  }
  else {
     $_SESSION['contador'] = 0;
  }
  $nombre_anterior = session_name('SESION_CONTADOR');
?>
<TITLE>Trabajando con Sesiones</TITLE> 
 </HEAD>
 <BODY>
	<CENTER>
     <H2>Trabajando con Sesiones </H2>
     <TABLE ALIGN="center" BORDER="1" CELLPADDING="2" CELLSPACING="4">
       <TR ALIGN="center" BGCOLOR="yellow">
          <TD COLSPAN="2">Información de la Sesión</TD>
       </TR>
       <TR>
          <TD BGCOLOR="yellow">ID</TD>
          <TD><?php echo session_id() ?></TD>
       </TR>
       <TR>
          <TD BGCOLOR="yellow">Número de accesos</TD>
          <TD><?php echo $_SESSION['contador'] ?></TD>
       </TR>
       <TR>
          <TD BGCOLOR="yellow">Nombre actual</TD>
          <TD><?php echo session_name() ?></TD>
       </TR>
       <TR>
          <TD BGCOLOR="yellow">Nombre anterior</TD>
          <TD><?php echo $nombre_anterior ?></TD>
       </TR>
      </TABLE>
     <BR><PRE>
       <A HREF="sesiones1.php">Actualizar</A> | <A HREF="sesiones2.php">Resetear contador</A>
       <H2>Mira como funcionan en el servidor</H2>
     </PRE>
   </CENTER>
 </BODY>
</HTML>
