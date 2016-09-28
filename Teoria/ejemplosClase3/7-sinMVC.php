<?php
$db_host="127.0.0.1";
$db_user="user";
$db_pass="pass";
$db_base="base"; 
$link = mysqli_connect($db_host,$db_user,$db_pass,$db_base) or die("Error " . mysqli_error($link));
?> 

<html>
<head><title>Listados de Usuarios</title></head>
<body><h1>Listado de Usuarios Activos </h1>
<table>
<tr><th>Nombre</th><th>DNI</th></tr>

<?php
// Realizamos la consulta
$resu=$link->query("select * from usuarios");

while ($dato = mysqli_fetch_array($resu)) {
    echo "<tr><td>".$dato["nombre"] . "</td><td>". $dato["dni"]."</td></tr>";
}
?>
</table></body></html>
<?php
// Cierro la conexión
mysqli_close($link);
?> 




