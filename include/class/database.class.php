<?php 
/**
 * 
 */
class database
{
	private static $_host = "localhost";
	private static $_user = "root";
	private static $_mdp = "";
	private static $_bdd = "BoutiquePOO";

	public static $_conn;

	public static function createConnexion(){
		self::$_conn = new pdo("mysql:host=".self::$_host.";dbname=".self::$_bdd.";charset=UTF8", self::$_user, self::$_mdp);
	}

	public static function selectAll($table, $comportement = PDO::FETCH_ASSOC){
		$sql = "SELECT * FROM `$table`";
		$req = self::$_conn->query($sql);
		if($comportement == PDO::FETCH_CLASS){
			$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, $table);
			return $req->fetchAll();
		}
		return $req->fetchAll($comportement);
	}
}