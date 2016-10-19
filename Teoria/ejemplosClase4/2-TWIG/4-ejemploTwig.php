<?php 


require_once 'vendor/autoload.php';

$templateDir="./templates";
$loader = new Twig_Loader_Filesystem($templateDir);
$twig = new Twig_Environment($loader);
            
$template = $twig->loadTemplate("plantilla-4.twig.html");

$template->display(array('variable' => "una variable",
						'arreglo' => array(1,2,3),
						
						));

?>




