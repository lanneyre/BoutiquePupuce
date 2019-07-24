<?php

require 'libs/Smarty.class.php';

include 'db.php';

$smarty = new Smarty;
$smarty->debugging = true;
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
$smarty->assign("Products", $products);
$smarty->assign("ProductsCat", $productsCat);
$smarty->display('template/categorie.tpl');