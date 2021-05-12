{extends file="template/layout.tpl"}

{block name=body}
    <section class="row justify-content-around">
        {foreach $categories as $categorie}
          <div class="card mb-3" style="width: 18rem;">
              <div class="container">
                <a href="categorie.php?cat={$categorie['id']}"><img class="card-img-top" src="template/img/categories/{$categorie['img']}" alt="Card image cap" style="height: 200px;"></a>
              </div>
              <div class="card-body">
                <a href="categorie.php?cat={$categorie['id']}" class="btn btn-outline-primary btn-block">{$categorie['nom']}</a>
              </div>
            </div>
        {/foreach}
    </section>

    <section id="blocTopVentes">
        <div id="topVentes" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#topVentes" data-slide-to="0" class="active"></li>
            <li data-target="#topVentes" data-slide-to="1"></li>
            <li data-target="#topVentes" data-slide-to="2"></li>
            <li data-target="#topVentes" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            {foreach $topVentes as $key => $value}
            <div class="carousel-item {if $key == $topVentesActive}active{/if}">
              <img class="d-block w-100" src="template/img/produits/{$value['img']}" alt="{$value['nom']}">
            </div>
            {/foreach}
          </div>
          <a class="carousel-control-prev" href="#topVentes" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#topVentes" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>
{/block}

{block name=titre}{$titre}{/block}