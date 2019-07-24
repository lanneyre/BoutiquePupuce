{extends file="template/layout.tpl"}
{block name=body}
  <section class="row">
    <div class="col-8">
      <table>
        <thead>
          <tr>
            <th>Produits</th>
            <th>Quantité</th>
            <th>Prix</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          {foreach $panier as $produits}
          <tr>
            <td>$produits['name']</td>
            <td>$produits['nb']</td>
            <td>$produits['prix']</td>
            <td>del</td>
          </tr>
          {/foreach}
        </tbody>
      </table>
      <input type="button" class="btn btn-primary" value="Continuer mes achats">
    </div>
    <div class="col-4">
      Total HT : <br>
      TVA : <br>
      Total TTC : <br> 
      <input type="button" class="btn btn-primary" value="Payer">
    </div>
  </section>
{/block}