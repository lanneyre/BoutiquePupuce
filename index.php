<?php
require "include/appTop.inc.php";


$smarty->assign("login", $login);
$smarty->assign("title", "La boutique Chez Pupuce", true);
$smarty->assign("Products", $products);
$topVentes = array();
$first = true;
foreach ($products as $key => $value) {
	# code...
	$temp = $value[array_rand($value)];
	$temp['active'] = $first;
	$first = false;
	$topVentes[] = $temp;
}
$smarty->assign("topVentes", $topVentes);
$smarty->display('template/accueil.tpl');
