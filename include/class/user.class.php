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
		foreach (database::getUsers() as $user) {
			# code...
			if($user['user_login'] == $this->_login && $user['user_mdp'] == $this->_mdp){
				$this->_name = $user['user_name'];
				$this->_id = $user['user_id'];
				return true;
			}
		}
		return false;
	}

	static function getById($id){
		foreach (database::getUsers() as $user) {
			# code...
			if($user['user_id'] == $id){
				return new user($user['user_login'], $user['user_mdp'],$user['user_name'], $user['user_id']);
				break;
			}
		}
		return null;
	}
}