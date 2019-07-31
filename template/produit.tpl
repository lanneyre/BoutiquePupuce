{extends file="template/layout.tpl"}
{block name=body}
  <div class="container">
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="template/img/produits/{$product->_img}" class="card-img" alt="{$product->_nom}">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{$product->_nom}</h5>
            <p class="card-text">{$product->_description}</p>
            <p class="card-text">{$product->_prix} €</p>
            <form action="addProduits.php" method="post">
              <input type="hidden" name="idProduit" value="{$product->_id}">
              <input type="number" name="qteProduit" class="form-control" min="1" max="42" value="1">
              <input type="submit" class="btn btn-outline-primary" value="Ajouter au panier">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h5>Dans la même categorie</h5>
    <div class="row justify-content-around">
    {foreach $othersProducts as $product}

        <div class="card mb-3" style="width: 18rem;">
          <div class="container">
            <a href="produit.php?produit={$product['id']}"><img class="card-img-top" src="template/img/produits/{$product['img']}" alt="Card image cap" style="height: 200px;"></a>
          </div>
          <div class="card-body">
            <h5 class="card-title">{$product['nom']}</h5>
            <p class="card-text">{$product['description']}</p>
            <a href="produit.php?produit={$product['id']}" class="btn btn-primary">Détails du produit</a>
          </div>
        </div>
    
    {/foreach}
    </div>
  </div>
{/block}