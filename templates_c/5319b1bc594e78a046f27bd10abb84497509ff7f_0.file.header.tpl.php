<?php
/* Smarty version 3.1.33-dev-5, created on 2019-07-24 09:56:52
  from 'C:\laragon\www\CCI\Boutique\template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d382b6478acf2_06929542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5319b1bc594e78a046f27bd10abb84497509ff7f' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\header.tpl',
      1 => 1563962211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d382b6478acf2_06929542 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Products']->value, 'products', false, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value => $_smarty_tpl->tpl_vars['products']->value) {
?>
	          <a class="dropdown-item" href="categorie.php?cat=<?php echo $_smarty_tpl->tpl_vars['categorie']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['categorie']->value;?>
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
	        <a class="nav-link" href="#">Login</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav><?php }
}
