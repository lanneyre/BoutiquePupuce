<?php 
/**
 * 
 */
class manager
{
	static private $_categories = array(
			array("id"=>1, "nom"=>"Cat 1","description" => "desc", "img"=>"truc.gif", "categorieParent" =>  null),
			array("id"=>2, "nom"=>"Cat 2","description" => "desc", "img"=>"bidule.jpg", "categorieParent" =>  null),
			array("id"=>3, "nom"=>"Cat 3","description" => "desc", "img"=>"chien.jpg", "categorieParent" =>  null),
			array("id"=>4, "nom"=>"Cat 4","description" => "desc", "img"=>"annaelle.png", "categorieParent" =>  null),
		);

	static private $_products = array(
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
	static function getAllCategories()
	{
		# code...
		return self::$_categories;
	}
	static function getAllproduits()
	{
		# code...
		return self::$_products;
	}
	static function getProduitParCategorie($categorie_id)
	{
		# code...

		$arrayToReturn = array();
		foreach (self::$_products as $product) {
			# code...
			if($product['categorieId'] == $categorie_id){
				$arrayToReturn[] = $product;
			}
		}
		return $arrayToReturn;
	}
	static function getTopVentes(){
		$arrayToReturn = array();

		foreach (self::$_categories as $categorie) {
			# code...
			$list = self::getProduitParCategorie($categorie['id']);

			$arrayToReturn[$categorie['id']] = $list[array_rand($list)];
		}

		return $arrayToReturn;
	}
}