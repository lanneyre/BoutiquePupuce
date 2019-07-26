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

	function __get($name){
		return $this->$name;
	}
	function __set($name, $value){
		$this->$name = $value;
	}
}