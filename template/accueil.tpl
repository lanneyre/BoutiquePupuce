{extends file="template/layout.tpl"}
{block name=body}
    <section class="row justify-content-around">
        {foreach $Products as $categorie => $products}

            <div class="card mb-3" style="width: 18rem;">
              <div class="container">
                <img class="card-img-top" src="template/img/{$products['prod1']['img']}" alt="Card image cap" style="height: 200px;">
              </div>
              <div class="card-body">
                <h5 class="card-title">{$products['prod1']['name']}</h5>
                <p class="card-text">{$products['prod1']['name']}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
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
            <div class="carousel-item {if $value['active']}active{/if}">
              <img class="d-block w-100" src="template/img/{$value['img']}" alt="{$value['name']}">
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