<?php 
require_once 'vendor/autoload.php';
$templateDir="./templates";
$loader = new Twig_Loader_Filesystem($templateDir);

$twig = new Twig_Environment($loader);
            
$template = $twig->loadTemplate("plantilla-3.twig.html");

$template->display(array('nombre' => 'chicos ',
						'arreglo' => array("uno", "dos", "tres")
));

?>




