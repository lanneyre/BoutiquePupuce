<?php

require 'libs/Smarty.class.php';

include 'db.php';

$produit = $_GET['produit'];
if(empty($produit)){
	header("location: index.php");
	exit;
}
$prod = null;
$cat = null;
$keyProd = null;
foreach ($products as $categories => $product) {
	# code...
	foreach ($product as $key => $value) {
		# code...
		if ($value['id'] == $produit) {
			# code...
			$prod = $value;
			$keyProd = $key;
			$cat = $categories;
			break(2);
		}
	}
}
if(empty($prod)){
	header("location: index.php");
	exit;
}
$smarty = new Smarty;
$smarty->debugging = true;
$smarty->assign("login", $login);
$othersProducts = $products[$cat];
unset($othersProducts[$keyProd]);
$smarty->assign("product", $prod);
$smarty->assign("othersProducts", $othersProducts);
$smarty->assign("Products", $products);
$smarty->display('template/produit.tpl');