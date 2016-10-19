<?php 
	
	/* 'r'	Sólo lectura
	* 'r+'	Lectura y escritura
	* 'w'	Sólo escritura
	* 'w+'	Lectura y escritura. Suprime el contenido anterior si se escribe. El archivo es creado si no existe.
	* 'a'	Sólo escritura. El archivo es creado si no existe y el puntero se coloca al final.
	* 'a+'	Lectura y escritura. El archivo es creado si no existe y el puntero se coloca al final.
	*/
function contador(){
	$archivo = "contador.txt";
	$contador = 0;
	$id = fopen ( $archivo, "r" );//abrimos el archivo
	$contador=fgets($id,26);//leemos 10 caracteres del archivo y los almacenamos en contador
	fclose($archivo);//cerramos
	//incrementamos el contador previemante obtenido del archivo
	$contador++;
	 
	$id=fopen($archivo, "w+");//abrimos el archivo modo escritura, ver arriba. Hay que darle permisos en caso de que no ande, a others
// 	chmod($archivo, 0755);
	fwrite($id, $contador, 26);
	fclose($archivo);
	return $contador;
}

?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Ejercicio 1 - Pr&aacute;ctica 3</title>
	</head>
	<body>
		<h1>Bienvenido visitante n&uacute;mero <?php  echo contador()?></h1>	
	</body>

	</html>