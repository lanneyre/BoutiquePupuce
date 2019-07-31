<?php 

require "include/appTop.inc.php";

//var_dump($_POST);

$utilisateur = new user($_POST['email'], $_POST['pass']);

if($utilisateur->verifAutorisation()){
	$_SESSION["login"] = $utilisateur->_login;
	$_SESSION["id"] = $utilisateur->_id;
	$_SESSION["mdp"] = $utilisateur->_mdp;
	$_SESSION["name"] = $utilisateur->_name;
}
$page = $_SERVER['HTTP_REFERER'];

if(empty($_POST['actionLogin']))
	header("Location: ".$page);
else 
	header("Location: validePanier.php");
exit;
