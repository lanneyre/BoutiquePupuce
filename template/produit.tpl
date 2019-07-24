{extends file="template/layout.tpl"}
{block name=body}
  <div class="container">
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="template/img/{$product['img']}" class="card-img" alt="{$product['name']}">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{$product['name']}</h5>
            <p class="card-text">{$product['name']}</p>
            <p class="card-text">{$product['prix']} €</p>
            <form action="#" method="post">
              <input type="number" class="form-control" min="0" max="42">
              <input type="button" class="btn btn-outline-primary" value="Ajouter au panier">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h5>Dans la categorie</h5>
    <div class="row justify-content-around">
    {foreach $othersProducts as $key => $product}

        <div class="card mb-3" style="width: 18rem;">
          <div class="container">
            <img class="card-img-top" src="template/img/{$product['img']}" alt="Card image cap" style="height: 200px;">
          </div>
          <div class="card-body">
            <h5 class="card-title">{$product['name']}</h5>
            <p class="card-text">{$product['name']}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
    
    {/foreach}
    </div>
  </div>
{/block}