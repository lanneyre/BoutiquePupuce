<?php

require "include/appTop.inc.php";

$search = $_POST['recherche'];
if(empty($search)){
	header("location: index.php");
	exit;
}
$smarty->assign("login", $login);
$Produits = manager::recherche($search);
$smarty->assign("Produits", $Produits);
$smarty->assign("search", $search);
$smarty->display('template/produits.tpl');