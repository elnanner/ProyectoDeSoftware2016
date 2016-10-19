<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

require_once('controller/ResourceController.php');
require_once('model/PDORepository.php');
require_once('model/ResourceRepository.php');
require_once('model/Resource.php');
require_once('view/TwigView.php');
require_once('view/SimpleResourceList.php');
require_once('view/Home.php');


if(isset($_GET["action"]) && $_GET["action"] == 'listResources'){
    ResourceController::getInstance()->listResources();
}else{
    ResourceController::getInstance()->home();
}

