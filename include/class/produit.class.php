<?php 
/**
 * 
 */
class produit extends elements
{
	private $_prix;
	private $_stock;
	private $_categorieId;

	function __construct($id, $nom, $description, $img, $prix, $stock, $categorieId)
	{
		# code...

		parent::__construct($id, $nom, $description, $img);
		$this->_prix = $prix;
		$this->_stock = $stock;
		$this->_categorieId = $categorieId;
	}

	function __get($name){
		return $this->$name;
	}
	function __set($name, $value){
		$this->$name = $value;
	}

	static function getById($id){
		foreach ($GLOBALS['products'] as $product) {
			# code...
			if($product['id'] == $id){
				return new produit($product['id'], $product['nom'],$product['description'], $product['img'],$product['prix'],$product['stock'],$product['categorieId']);
				break;
			}
		}
		return null;
	}
}