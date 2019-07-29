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
                <div class="col-3"><a href="produit.php?produit={$produits[0]->_id}"><img src="template/img/produits/{$produits[0]->_img}" alt="{$produits[0]->_nom}" class="imgPanier"></a></div>
                <div class="col-9"><a href="produit.php?produit={$produits[0]->_id}">{$produits[0]->_nom}</a></div> 
              </div>
            </td>
            <td>{number_format($produits[0]->_prix, 2, ',', ' ')} €</td>
            <td>
              <form action="updateQte.php" method="POST">
                <input type="hidden" name="idProduit" value="{$produits[0]->_id}">
                <input type="number" name="qteProduit" value="{$produits[1]}" min="0" max="42" class="form-control updateQte">
              </form>
              
            </td>
            <td>{number_format($produits[1]*$produits[0]->_prix, 2, ',', ' ')} €</td>
            <td><a href="delProduit.php?id={$produits[0]->_id}"><button type="button" class="btn btn-outline-danger" ><i class="fas fa-trash-alt"></i></button></a></td>
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