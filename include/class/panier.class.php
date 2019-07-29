<?php 
/**
 * 
 */
class panier 
{
	//static private $_listProduits = array();
	static public $_TxTva = 0.2;

	static function getProduits(){
		return $_SESSION['panier'];
	}

	// affichage totaux
	static function prixTotal(){
		$prixTotal = 0;
		foreach ($_SESSION['panier'] as $product) {
			# code...
			// $product[0] = produits
			// $product[1] = qté
			$prixTotal += $product[0]->_prix * $product[1];
		}
		return $prixTotal;
	}

	static function prixTotalTTC(){
		return self::prixTotal() * (1+self::$_TxTva);
	}

	static function getTVA(){
		return self::prixTotal() * self::$_TxTva;
	}

	// ajouter produit
	static function addProduit($produit, $qte){
		array_push($_SESSION['panier'], array($produit, $qte)); 
	}

	static function delProduit($idProduit){
		$key = self::rechercheProduit($idProduit);

		if($key !== false){
			unset($_SESSION['panier'][$key]);
		} 	
	}

	static function setQte($idProduit, $qte){
		
		$key = self::rechercheProduit($idProduit);
		if($key !== false){
			$_SESSION['panier'][$key][1] = $qte;
		} 
		
	}

	static function rechercheProduit($idProduit){
		$keyToReturn = false;
		foreach ($_SESSION['panier'] as $key => $value) {
			# code...
			if($value[0]->_id == $idProduit){
				$keyToReturn = $key;
				break;
			}
		}
		return $keyToReturn;
	}
}