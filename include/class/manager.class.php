<?php 
/**
 * 
 */
class manager
{
	static function getAllCategories()
	{
		# code...
		return database::selectAll("categorie");
	}
	static function getAllproduits()
	{
		# code...
		return database::selectAll("produit");
	}
	static function getProduitParCategorie($categorie_id, $idToIgnore = 0)
	{
		# code...

		$arrayToReturn = array();
		foreach (database::selectAll("produit") as $product) {
			# code...
			if($product['categorieId'] == $categorie_id){
				if($product['id'] != $idToIgnore)
					$arrayToReturn[] = $product;
			}
		}
		return $arrayToReturn;
	}
	static function getTopVentes(){
		$arrayToReturn = array();

		foreach (database::selectAll("categorie") as $categorie) {
			# code...
			$list = self::getProduitParCategorie($categorie['id']);

			$arrayToReturn[$categorie['id']] = $list[array_rand($list)];
		}

		return $arrayToReturn;
	}

	static function recherche($search){
		$arrayToReturn = array();
		foreach (self::getAllproduits() as $produit) {
			if(stripos($produit['nom'], $search) !== false || stripos($produit['description'], $search) !== false){
				$arrayToReturn[] = $produit;
			}		
		}	
		return $arrayToReturn;
	}

	static function createCommande($panier, $user){
		$toutSePasseBien = true;
		foreach ($panier as $produit) {
			# code...
			echo "j'insère dans la bdd ".$produit[1]." ".$produit[0]->nom."<br>";
		}
		echo "pour le compte de ".$user->name."<br>";

		return $toutSePasseBien;
	}

	static function getById($id, $table = "produit"){
		foreach (database::selectAll($table, PDO::FETCH_CLASS) as $element) {
			# code...
			// echo "<pre>";
			// var_dump($element);
			// echo "</pre>";
			if($element->id == $id){
				return $element;
				break;
			}
		}
		return null;
	}

	// static function createBDD(){
	// 	$produits = self::$_products;

	// 	foreach ($produits as $produit) {
	// 		# code...
	// 			$sql = "INSERT INTO `produit` (".implode(", ", array_keys($produit)).") VALUE ('".implode("', '", $produit)."')";
	// 			database::$_conn->exec($sql);
	// 	}
	// }
}