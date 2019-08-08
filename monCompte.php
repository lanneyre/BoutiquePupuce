<?php

require "include/appTop.inc.php";

if (!$login) {
	# code...
	header("Location: index.php");
	exit;
}

$smarty->assign("login", $login);
$smarty->assign("title", "La boutique Chez Pupuce", true);
$smarty->assign("commandes", manager::getAllCommandeUtilisateur($_SESSION['id']));
$smarty->display('template/monCompte.tpl');
