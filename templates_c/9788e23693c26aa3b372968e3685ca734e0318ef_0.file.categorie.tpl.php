<?php
/* Smarty version 3.1.33-dev-5, created on 2019-07-24 15:08:07
  from 'C:\laragon\www\CCI\Boutique\template\categorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d387457b7e468_48013657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9788e23693c26aa3b372968e3685ca734e0318ef' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\categorie.tpl',
      1 => 1563980874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d387457b7e468_48013657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_938696185d387457b6c605_09030332', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_938696185d387457b6c605_09030332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_938696185d387457b6c605_09030332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="row justify-content-around">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ProductsCat']->value, 'products', false, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value => $_smarty_tpl->tpl_vars['products']->value) {
?>
            <div class="card mb-3" style="width: 18rem;">
              <div class="container">
                <img class="card-img-top" src="template/img/<?php echo $_smarty_tpl->tpl_vars['products']->value['img'];?>
" alt="Card image cap" style="height: 200px;">
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['products']->value['name'];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['products']->value['name'];?>
</p>
                <a href="produit.php?produit=<?php echo $_smarty_tpl->tpl_vars['products']->value['id'];?>
" class="btn btn-primary">Détails du produit</a>
              </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </section>
<?php
}
}
/* {/block 'body'} */
}
