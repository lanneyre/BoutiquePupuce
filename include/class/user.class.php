<?php 
/**
 * 
 */
class user
{
	private $id;
	private $login;
	private $name;
	private $mdp;

	

	function __construct($login = "", $mdp = "", $name = "", $id = null)
	{
		# code...
		$this->id = $id;
		$this->name = $name;
		$this->login = $login;
		$this->mdp = $mdp;
	}

	function __get($name){
		return $this->$name;
	}

	function __set($name, $value){
		$this->$name = $value;
	}

	function verifAutorisation(){
		foreach (database::selectAll("user") as $user) {
			# code...
			if($user['user_login'] == $this->login && $user['user_mdp'] == $this->mdp){
				$this->name = $user['user_name'];
				$this->id = $user['user_id'];
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