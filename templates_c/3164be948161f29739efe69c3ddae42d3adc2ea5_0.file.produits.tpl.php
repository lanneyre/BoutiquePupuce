<?php
/* Smarty version 3.1.33-dev-5, created on 2019-07-31 12:58:55
  from 'C:\laragon\www\BoutiquePupuce\template\produits.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d41908fd7b0a4_22677953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3164be948161f29739efe69c3ddae42d3adc2ea5' => 
    array (
      0 => 'C:\\laragon\\www\\BoutiquePupuce\\template\\produits.tpl',
      1 => 1564577916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d41908fd7b0a4_22677953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6105136015d41908fd67830_08101190', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_6105136015d41908fd67830_08101190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6105136015d41908fd67830_08101190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['search']->value)) {?><h2>Votre recherche : <?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</h2><?php }?>
    <section class="row justify-content-around">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Produits']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <div class="card mb-3" style="width: 18rem;">
              <div class="container">
                <a href="produit.php?produit=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><img class="card-img-top" src="template/img/produits/<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
" alt="Card image cap" style="height: 200px;"></a>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value['nom'];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
                <a href="produit.php?produit=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
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
