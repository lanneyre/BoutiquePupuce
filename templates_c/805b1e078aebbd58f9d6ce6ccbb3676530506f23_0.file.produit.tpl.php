<?php
/* Smarty version 3.1.33-dev-5, created on 2019-08-08 13:57:57
  from 'C:\laragon\www\BoutiquePupuce\template\produit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d4c2a652aebf1_45964691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '805b1e078aebbd58f9d6ce6ccbb3676530506f23' => 
    array (
      0 => 'C:\\laragon\\www\\BoutiquePupuce\\template\\produit.tpl',
      1 => 1565266294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4c2a652aebf1_45964691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1765670185d4c2a65170c11_91770917', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_1765670185d4c2a65170c11_91770917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1765670185d4c2a65170c11_91770917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container">
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="template/img/produits/<?php echo $_smarty_tpl->tpl_vars['product']->value->img;?>
" class="card-img" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value->nom;?>
">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->nom;?>
</h5>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</p>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value->prix;?>
 €</p>
            <form action="addProduits.php" method="post">
              <input type="hidden" name="idProduit" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
              <input type="number" name="qteProduit" class="form-control" min="1" max="42" value="1">
              <input type="submit" class="btn btn-outline-primary" value="Ajouter au panier">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h5>Dans la même categorie</h5>
    <div class="row justify-content-around">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['othersProducts']->value, 'product');
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
    </div>
  </div>
<?php
}
}
/* {/block 'body'} */
}
