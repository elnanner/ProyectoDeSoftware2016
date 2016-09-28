<?php
    require_once("8-conexion.php");
    function obtener_usuarios(){
        $link=obtener_conexion();
        $resu=$link->query("select * from usuarios");
        while ($dato = mysqli_fetch_array($resu))  {
            $usuarios[]=$dato;
        }
        // Cierro la conexión
    mysqli_close($link);
    return $usuarios;
    }
?> 




