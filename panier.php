<?php

require "include/appTop.inc.php";

$panier = array(
			array(produit::getById(1), 2),
			array(produit::getById(14), 5),
			array(produit::getById(9), 1)
		);

$pu = 0;
$tva = 0;
$ttc = 0;
foreach ($panier as $product) {
	# code...
	$pu += $product[1] * $product[0]->_prix;
}
$tva = $pu * $tauxTva;
$ttc = $pu + $tva;

$smarty->assign("pu", $pu);
$smarty->assign("tva", $tva);
$smarty->assign("tauxTva", $tauxTva*100);
$smarty->assign("ttc", $ttc);

$smarty->assign("login", $login);
$smarty->assign("panier", $panier);
//$smarty->assign("Products", $products);
$smarty->display('template/panier.tpl');