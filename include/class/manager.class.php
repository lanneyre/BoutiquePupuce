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
		return database::createCommande($user, $panier);
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

	static function createBDD(){
		$produits = array(
			array("id"=>1, "nom"=>"truc", "description" => "desc","description" => "desc", "stock" => 10, "img"=>"truc.gif", "prix"=>12, "categorieId" =>  1), 
			array("id"=>2, "nom"=>"Machin","description" => "desc", "stock" => 10, "img"=>"machin.jpg", "prix"=>22, "categorieId" => 1), 
			array("id"=>3, "nom"=>"chose","description" => "desc", "stock" => 10, "img"=>"chose.jpg", "prix"=>32, "categorieId" => 1),
			array("id"=>13, "nom"=>"Du pouvoir","description" => "desc", "stock" => 10, "img"=>"pouvoir.gif", "prix"=>42541922, "categorieId" => 1), 
			array("id"=>14, "nom"=>"Drole","description" => "desc", "stock" => 10, "img"=>"boule.gif", "prix"=>707, "categorieId" => 1), 
			array("id"=>15, "nom"=>"Courage","description" => "desc", "stock" => 10, "img"=>"mecreant.gif", "prix"=>2, "categorieId" => 1),
			array("id"=>4, "nom"=>"bidulle","description" => "desc", "stock" => 10, "img"=>"bidule.jpg", "prix"=>67, "categorieId" => 2), 
			array("id"=>5, "nom"=>"chouette","description" => "desc", "stock" => 10, "img"=>"chouette.jpg", "prix"=>56, "categorieId" => 2), 
			array("id"=>6, "nom"=>"objet","description" => "desc", "stock" => 10, "img"=>"objet.jpg", "prix"=>356, "categorieId" =>2 ),
			array("id"=>7, "nom"=>"Chien","description" => "desc", "stock" => 10, "img"=>"chien.jpg", "prix"=>99999, "categorieId" => 3), 
			array("id"=>8, "nom"=>"Chat","description" => "desc", "stock" => 10, "img"=>"chat.jpg", "prix"=>99998, "categorieId" => 3), 
			array("id"=>9, "nom"=>"Canari","description" => "desc", "stock" => 10, "img"=>"canari.jpg", "prix"=>5467528, "categorieId" => 3),
			array("id"=>10, "nom"=>"Annaelle","description" => "desc", "stock" => 10, "img"=>"annaelle.png", "prix"=>554, "categorieId" => 4), 
			array("id"=>11, "nom"=>"Maxence","description" => "desc", "stock" => 10, "img"=>"maxence.png", "prix"=>546, "categorieId" => 4), 
			array("id"=>12, "nom"=>"John","description" => "desc", "stock" => 10, "img"=>"john.jpg", "prix"=>5646, "categorieId" => 4)
		);

		foreach ($produits as $produit) {
			# code...
				$sql = "INSERT INTO `produit` (".implode(", ", array_keys($produit)).") VALUE ('".implode("', '", $produit)."')";
				database::$_conn->exec($sql);
		}
	}
}