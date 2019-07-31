<!-- Modal -->
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
</div>