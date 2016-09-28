<?php
//Conectamos a la Base
require("8-modelo.php");

//Recupero los usuarios
$usuarios=obtener_usuarios();

//Cargo la vista
require_once("6-vista.php");

?> 




