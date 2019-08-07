<?php 
/**
 * 
 */
class elements
{
	protected $id;
	protected $nom;
	protected $description;
	protected $img;

	function __construct($id, $nom, $description, $img)
	{
		# code...
		$this->id = $id;
		$this->nom = $nom;
		$this->description = $description;
		$this->img = $img;
	}
}