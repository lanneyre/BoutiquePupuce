<?php
$login = false;

$loginAutorise = [
	["login" => "moi@moi.moi", "mdp" => "moi", "name" => "moi"],
	["login" => "toi@toi.toi", "mdp" => "toi", "name" => "toi"],
	["login" => "elle@elle.elle", "mdp" => "elle", "name" => "elle"]
];
$tauxTva = 0.2;
$products = array(
		"cat1" => array(
			"prod1" => array("id"=>1, "name"=>"truc", "img"=>"truc.gif", "prix"=>12), 
			"prod2" => array("id"=>2, "name"=>"Machin", "img"=>"machin.jpg", "prix"=>22), 
			"prod3"  => array("id"=>3, "name"=>"chose", "img"=>"chose.jpg", "prix"=>32),
			"prod4" => array("id"=>13, "name"=>"Du pouvoir", "img"=>"pouvoir.gif", "prix"=>42541922), 
			"prod5"  => array("id"=>14, "name"=>"Drole", "img"=>"boule.gif", "prix"=>707), 
			"prod6"  => array("id"=>15, "name"=>"Courage", "img"=>"mecreant.gif", "prix"=>2)
		), 
		"cat2" => array(
			"prod1" => array("id"=>4, "name"=>"bidulle", "img"=>"bidule.jpg", "prix"=>67), 
			"prod2" => array("id"=>5, "name"=>"chouette", "img"=>"chouette.jpg", "prix"=>56), 
			"prod3"  => array("id"=>6, "name"=>"objet", "img"=>"objet.jpg", "prix"=>356)
		),
		"cat3" => array(
			"prod1" => array("id"=>7, "name"=>"Chien", "img"=>"chien.jpg", "prix"=>99999), 
			"prod2" => array("id"=>8, "name"=>"Chat", "img"=>"chat.jpg", "prix"=>99998), 
			"prod3"  => array("id"=>9, "name"=>"Canari", "img"=>"canari.jpg", "prix"=>5467528)
		),
		"cat4" => array(
			"prod1" => array("id"=>10, "name"=>"Annaelle", "img"=>"annaelle.png", "prix"=>554), 
			"prod2" => array("id"=>11, "name"=>"Maxence", "img"=>"maxence.png", "prix"=>546), 
			"prod3"  => array("id"=>12, "name"=>"John", "img"=>"john.jpg", "prix"=>5646)
		));