{extends file="template/layout.tpl"}
{block name=body}
    {if !empty($search)}<h2>Votre recherche : {$search}</h2>{/if}
    <section class="row justify-content-around">
        {foreach $Produits as $product}
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
    </section>
{/block}