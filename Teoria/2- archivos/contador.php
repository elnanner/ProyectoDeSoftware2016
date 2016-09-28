<!DOCTYPE html>
<html>
<head></head>
<body>
	<h1> En este ejemplo leeremos el contenido del archivo contador.txt, lo mostramos al usuario y lo incrementaremos en 1</h1>
	<h2> Tener en cuenta los permisos del archivo.... </h2>
<?php
$archi="contador.txt";
if (file_exists($archi)){
	$fcont=fopen($archi, "r+");
	$linea=fread($fcont, filesize($archi));
	fclose($fcont);
};

$fcont=fopen($archi,"w");
$cont=(int)$linea +1;
$linea=fwrite($fcont,$cont);
echo "<h3>Ud. es el visitante numero  $cont</h3>";
fclose($fcont);
?>
</body>
</html>
