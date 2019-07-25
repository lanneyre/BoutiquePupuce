<?php

require "include/appTop.inc.php";

$panier = array(
			array($products['cat1']['prod1'], 2),
			array($products['cat3']['prod3'], 5),
			array($products['cat4']['prod2'], 1)
		);

$pu = 0;
$tva = 0;
$ttc = 0;
foreach ($panier as $product) {
	# code...
	$pu += $product[1] * $product[0]['prix'];
}
$tva = $pu * $tauxTva;
$ttc = $pu + $tva;

$smarty->assign("pu", $pu);
$smarty->assign("tva", $tva);
$smarty->assign("tauxTva", $tauxTva*100);
$smarty->assign("ttc", $ttc);

$smarty->assign("login", $login);
$smarty->assign("panier", $panier);
$smarty->assign("Products", $products);
$smarty->display('template/panier.tpl');