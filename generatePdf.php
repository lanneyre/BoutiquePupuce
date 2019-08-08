<?php 

require "include/appTop.inc.php";

if (empty($_GET['idCommande'])) {
	# code...
	header("Location: monCompte.php?pasdid");
	exit;
}

//$idCommande = $_GET['idCommande'];
extract($_GET);

$commande = manager::getById($idCommande, "commande");
if (empty($commande)) {
	# code...
	header("Location: monCompte.php?commandeIntrouvable");
	exit;
}
// $commande->recupProduits();
// $produitsCommande = $commande->produits;
//var_dump($commande->produits);

$smarty->assign("commande", $commande);

$smarty->assign("totaux", $commande->getTotaux());

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($smarty->fetch('template/templateFacture.html'));
$mpdf->Output();