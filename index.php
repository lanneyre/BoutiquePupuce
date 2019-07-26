<?php
require "include/appTop.inc.php";


$smarty->assign("login", $login);
$smarty->assign("title", "La boutique Chez Pupuce", true);

$smarty->assign("products", manager::getAllproduits());
$topVentes = manager::getTopVentes();
$smarty->assign("topVentes", $topVentes);
$smarty->assign("topVentesActive", array_keys ($topVentes)[0]);

$smarty->display('template/accueil.tpl');
