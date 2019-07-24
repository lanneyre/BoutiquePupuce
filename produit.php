<?php

require 'libs/Smarty.class.php';

include 'db.php';

$smarty = new Smarty;
$smarty->debugging = true;
$produit = $_GET['produit'];
if(empty($produit)){
	header("location: index.php");
	exit;
}
$prod = null;
$cat = null;
foreach ($products as $categories => $product) {
	# code...
	foreach ($product as $key => $value) {
		# code...
		if ($value['id'] == $produit) {
			# code...
			$prod = $value;
			$cat = $categories;
			break(2);
		}
	}
}
if(empty($prod)){
	header("location: index.php");
	exit;
}
// var_dump($products[$cat]);
// var_dump($prod);
$othersProducts = $products[$cat];
//var_dump($othersProducts);
$smarty->assign("product", $prod);
$smarty->assign("othersProducts", $othersProducts);
$smarty->assign("Products", $products);
$smarty->display('template/produit.tpl');