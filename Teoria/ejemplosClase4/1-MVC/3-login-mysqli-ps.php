<?php

	//conection:
	$db_host="127.0.0.1";
	$db_user="user";
	$db_pass="pass";
	$db_base="base"; 
	$link = new mysqli($db_host,$db_user,$db_pass,$db_base);

	//consultation:;
	$query = "SELECT count(id) FROM usuarios where nombre=? and pass=?";
	$stmt = $link->prepare($query);
	$stmt->bind_param("ss",$_POST["email"],$_POST["pass"]);

	//execute the query.
	$stmt->execute();
	$stmt->bind_result($result);
	
	$stmt->fetch();


	//display information:
	echo "<br>Variables Recibidas:";
	echo"<br>Uusuario: <strong>". $_POST["email"]."</strong>";
	echo"<br>PASS: <strong>". $_POST["pass"]."</strong>";

	echo "<br><br> El n&uacute;mero de resultados fue " . $result;
	echo "<br> El query que hicimos fue ". $query;

	
	$stmt->close();
?>
