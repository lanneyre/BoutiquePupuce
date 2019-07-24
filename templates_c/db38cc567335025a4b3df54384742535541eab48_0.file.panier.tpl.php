<?php
/* Smarty version 3.1.33-dev-5, created on 2019-07-24 10:02:45
  from 'C:\laragon\www\CCI\Boutique\template\panier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d382cc5af0301_05755547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db38cc567335025a4b3df54384742535541eab48' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\panier.tpl',
      1 => 1563962564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d382cc5af0301_05755547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17975727885d382cc5ae9940_47996703', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_17975727885d382cc5ae9940_47996703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17975727885d382cc5ae9940_47996703',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="row">
    <div class="col-8">
      <table>
        <thead>
          <tr>
            <th>Produits</th>
            <th>Quantité</th>
            <th>Prix</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panier']->value, 'produits');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['produits']->value) {
?>
          <tr>
            <td>$produits['name']</td>
            <td>$produits['nb']</td>
            <td>$produits['prix']</td>
            <td>del</td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
      <input type="button" class="btn btn-primary" value="Continuer mes achats">
    </div>
    <div class="col-4">
      Total HT : <br>
      TVA : <br>
      Total TTC : <br> 
      <input type="button" class="btn btn-primary" value="Payer">
    </div>
  </section>
<?php
}
}
/* {/block 'body'} */
}
