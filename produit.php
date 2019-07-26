<?php

require "include/appTop.inc.php";

$produit = $_GET['produit'];
if(empty($produit)){
	header("location: index.php");
	exit;
}
$prod = produit::getById($produit);
// $cat = null;
// $keyProd = null;
// foreach ($products as $categories => $product) {
// 	# code...
// 	foreach ($product as $key => $value) {
// 		# code...
// 		if ($value['id'] == $produit) {
// 			# code...
// 			$prod = $value;
// 			$keyProd = $key;
// 			$cat = $categories;
// 			break(2);
// 		}
// 	}
// }



if(empty($prod)){
	header("location: index.php");
	exit;
}
$smarty->assign("login", $login);
//$othersProducts = $products[$cat];
//unset($othersProducts[$keyProd]);
$smarty->assign("product", $prod);
$smarty->assign("othersProducts", manager::getProduitParCategorie($prod->_categorieId, $prod->_id));
//$smarty->assign("Products", $products);
$smarty->display('template/produit.tpl');