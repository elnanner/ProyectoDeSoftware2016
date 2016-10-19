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
foreach ($usuarios as $dato) {
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





