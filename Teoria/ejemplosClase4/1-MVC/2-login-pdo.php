<?php

//conection:
$db_host="127.0.0.1";
$db_user="user";
$db_pass="pass";
$db_base="base"; 

try {
	$cn = new PDO("mysql:dbname=$db_base;host=$db_host",$db_user,$db_pass);
	$query = "SELECT * FROM usuarios where nombre='".$_POST["email"]."' and pass='".$_POST["pass"]."';";
	$result=$cn->query($query); 
	
	
	//display information:
	echo "<br>Variables Recibidas:";
	echo"<br>Uusuario: <strong>". $_POST["email"]."</strong>";
	echo"<br>PASS: <strong>". $_POST["pass"]."</strong>";
	

	
	echo "<br> El query que hicimos fue ". $query;

	echo "<br> El n&uacute;mero de resultados fue " . $result->rowCount();
	
	echo "<br> <br>Objeto resultado ";
	print_r($result);
	
	echo "<br> <br>Elementos resultado ";
	
	print_r($result->fetchAll());
	
	}
catch(PDOException $e){
	echo "ERROR". $e->getMessage();
	}



?>
