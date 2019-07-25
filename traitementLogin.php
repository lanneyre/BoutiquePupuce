<?php 

require "include/appTop.inc.php";

var_dump($_POST);

$utilisateur = new user($_POST['email'], $_POST['pass']);

if($utilisateur->verifAutorisation()){
	$_SESSION["login"] = $utilisateur->_login;
	$_SESSION["mdp"] = $utilisateur->_mdp;
	$_SESSION["name"] = $utilisateur->_name;
}

header("Location: index.php");
exit;