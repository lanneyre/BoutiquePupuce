<?php 

/**
 * 
 */
class commande
{
	
	private $id;
	private $date;
	private $userId;
	private $userName;
	private $userLogin;

	private $produits;

	function __construct(){
		$this->produits = manager::recupProduits($this->id);
	}

	// function recupProduits(){
	// 	$this->produits = manager::recupProduits($this->id);
	// }

	

	function __get($name){
		return $this->$name;
	}
	function __set($name, $value){
		$this->$name = $value;
	}
}