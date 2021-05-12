<?php
/* Smarty version 3.1.33-dev-5, created on 2021-05-12 08:19:43
  from 'C:\laragon\www\CCI\Boutique\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_609b8f9f139d72_08714957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0889bf56ace7d2e6d5c9aa9f6f59f65da00696c' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\layout.tpl',
      1 => 1620807582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/header.tpl' => 1,
    'file:template/footer.tpl' => 1,
  ),
),false)) {
function content_609b8f9f139d72_08714957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/8c91069ed9.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="template/css/style.css">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_616564198609b8f9f127aa5_84857167', 'titre');
?>
</title>
  </head>
  <body>
    <main>
      <?php $_smarty_tpl->_subTemplateRender("file:template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <section class="container-fluid" id="content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1802449496609b8f9f12e939_06805805', 'body');
?>

      </section>
      <?php if (!empty($_smarty_tpl->tpl_vars['msgPanier']->value) && isset($_smarty_tpl->tpl_vars['msgtype']->value) && $_smarty_tpl->tpl_vars['msgtype']->value == "addOk") {?>
          <div class="modal" tabindex="-1" role="dialog" id="msgPanier">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['msgPanier']->value;?>
</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Continuer mes achats</button>
                  <a href="panier.php"><button type="button" class="btn btn-secondary">Aller vers mon panier</button></a>
                </div>
              </div>
            </div>
          </div>
      <?php }?>
      <?php $_smarty_tpl->_subTemplateRender("file:template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php echo '<script'; ?>

              src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="template/js/script.js"><?php echo '</script'; ?>
>
    <?php if (!empty($_smarty_tpl->tpl_vars['msgPanier']->value)) {?>
    <?php echo '<script'; ?>
>
      $('#msgPanier').modal('show');
    <?php echo '</script'; ?>
>
    <?php }?>
  </body>
</html><?php }
/* {block 'titre'} */
class Block_616564198609b8f9f127aa5_84857167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_616564198609b8f9f127aa5_84857167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'titre'} */
/* {block 'body'} */
class Block_1802449496609b8f9f12e939_06805805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1802449496609b8f9f12e939_06805805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
