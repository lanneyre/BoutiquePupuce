<?php

require "include/appTop.inc.php";

$cat = $_GET['cat'];
if(empty($cat)){
	header("location: index.php");
	exit;
}
$productsCat = manager::getProduitParCategorie($cat);
if(empty($productsCat)){
	header("location: index.php");
	exit;
}

$smarty->assign("login", $login);
//$smarty->assign("Products", $products);
$smarty->assign("ProductsCat", $productsCat);
$smarty->display('template/categorie.tpl');