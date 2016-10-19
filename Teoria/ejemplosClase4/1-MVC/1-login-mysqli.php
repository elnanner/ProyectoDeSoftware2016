<?php

//conection:
$db_host="127.0.0.1";
$db_user="user";
$db_pass="pass";
$db_base="base"; 
$link = new mysqli($db_host,$db_user,$db_pass,$db_base);

//consultation:;

$query = "SELECT * FROM usuarios where nombre='".$_POST["email"]."' and pass='".$_POST["pass"]."';";

//execute the query.

$result = $link->query($query);

//display information:
echo "<br>Variables Recibidas:";
echo"<br>Uusuario: <strong>". $_POST["email"]."</strong>";
echo"<br>PASS: <strong>". $_POST["pass"]."</strong>";
	
echo "<br> El n&uacute;mero de resultados fue " . $result->num_rows;
echo "<br> El query que hicimos fue ". $query;

echo "<br> <br>Objeto resultado ";
print_r($result);


mysqli_close($link);

//ver otras formas de utilizarlo en http://www.php.net/manual/es/mysqli.construct.php



?>
