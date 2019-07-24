<?php
/* Smarty version 3.1.33-dev-5, created on 2019-07-24 09:55:11
  from 'C:\laragon\www\CCI\Boutique\template\produit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d382aff112fa1_17842864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd652972cfbb5c18c6e8e054906e58b642228d864' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\produit.tpl',
      1 => 1563962110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d382aff112fa1_17842864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17213421185d382aff107183_79091135', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_17213421185d382aff107183_79091135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17213421185d382aff107183_79091135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container">
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="template/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
" class="card-img" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h5>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</p>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value['prix'];?>
 €</p>
            <form action="#" method="post">
              <input type="number" class="form-control" min="0" max="42">
              <input type="button" class="btn btn-outline-primary" value="Ajouter au panier">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h5>Dans la categorie</h5>
    <div class="row justify-content-around">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['othersProducts']->value, 'product', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>

        <div class="card mb-3" style="width: 18rem;">
          <div class="container">
            <img class="card-img-top" src="template/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
" alt="Card image cap" style="height: 200px;">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h5>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
    
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php
}
}
/* {/block 'body'} */
}
