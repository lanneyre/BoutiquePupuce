<?php
/* Smarty version 3.1.33-dev-5, created on 2019-07-24 10:33:09
  from 'C:\laragon\www\CCI\Boutique\template\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d3833e56e2b80_22945837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a74210c5be2138bf419ef5398eacf8d8a951e22f' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\accueil.tpl',
      1 => 1563964384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3833e56e2b80_22945837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6142250875d3833e55b01b4_64401719', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_6142250875d3833e55b01b4_64401719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6142250875d3833e55b01b4_64401719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="row justify-content-around">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Products']->value, 'products', false, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value => $_smarty_tpl->tpl_vars['products']->value) {
?>

            <div class="card mb-3" style="width: 18rem;">
              <div class="container">
                <img class="card-img-top" src="template/img/<?php echo $_smarty_tpl->tpl_vars['products']->value['prod1']['img'];?>
" alt="Card image cap" style="height: 200px;">
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['products']->value['prod1']['name'];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['products']->value['prod1']['name'];?>
</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </section>

    <section id="blocTopVentes">
        <div id="topVentes" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#topVentes" data-slide-to="0" class="active"></li>
            <li data-target="#topVentes" data-slide-to="1"></li>
            <li data-target="#topVentes" data-slide-to="2"></li>
            <li data-target="#topVentes" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topVentes']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
            <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['value']->value['active']) {?>active<?php }?>">
              <img class="d-block w-100" src="template/img/<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
">
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
          <a class="carousel-control-prev" href="#topVentes" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#topVentes" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>
<?php
}
}
/* {/block 'body'} */
}
