{extends file="template/layout.tpl"}
{block name=body}
    <section class="row justify-content-around">
        {foreach $ProductsCat as $categorie => $products}
            <div class="card mb-3" style="width: 18rem;">
              <div class="container">
                <img class="card-img-top" src="template/img/{$products['img']}" alt="Card image cap" style="height: 200px;">
              </div>
              <div class="card-body">
                <h5 class="card-title">{$products['name']}</h5>
                <p class="card-text">{$products['name']}</p>
                <a href="produit.php?produit={$products['id']}" class="btn btn-primary">Détails du produit</a>
              </div>
            </div>
        {/foreach}
    </section>
{/block}