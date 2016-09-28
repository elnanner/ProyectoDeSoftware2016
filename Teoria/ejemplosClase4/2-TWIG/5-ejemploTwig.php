<?php 


require_once 'vendor/autoload.php';

$templateDir="./templates";
$loader = new Twig_Loader_Filesystem($templateDir);
$twig = new Twig_Environment($loader);
            
$template = $twig->loadTemplate("plantilla-5.twig.html");

$template->display(array('titulo' => "Listado de alumnos",
						'lista' => array("juan", "roberto")
												));

?>




