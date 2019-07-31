<?php
/* Smarty version 3.1.33-dev-5, created on 2019-07-30 09:41:57
  from 'C:\laragon\www\CCI\Boutique\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33-dev-5',
  'unifunc' => 'content_5d4010e503a844_43562293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e361b880329eb369e163009f134bf75b92293706' => 
    array (
      0 => 'C:\\laragon\\www\\CCI\\Boutique\\template\\login.tpl',
      1 => 1564479594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4010e503a844_43562293 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal" id="formLogin" tabindex="-1" role="dialog" aria-labelledby="LoginTitre" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginTitre">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <aside class="col-sm-6">
            <div class="card">
              <article class="card-body">
                <h4 class="card-title mb-4 mt-1">Se connecter</h4>
                <form method="post" action="traitementLogin.php">
                  <input type="hidden" name="actionLogin" id="actionLogin" value="">
                  <div class="form-group">
                    <label>Votre email</label>
                    <input name="email" class="form-control" placeholder="Email" type="email">
                  </div> <!-- form-group// -->
                  <div class="form-group">
                    <a class="float-right" href="#">Mot de passe oublié ?</a>
                    <label>Votre mot de passe</label>
                    <input name="pass" class="form-control" placeholder="******" type="password">
                  </div> <!-- form-group// --> 
                  <div class="form-group"> 
                    <div class="checkbox">
                      <label> <input type="checkbox"> se souvenir de moi </label>
                    </div> <!-- checkbox .// -->
                  </div> <!-- form-group// -->  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Se connecter  </button>
                  </div> <!-- form-group// -->                          
                </form>
              </article>
            </div> <!-- card.// -->
          </aside> <!-- col.// -->
          <aside class="col-sm-6">
            <div class="card">
              <article class="card-body">
                <h4 class="card-title text-center mb-4 mt-1">S'inscrire</h4>
                <hr>
                <form method="post" action="#">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                      </div>
                      <input name="" class="form-control" placeholder="Email" type="email">
                    </div> <!-- input-group.// -->
                  </div> <!-- form-group// -->
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                      </div>
                      <input class="form-control" placeholder="******" type="password">
                    </div> <!-- input-group.// -->
                  </div> <!-- form-group// -->
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> S'inscrire  </button>
                  </div> <!-- form-group// -->
                </form>
              </article>
            </div> <!-- card.// -->
          </aside> <!-- col.// -->
        </div> <!-- row.// -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>  
    </div>
  </div>
</div><?php }
}
