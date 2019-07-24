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
	        	{foreach $Products as $categorie => $products}
	          <a class="dropdown-item" href="categorie.php?cat={$categorie}">{$categorie}</a>
	          {/foreach}
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="panier.php">Panier</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Login</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>