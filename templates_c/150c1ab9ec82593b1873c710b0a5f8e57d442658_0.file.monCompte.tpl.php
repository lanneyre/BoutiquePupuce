<?php
/* Smarty version 3.1.33-dev-5, created on 2019-07-25 09:13:17
  from 'C:\laragon\www\CCI\Boutique\template\monCompte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d3972adc0b370_96600296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '150c1ab9ec82593b1873c710b0a5f8e57d442658' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\monCompte.tpl',
      1 => 1564045996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3972adc0b370_96600296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16806496055d3972adc06198_22788030', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_16806496055d3972adc06198_22788030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16806496055d3972adc06198_22788030',
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
          <div class="col-6"><input type="text" id="name" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userLogin']->value->_name;?>
"></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="email">Email *</label></div>
          <div class="col-6"><input type="email"id="email" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userLogin']->value->_login;?>
"></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="pass">Pass *</label></div>
          <div class="col-6"><input type="password" id="pass" name="pass" class="form-control" placeholder="******"></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="pass2">Retapez votre pass *</label></div>
          <div class="col-6"><input type="password" id="pass2" name="pass2" class="form-control" placeholder="******"></div>
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
