<?php

require "include/appTop.inc.php";

$produit = $_GET['produit'];
if(empty($produit)){
	header("location: index.php");
	exit;
}
$prod = manager::getById($produit);


// if(empty($prod)){
// 	header("location: index.php");
// 	exit;
// }
$smarty->assign("login", $login);
//$othersProducts = $products[$cat];
//unset($othersProducts[$keyProd]);
$smarty->assign("product", $prod);
$smarty->assign("othersProducts", manager::getProduitParCategorie($prod->categorieId, $prod->id));
//$smarty->assign("Products", $products);
$smarty->display('template/produit.tpl');