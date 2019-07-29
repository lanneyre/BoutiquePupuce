<?php

require "include/appTop.inc.php";

$id = $_POST['idProduit'];
$qte = $_POST['qteProduit'];

panier::setQte($id, $qte);

header("Location: panier.php?traitement=ok");
exit;