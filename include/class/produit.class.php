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

	function getById($id){
		
	}
}