<?php 

session_start();

require_once 'libs/Autoloader.php';
Smarty_Autoloader::register();

require_once 'include/Autoloader.php';
Autoloader::register();

include 'db.php';

$smarty = new Smarty;
$smarty->debugging = true;
$userLogin = null;
if(!empty($_SESSION["login"]) && !empty($_SESSION["mdp"]) && !empty($_SESSION["name"])){
	$login = true;
	$userLogin = session::sessionVersUser();
} 

$smarty->assign("userLogin", $userLogin);