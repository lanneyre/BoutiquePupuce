<?php

require "include/appTop.inc.php";

$id = $_GET['id'];

panier::delProduit($id);

header("Location: panier.php?panier=delOk");
exit;