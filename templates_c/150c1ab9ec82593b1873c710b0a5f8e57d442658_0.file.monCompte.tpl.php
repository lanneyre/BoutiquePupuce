<?php
/* Smarty version 3.1.33-dev-5, created on 2021-05-12 08:42:57
  from 'C:\laragon\www\CCI\Boutique\template\monCompte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_609b95110f12d9_99683291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '150c1ab9ec82593b1873c710b0a5f8e57d442658' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\monCompte.tpl',
      1 => 1587479388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609b95110f12d9_99683291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_267658794609b95110dec47_58017993', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/layout.tpl");
}
/* {block 'body'} */
class Block_267658794609b95110dec47_58017993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_267658794609b95110dec47_58017993',
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
          <div class="col-6"><input type="text" id="name" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userLogin']->value->name;?>
"></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="email">Email *</label></div>
          <div class="col-6"><input type="email"id="email" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userLogin']->value->login;?>
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
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commandes']->value, 'commande');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['commande']->value) {
?>
        <div class="row">
          <div class="col-9"><?php ob_start();
echo $_smarty_tpl->tpl_vars['commande']->value['id'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 - <?php ob_start();
echo $_smarty_tpl->tpl_vars['commande']->value['date'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</div>
          <div class="col-3 text-center"><a href="generatePdf.php?idCommande=<?php ob_start();
echo $_smarty_tpl->tpl_vars['commande']->value['id'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" target="_blank"><img src="template/img/pdf.jpg" class="w-25" alt="Votre facture"></a></div>
        </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </section>
<?php
}
}
/* {/block 'body'} */
}
