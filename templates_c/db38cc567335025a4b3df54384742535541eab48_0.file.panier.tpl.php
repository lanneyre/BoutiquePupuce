<?php
/* Smarty version 3.1.33-dev-5, created on 2019-07-25 07:19:47
  from 'C:\laragon\www\CCI\Boutique\template\panier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d3958139e3b96_72025876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db38cc567335025a4b3df54384742535541eab48' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\panier.tpl',
      1 => 1563980869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3958139e3b96_72025876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16344944585d3958138e0d87_35786634', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_16344944585d3958138e0d87_35786634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16344944585d3958138e0d87_35786634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="row">
    <div class="col-8">
      <table class="table table-striped table-hover">
        <thead class="">
          <tr class="bg-secondary text-white">
            <th scope="col">Produits</th>
            <th scope="col">PU</th>
            <th scope="col">Quantité</th>
            <th scope="col">Prix HT</th>
            <th scope="col">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panier']->value, 'produits');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['produits']->value) {
?>
          <tr>
            <td>
              <div class="row">
                <div class="col-3"><img src="template/img/<?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['name'];?>
" class="imgPanier"></div>
                <div class="col-9"><?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['name'];?>
</div> 
              </div>
            </td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['produits']->value[0]['prix'],2,',',' ');?>
 €</td>
            <td><?php echo $_smarty_tpl->tpl_vars['produits']->value[1];?>
</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['produits']->value[1]*$_smarty_tpl->tpl_vars['produits']->value[0]['prix'],2,',',' ');?>
 €</td>
            <td><button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
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
      <div class="card">
        <div class="card-header text-white bg-secondary font-weight-bold">
          Totaux
        </div>
        <div class="card-body">
          <div class="alert alert-primary">Total HT : <?php echo number_format($_smarty_tpl->tpl_vars['pu']->value,2,',',' ');?>
 €</div>
          <div class="alert alert-warning">TVA (<?php echo $_smarty_tpl->tpl_vars['tauxTva']->value;?>
%): <?php echo number_format($_smarty_tpl->tpl_vars['tva']->value,2,',',' ');?>
 €</div>
          <div class="alert alert-danger font-weight-bold">Total TTC : <?php echo number_format($_smarty_tpl->tpl_vars['ttc']->value,2,',',' ');?>
 €</div>
        </div>
      </div>
       
      <input type="button" class="btn btn-primary" value="Payer">
    </div>
  </section>
  
<?php
}
}
/* {/block 'body'} */
}
