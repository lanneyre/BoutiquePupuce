<?php

require 'libs/Smarty.class.php';

include 'db.php';

$smarty = new Smarty;
$smarty->debugging = true;
$smarty->assign("login", $login);
$smarty->assign("title", "La boutique Chez Pupuce", true);
$smarty->assign("Products", $products);

$smarty->display('template/monCompte.tpl');
