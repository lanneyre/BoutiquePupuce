	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	  <a class="navbar-brand" href="#"><img src="template/img/Logo.png" alt="Chez Pupuce" id="logo"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="categorie.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Catégories
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	        	{foreach $categories as $categorie}
	          <a class="dropdown-item" href="categorie.php?cat={$categorie['id']}">{$categorie['nom']}</a>
	          {/foreach}
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="panier.php">Panier</a>
	      </li>
	      <li class="nav-item">
	      	{if !$login}
	      		<a class="nav-link" href="#" data-toggle="modal" data-target="#formLogin">Login</a>
	      	{else}
	      		<a class="nav-link" href="monCompte.php">Mon compte</a>
	      	{/if}
	      </li>
	      {if $login}
	      <li class="nav-item">
	      		<a class="nav-link" href="deco.php">Deco</a>
	      </li>
	      {/if}
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Recherche">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
	    </form>
	  </div>
	</nav>
	{if !$login}
		{include file="template/login.tpl"}
	{/if}
	