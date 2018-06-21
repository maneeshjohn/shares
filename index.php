<?php

session_start();


require('init.php');

require('libs/Messages.php');
require('libs/Config.php');
require('libs/Base_controller.php');
require('libs/Base_model.php');

require('controllers/homeController.php');
require('controllers/sharesController.php');
require('controllers/usersController.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');

$bootstrap = new Config($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}