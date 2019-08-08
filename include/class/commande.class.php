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

	function getPrixHT(){
		$pu = 0;
		foreach ($this->produits as $produit) {
			# code...
			$pu+= $produit['prix']*$produit['qte'];
		}
		return $pu;
	}

	function getTVA(){
		return 0.2;
	}

	function getTotaux(){
		$pu = $this->getPrixHT();
		$arrayToReturn = array("pu" => $pu, "tva" => $pu*$this->getTVA(), "ttc" => $pu*(1+$this->getTVA()));
		return $arrayToReturn;
	}

	function __get($name){
		return $this->$name;
	}
	function __set($name, $value){
		$this->$name = $value;
	}
}