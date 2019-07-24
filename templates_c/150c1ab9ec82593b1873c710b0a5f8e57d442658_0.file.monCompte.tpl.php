<?php
/* Smarty version 3.1.33-dev-5, created on 2019-07-24 10:17:08
  from 'C:\laragon\www\CCI\Boutique\template\monCompte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d383024900e95_17574458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '150c1ab9ec82593b1873c710b0a5f8e57d442658' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\monCompte.tpl',
      1 => 1563963427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d383024900e95_17574458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19507887905d383024900479_09136560', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_19507887905d383024900479_09136560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19507887905d383024900479_09136560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="row">
    <div class="col-6">
      <h5>Mon Profil</h5>
      <form action="" method="post">
        <div class="row">
          <div class="col-6"><label for="name">Nom *</label></div>
          <div class="col-6"><input type="text" id="name" name="name" class="form-control"></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="email">Email *</label></div>
          <div class="col-6"><input type="email"id="email" name="email" class="form-control"></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="pass">Pass *</label></div>
          <div class="col-6"><input type="password" id="pass" name="pass" class="form-control"></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="pass2">Retapez votre pass *</label></div>
          <div class="col-6"><input type="password" id="pass2" name="pass2" class="form-control"></div>
        </div>
        <div class="row">
          <div class="col-6"></div>
          <div class="col-6"><input type="button" id="send" name="send" class="btn btn-outline-primary" value="Modifier"></div>
        </div>
      </form>
    </div>
    <div class="col-6">
      <h5>Historique des commandes</h5>
    </div>
  </section>
<?php
}
}
/* {/block 'body'} */
}
