<?php

require 'libs/Smarty.class.php';

include 'db.php';

$smarty = new Smarty;
$smarty->debugging = true;
$panier = array();
$smarty->assign("panier", $panier);
$smarty->assign("Products", $products);
$smarty->display('template/panier.tpl');