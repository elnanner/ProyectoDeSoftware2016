<?php

//conection:
$db_host="127.0.0.1";
$db_user="user";
$db_pass="pass";
$db_base="base"; 
$link = mysqli_connect($db_host,$db_user,$db_pass,$db_base) or die("Error " . mysqli_error($link));

//consultation:;

$query = "SELECT * FROM usuarios" or die("Error in the consult.." . mysqli_error($link));

//execute the query.

$result = $link->query($query);

//display information:

while($row = mysqli_fetch_array($result)) {
  echo $row["nombre"] ." y ". $row["apellido"]. "<br>";
} 

mysqli_close($link);

//ver otras formas de utilizarlo en http://www.php.net/manual/es/mysqli.construct.php
?>




