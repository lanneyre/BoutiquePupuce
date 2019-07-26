<?php 
/**
 * 
 */
class elements
{
	private $_id;
	private $_nom;
	private $_description;
	private $_img;

	function __construct($id, $nom, $description, $img)
	{
		# code...
		$this->_id = $id;
		$this->_nom = $nom;
		$this->_description = $description;
		$this->_img = $img;
	}

	function __get($name){
		return $this->$name;
	}
	function __set($name, $value){
		$this->$name = $value;
	}
}