<?php 
/**
 * Il s'agit plus d'un manager qui va gérer tout le panier plutôt qu'une class a instancier
 */
class panier 
{
	//static private $_listProduits = array();
	// Je définie ici le taux de tva unique
	// Je sais que la TVA est différente en fonction des produits et qu'elle peut être de 5.5, 10 ou 20 mais pour simplifier la TVA vaudra 20% pour tous les produits
	static public $_TxTva = 0.2;

	// cette fonction me permet de récuperer le panier
	/* Le panier est stocké dans une session :
	    Un visiteur arrive sur votre site. PHP génère alors un numéro unique lors de l'appelle à la fonction session_start. Ce numéro est souvent très gros et écrit en hexadécimal, par exemple : a02bbffc6198e6e0cc2715047bc3766f. (Ce numéro sert d'identifiant et est appelé « ID de session » (ou  PHPSESSID ). PHP transmet automatiquement cet ID de page en page en utilisant généralement un cookie.)

	    Une fois la session générée, on peut créer une infinité de variables de session pour nos besoins. Par exemple, on peut créer une variable  $_SESSION['panier']  qui contient le panier du visiteur etc. Le serveur conserve ces variables même lorsque la page PHP a fini d'être générée. Cela veut dire que, quelle que soit la page de votre site, vous pourrez récupérer panier du visiteur via la superglobale  $_SESSION  !

	    Lorsque le visiteur se déconnecte de votre site, la session est fermée et PHP « oublie » alors toutes les variables de session que vous avez créées. Il est en fait difficile de savoir précisément quand un visiteur quitte votre site. En effet, lorsqu'il ferme son navigateur ou va sur un autre site, le vôtre n'en est pas informé. Soit le visiteur clique sur un bouton « Déconnexion » (que vous aurez créé) avant de s'en aller, soit on attend quelques minutes d'inactivité pour le déconnecter automatiquement : on parle alors de timeout. Le plus souvent, le visiteur est déconnecté par un timeout.
	*/
	static function getProduits(){
		return $_SESSION['panier'];
	}

	// affichage totaux
	// Par défaut le prix des produits sera stocké hors taxe
	// Cette méthode récupère le contenu du panier et calcule le prix HT total du panier
	static function prixTotal(){
		// si le panier est vide, la fonction ne rentrera pas dans la boucle, donc la fonction doit renvoyer un nombre null donc 0
		$prixTotal = 0;
		// pour chaque élément du panier récupérer grâce à la fonction getProduits
		foreach (self::getProduits() as $product) {
			# code...
			// $product[0] = produits
			// $product[1] = qté
			// Je rajoute le prix du produit multiplié par la quantité
			$prixTotal += $product[0]->_prix * $product[1];
		}
		//je renvoi le prix calculé 
		return $prixTotal;
	}

	// Cette fonction calcul le prix total TTC 
	static function prixTotalTTC(){
		// a partir du prix HT on rajoute le montant de la TVA 
		return self::prixTotal() * (1+self::$_TxTva);
	}

	// Cette fonction calcul le montant de la TVA 
	static function getTVA(){
		// A partir du montant HT, j'applique le tx de TVA
		return self::prixTotal() * self::$_TxTva;
	}

	// ajouter produit
	// Cette fonction ajoute un tableau avec 2 cases la première contient un objet de type produit et la seconde la quantité
	static function addProduit($produit, $qte){
		// je cherche le panier contient déjà le produit
		$key = self::rechercheProduit($produit->_id);
		// Si c'est le cas je met à jour la quantité
		if($key !== false){
			$_SESSION['panier'][$key][1] += $qte;
		} else {
			// Sinon je le rajoute
			array_push($_SESSION['panier'], array($produit, $qte)); 	
		}
	}

	// Cette fonction supprime la ligne du panier dont l'id du produit est passé en argument
	static function delProduit($idProduit){
		// je cherche la bonne ligne dans le panier
		$key = self::rechercheProduit($idProduit);
		// Si la fonction trouve une ligne correspondante dans le panier il la supprime sinon il ne fait rien
		if($key !== false){
			unset($_SESSION['panier'][$key]);
		} 	
	}

	static function setQte($idProduit, $qte){
		// je cherche la bonne ligne dans le panier
		$key = self::rechercheProduit($idProduit);
		// Si la fonction trouve une ligne correspondante dans le panier il modifie sa quantité dans le panier sinon il ne fait rien
		if($key !== false){
			$_SESSION['panier'][$key][1] = $qte;
		} 
		
	}

	// Cette fonction cherche la clé de tableau correspondant au produit dont l'id est passé en parametre
	static function rechercheProduit($idProduit){
		$keyToReturn = false;
		// Pour chaque ligne du panier
		foreach (self::getProduits() as $key => $value) {
			# code...
			// Je regarde si l'id que je cherche correpsond à l'id du produit
			if($value[0]->_id == $idProduit){
				$keyToReturn = $key;
				// Si je trouve j'arrete la boucle
				break;
			}
		}
		// je renvoi la clé de l'élément qui m'intéresse
		return $keyToReturn;
	}
}