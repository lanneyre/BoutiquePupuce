<?php

require "include/appTop.inc.php";

$panier = array(
			array(manager::getById(1), 2),
			array(manager::getById(14), 5),
			array(manager::getById(9), 1)
		);

// panier::addProduit(produit::getById(1), 2);
// panier::addProduit(produit::getById(14), 5);
// panier::addProduit(produit::getById(8), 20);

$panier = panier::getProduits();
$pu = panier::prixTotal();
$tva = panier::getTVA();
$ttc = panier::prixTotalTTC();

$smarty->assign("pu", $pu);
$smarty->assign("tva", $tva);
$smarty->assign("tauxTva", panier::$_TxTva*100);
$smarty->assign("ttc", $ttc);

$smarty->assign("login", $login);
$smarty->assign("panier", $panier);
//$smarty->assign("Products", $products);
$smarty->display('template/panier.tpl');