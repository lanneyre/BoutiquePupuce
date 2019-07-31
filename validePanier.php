<?php 

require "include/appTop.inc.php";

$user = user::getById($_SESSION['id']);
$panier = $_SESSION['panier'];
//var_dump($panier);

if(manager::createCommande($panier, $user)){
	unset($_SESSION['panier']);
	header("Location: index.php");
} else {
	header("Location: panier.php?error");
}
