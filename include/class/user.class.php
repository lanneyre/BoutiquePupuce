<?php 
/**
 * 
 */
class user
{
	private $_id;
	private $_login;
	private $_name;
	private $_mdp;

	private $_loginAutorise = [
		["login" => "moi@moi.moi", "mdp" => "moi", "name" => "moi"],
		["login" => "toi@toi.toi", "mdp" => "toi", "name" => "toi"],
		["login" => "elle@elle.elle", "mdp" => "elle", "name" => "elle"]
	];

	function __construct($login, $mdp, $name = "")
	{
		# code...
		$this->_id = null;
		$this->_name = $name;
		$this->_login = $login;
		$this->_mdp = $mdp;
	}

	function __get($name){
		return $this->$name;
	}

	function __set($name, $value){
		$this->$name = $value;
	}

	function verifAutorisation(){
		foreach ($this->_loginAutorise as $user) {
			# code...
			if($user['login'] == $this->_login && $user['mdp'] == $this->_mdp){
				$this->_name = $user['name'];
				return true;
			}
		}
		return false;
	}

}