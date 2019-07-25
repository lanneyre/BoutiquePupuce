<?php

require "include/appTop.inc.php";

$cat = $_GET['cat'];
if(empty($cat)){
	header("location: index.php");
	exit;
}
$productsCat = $products[$cat];
if(empty($productsCat)){
	header("location: index.php");
	exit;
}
$_SESSION['categorie'] = $cat;
var_dump($_SESSION);
$smarty->assign("login", $login);
$smarty->assign("Products", $products);
$smarty->assign("ProductsCat", $productsCat);
$smarty->display('template/categorie.tpl');