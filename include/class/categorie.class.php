<?php 
/**
 * 
 */
class categorie extends elements
{
	private $_parentId;

	function __construct($id, $nom, $description, $img, $parentId)
	{
		# code...
		parent::__construct($id, $nom, $description, $img);
		$this->_parentId = $parentId;
	}
	function getById($id){
		
	}
}