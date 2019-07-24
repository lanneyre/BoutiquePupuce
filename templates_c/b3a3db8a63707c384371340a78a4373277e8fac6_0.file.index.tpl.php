<?php
/* Smarty version 3.1.33-dev-5, created on 2019-07-24 07:02:15
  from 'C:\laragon\www\CCI\Boutique\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d3802779b6498_78942107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a3db8a63707c384371340a78a4373277e8fac6' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\index.tpl',
      1 => 1563951733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3802779b6498_78942107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!doctype html>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7913510825d3802779a45b7_36055021', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_7913510825d3802779a45b7_36055021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7913510825d3802779a45b7_36055021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h1>Hello, <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
!</h1>
    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Products']->value, 'products', false, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value => $_smarty_tpl->tpl_vars['products']->value) {
?>
    	<h2><?php echo $_smarty_tpl->tpl_vars['categorie']->value;?>
</h2>
    	<div class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
			<div class="col-4">
				<h3><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['value']->value['name'], 'UTF-8');?>
 (<?php echo $_smarty_tpl->tpl_vars['value']->value['prix'];?>
€)</h3>
				<img src="template/img/<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
" style="width: 100%" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
">
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    	</div>
    	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php
}
}
/* {/block 'body'} */
}
