{extends file="template/layout.tpl"}
{block name=body}
  <section class="row">
    <div class="col-6">
      <h5>Mon Profil</h5>
      <form action="" method="post">
        <div class="row">
          <div class="col-6"><label for="name">Nom *</label></div>
          <div class="col-6"><input type="text" id="name" name="name" class="form-control" value="{$userLogin->_name}"></div>
        </div>
        <div class="row">
          <div class="col-6"><label for="email">Email *</label></div>
          <div class="col-6"><input type="email"id="email" name="email" class="form-control" value="{$userLogin->_login}"></div>
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
{/block}