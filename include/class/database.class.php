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

	public static function createCommande($user, $panier){

		try{
			self::$_conn->beginTransaction();
			$sql = "INSERT INTO `commande`(`userId`, `userName`, `userLogin`) VALUES (:userid,:userName,:userLogin)";

			$req = self::$_conn->prepare($sql);
			$req->bindValue(":userid", $user->id);
			$req->bindValue(":userName", $user->name);
			$req->bindValue(":userLogin", $user->login);


			$req->execute();
			$idCommande = self::$_conn->lastInsertId();

			$sqlInsertProduitCommande = "INSERT INTO `produitcommande`(`id`, `nom`, `description`, `img`, `prix`, `categorieId`, `commandeID`, `qte`) VALUES (:id, :nom, :description, :img, :prix, :categorieId, :commandeID, :qte)";
			$reqProduit = self::$_conn->prepare($sqlInsertProduitCommande);
			foreach ($panier as $produit) {
				# code...
				$reqProduit->bindValue(":id", $produit[0]->id);
				$reqProduit->bindValue(":nom", $produit[0]->nom);
				$reqProduit->bindValue(":description", $produit[0]->description);
				$reqProduit->bindValue(":img", $produit[0]->img);
				$reqProduit->bindValue(":prix", $produit[0]->prix);
				$reqProduit->bindValue(":categorieId", $produit[0]->categorieId);
				$reqProduit->bindValue(":commandeID", $idCommande);
				$reqProduit->bindValue(":qte", $produit[1]);

				$reqProduit->execute();
			}
			self::$_conn->commit();
			return true;
		} catch(PDOException $e) {
			self::$_conn->rollBack();
			return false;
		}
		

	}
}