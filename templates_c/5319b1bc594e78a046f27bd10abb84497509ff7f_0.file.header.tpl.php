<?php
/* Smarty version 3.1.33-dev-5, created on 2021-05-12 08:17:26
  from 'C:\laragon\www\CCI\Boutique\template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_609b8f16a79a28_37054789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5319b1bc594e78a046f27bd10abb84497509ff7f' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\header.tpl',
      1 => 1564477272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/login.tpl' => 1,
  ),
),false)) {
function content_609b8f16a79a28_37054789 (Smarty_Internal_Template $_smarty_tpl) {
?>	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	  <a class="navbar-brand" href="#"><img src="template/img/Logo.png" alt="Chez Pupuce" id="logo"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="categorie.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Catégories
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
	          <a class="dropdown-item" href="categorie.php?cat=<?php echo $_smarty_tpl->tpl_vars['categorie']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categorie']->value['nom'];?>
</a>
	          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="panier.php">Panier</a>
	      </li>
	      <li class="nav-item">
	      	<?php if (!$_smarty_tpl->tpl_vars['login']->value) {?>
	      		<a class="nav-link" href="#" data-toggle="modal" data-target="#formLogin">Login</a>
	      	<?php } else { ?>
	      		<a class="nav-link" href="monCompte.php">Mon compte</a>
	      	<?php }?>
	      </li>
	      <?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
	      <li class="nav-item">
	      		<a class="nav-link" href="deco.php">Deco</a>
	      </li>
	      <?php }?>
	    </ul>
	    <form class="form-inline my-2 my-lg-0" method="POST" action="recherche.php">
	      <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Recherche" value="<?php if (!empty($_smarty_tpl->tpl_vars['search']->value)) {
echo $_smarty_tpl->tpl_vars['search']->value;
}?>" name="recherche">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
	    </form>
	  </div>
	</nav>
	<?php if (!$_smarty_tpl->tpl_vars['login']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender("file:template/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>
	<?php }
}
