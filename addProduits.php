<?php

require "include/appTop.inc.php";

$id = $_POST['idProduit'];
$qte = $_POST['qteProduit'];

panier::addProduit(manager::getById($id), $qte);

header("Location: produit.php?produit=".$id."&panier=addOk");
exit;