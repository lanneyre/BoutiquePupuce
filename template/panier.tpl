{extends file="template/layout.tpl"}
{block name=body}
  <section class="row">
    <div class="col-8">
      <table class="table table-striped table-hover">
        <thead class="">
          <tr class="bg-secondary text-white">
            <th scope="col">Produits</th>
            <th scope="col">PU</th>
            <th scope="col">Quantité</th>
            <th scope="col">Prix HT</th>
            <th scope="col">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          {foreach $panier as $produits}
          <tr>
            <td>
              <div class="row">
                <div class="col-3"><img src="template/img/produits/{$produits[0]->_img}" alt="{$produits[0]->_nom}" class="imgPanier"></div>
                <div class="col-9">{$produits[0]->_nom}</div> 
              </div>
            </td>
            <td>{number_format($produits[0]->_prix, 2, ',', ' ')} €</td>
            <td>{$produits[1]}</td>
            <td>{number_format($produits[1]*$produits[0]->_prix, 2, ',', ' ')} €</td>
            <td><button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
          </tr>
          {/foreach}
        </tbody>
      </table>
      <input type="button" class="btn btn-primary" value="Continuer mes achats">
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header text-white bg-secondary font-weight-bold">
          Totaux
        </div>
        <div class="card-body">
          <div class="alert alert-primary">Total HT : {number_format($pu, 2, ',', ' ')} €</div>
          <div class="alert alert-warning">TVA ({$tauxTva}%): {number_format($tva, 2, ',', ' ')} €</div>
          <div class="alert alert-danger font-weight-bold">Total TTC : {number_format($ttc, 2, ',', ' ')} €</div>
        </div>
      </div>
       
      <input type="button" class="btn btn-primary" value="Payer">
    </div>
  </section>
  
{/block}