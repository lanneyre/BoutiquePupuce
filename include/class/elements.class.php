<?php 
/**
 * 
 */
class elements
{
	protected $_id;
	protected $_nom;
	protected $_description;
	protected $_img;

	function __construct($id, $nom, $description, $img)
	{
		# code...
		$this->_id = $id;
		$this->_nom = $nom;
		$this->_description = $description;
		$this->_img = $img;
	}
}