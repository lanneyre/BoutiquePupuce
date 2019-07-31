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

	static private $_loginAutorise = [
		["id" => 1, "login" => "moi@moi.moi", "mdp" => "moi", "name" => "moi"],
		["id" => 2, "login" => "toi@toi.toi", "mdp" => "toi", "name" => "toi"],
		["id" => 3, "login" => "elle@elle.elle", "mdp" => "elle", "name" => "elle"]
	];

	function __construct($login, $mdp, $name = "", $id = null)
	{
		# code...
		$this->_id = $id;
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
		foreach (self::$_loginAutorise as $user) {
			# code...
			if($user['login'] == $this->_login && $user['mdp'] == $this->_mdp){
				$this->_name = $user['name'];
				$this->_id = $user['id'];
				return true;
			}
		}
		return false;
	}

	static function getById($id){
		foreach (self::$_loginAutorise as $user) {
			# code...
			if($user['id'] == $id){
				return new user($user['login'], $user['mdp'],$user['name'], $user['id']);
				break;
			}
		}
		return null;
	}
}