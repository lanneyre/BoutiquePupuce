<?php 

require "include/appTop.inc.php";

$user = manager::getById($_SESSION['id'], "user");
$panier = $_SESSION['panier'];
//var_dump(manager::getById($_SESSION['id'], "user"));

if(manager::createCommande($panier, $user)){

	unset($_SESSION['panier']);
	header("Location: panier.php");
} else {
	header("Location: panier.php?error");
}
