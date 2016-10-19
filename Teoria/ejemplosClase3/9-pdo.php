<?php

$usuario=$_GET["id"];
try {
	$cn = new PDO("mysql:dbname=base;host=localhost","user","pass");
	$query = $cn->prepare("SELECT * FROM usuarios WHERE id=?");
	$query->execute(array($usuario)); 
	while($row = $query->fetch())
	{ 
		print_r($row); 
	}
	}
catch(PDOException $e){
	echo "ERROR". $e->getMessage();
	}
	$cn=null;
?>
