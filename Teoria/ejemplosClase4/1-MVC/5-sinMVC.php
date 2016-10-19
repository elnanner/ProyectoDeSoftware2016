<?php
$db_host="127.0.0.1";
$db_user="user";
$db_pass="pass";
$db_base="base"; 
$link = mysqli_connect($db_host,$db_user,$db_pass,$db_base) or die("Error " . mysqli_error($link));
$link->set_charset("utf8");
?> 

<!DOCTYPE HTML>
<head>
    <title>Listados de Usuarios</title>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
</head>

<body>

<div id="user-table" class="clear">
    <h1>Listado de Usuarios Activos </h1>

<?php
// Realizamos la consulta
$resu=$link->query("select * from usuarios");

//Presentamos el resultado
while ($dato = mysqli_fetch_array($resu)) {
    echo '<div class="user">';
    echo "<h3>". $dato["apellido"]."</h3>";
    echo '<div class="'.$dato["estado"].'">'.$dato["estado"].'</div>';
    echo "<ul>";
    echo "<li>Nombre:". $dato["nombre"]."</h3>";
    echo "<li>DNI:". $dato["dni"]."</h3>";
    echo"</ul>";
    echo "</div>";
}
?>
</div> 	

</body>
</html>

<?php
// Cierro la conexión
mysqli_close($link);
?> 




