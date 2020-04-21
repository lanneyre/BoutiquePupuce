<?php
/* Smarty version 3.1.33-dev-5, created on 2019-08-08 14:38:41
  from 'C:\laragon\www\BoutiquePupuce\template\templateFacture.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d4c33f1c5b9d9_27158222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9905bc7026e9bf07a842f0d4995559c5fac74187' => 
    array (
      0 => 'C:\\laragon\\www\\BoutiquePupuce\\template\\templateFacture.html',
      1 => 1565275091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4c33f1c5b9d9_27158222 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Facture</title>
    </head>
    <body>
    	<main>
    		<div id="blockEntreprise">
    			<div id="logo" style="width: 40%; float: right; text-align: right;"><img src="template/img/Logo.png" alt="Chez Pupuce" style="width: 50%;"></div>
    			<div id="coordonnees" style="width: 48%;">
    				<h4>Chez Pupuce</h4>
    				Adresse : Lorem ipsum dolor 06200 Nice<br>
    				Téléphone : ou pas<br>
					Mail : SiJeVeux
    			</div>
    			<div id="client" style="margin-top: 60px; padding-left: 60%;">
    				Id : <?php ob_start();
echo $_smarty_tpl->tpl_vars['commande']->value->userId;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
<br>
    				Nom : <?php ob_start();
echo $_smarty_tpl->tpl_vars['commande']->value->userName;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
<br>
    				Login : <?php ob_start();
echo $_smarty_tpl->tpl_vars['commande']->value->userLogin;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
<br>
    			</div>

    			<div id="date"  style="margin-top: 30px;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['commande']->value->date;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</div>

    			<table style="width: 100%; margin-top: 30px;">
    				<thead>
    					<tr>
    						<th colspan="2" style="width: 64%; text-align: left">Produit</th>
    						<th style="width: 12%;">PU</th>
    						<th style="width: 12%;">Qte</th>
    						<th style="width: 12%; text-align: right">Total HT</th>
    					</tr>
    				</thead>
    				<tbody>
    					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commande']->value->produits, 'produit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
?>
    						<tr>
    							<td style="width: 15%;"><img src="template/img/produits/<?php ob_start();
echo $_smarty_tpl->tpl_vars['produit']->value['img'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['produit']->value['nom'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" width="15%"></td>
    							<td style="text-align: left;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['produit']->value['id'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
 - <?php ob_start();
echo $_smarty_tpl->tpl_vars['produit']->value['nom'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</td>
    							<td style="text-align: center;"><?php ob_start();
echo number_format($_smarty_tpl->tpl_vars['produit']->value['prix'],2,',',' ');
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</td>
    							<td style="text-align: center;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['produit']->value['qte'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</td>
    							<td style="text-align: right;"><?php ob_start();
echo number_format($_smarty_tpl->tpl_vars['produit']->value['prix']*$_smarty_tpl->tpl_vars['produit']->value['qte'],2,',',' ');
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</td>
    						</tr>
    					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    				</tbody>
    				<tfoot>
    					<tr>
    						<td colspan="4" style="font-weight: bold; padding-right: 20px;text-align: right;">Prix HT</td>
    						<td style="text-align: right;"><?php ob_start();
echo number_format($_smarty_tpl->tpl_vars['totaux']->value['pu'],2,',',' ');
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
 €</td>
    					</tr>
    					<tr>
    						<td colspan="4" style="font-weight: bold; padding-right: 20px;text-align: right;">TVA</td>
    						<td style="text-align: right;"><?php ob_start();
echo number_format($_smarty_tpl->tpl_vars['totaux']->value['tva'],2,',',' ');
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
 €</td>
    					</tr>
    					<tr>
    						<td colspan="4" style="font-weight: bold; padding-right: 20px;text-align: right;">Prix TTC</td>
    						<td style="text-align: right;"><?php ob_start();
echo number_format($_smarty_tpl->tpl_vars['totaux']->value['ttc'],2,',',' ');
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
 €</td>
    					</tr>
    				</tfoot>
    			</table>
    		</div>
    	</main>
    </body>
</html><?php }
}
