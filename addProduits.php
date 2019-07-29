<?php

require "include/appTop.inc.php";

$id = $_POST['idProduit'];
$qte = $_POST['qte'];

panier::addProduit(produit::getById($id), $qte);

header("Location: produit.php?produit=".$id."&traitement=ok");
exit;