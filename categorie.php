<?php

require "include/appTop.inc.php";

$cat = $_GET['cat'];
if(empty($cat)){
	header("location: index.php");
	exit;
}
$Produits = manager::getProduitParCategorie($cat);
if(empty($Produits)){
	header("location: index.php");
	exit;
}

$smarty->assign("login", $login);
//$smarty->assign("Products", $products);
$smarty->assign("Produits", $Produits);
$smarty->display('template/produits.tpl');