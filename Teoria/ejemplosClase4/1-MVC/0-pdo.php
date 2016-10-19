<?php

$usuario=$_REQUEST["nombre"];
try {
	$cn = new PDO("mysql:dbname=base;host=localhost","user","pass");
	$query = $cn->prepare("SELECT * FROM usuarios WHERE nombre=?");
	$query->execute(array($usuario)); 
	echo "<fieldset><legend>Resultado de la consulta:</legend> "; 
	while($row = $query->fetch())
	{
		
		echo "El apellido de ". $row['nombre']. " es ".$row['apellido'] ; 
	}
	echo "</fieldset>";
	}
catch(PDOException $e){
	echo "ERROR". $e->getMessage();
	}

echo "<fieldset><legend>GET,POST,REQUEST y COOKIE:</legend> "; 

echo "<br>Esta es la get: ";
print_r($_GET);
echo "<br>Esta es el post: ";
print_r($_POST);
echo "<br>Este es el request: ";
print_r($_REQUEST);
echo "<br>Esta es la cookie: ";
print_r($_COOKIE);

echo "</fieldset>";
echo "<fieldset><legend>Este es el SERVER:</legend> ";
print_r($_SERVER);
echo "</fieldset>";

?>
