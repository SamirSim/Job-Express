<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap CSS -->
		
		<link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/bootstrap-grid.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/bootstrap-reboot.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/main.css') }}">
		
		<title>Toutes les demandes</title>
	</head>
	<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto navbar-white">
            <li class="nav-item active">
              <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Demander un service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tous les demandes</a>
            </li>
            <li id="notification-sub-menu" class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#notification-sub-menu" role="button">
                <i class="fa fa-bell-o fa-lg"></i> 
                <span class="badge">1</span>
                <span class="caret"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Utilisateur
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Paramèteres</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Déconnexion</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
		<header class="all-requests-cover">
      <div class="overlay">
        <div class="intro text-center">
          <div class="container">
            <h1 class="intro-title text-shadow">Tous les demandes</h1>
          </div>
        </div>
      </div>
    </header>

    <!-- All Requests -->
		<section class="all-requests">
      <div class="container">
        <div class="all-requests-title text-center">
          <h2></h2>
        </div>
        <div class="row">
          <div class="all-requests-filter-panel col-xs-12 col-sm-12 col-md-3">
            <div class="filter-categorie">
              <h3 class="filter-title">Les catégories de travail</h3>
              <ul class="filter-list">
                <li><a href="/tousLesDemandes/Bricolage">Bricolage</a></li>
                <li><a href="/tousLesDemandes/Demenagement">Déménagement</a></li>
                <li><a href="#">Transport</a></li>
                <li><a href="#">Informatique</a></li>
                <li><a href="#">Ménage</a></li>
                <li><a href="#">Autres</a></li>
              </ul>
            </div>
            <div class="filter-city">
              <h3 class="filter-title">Les villes</h3>
              <ul class="filter-list">
                <li><a href="#">Alger</a></li>
                <li><a href="#">Oran</a></li>
                <li><a href="#">Constantine</a></li>
                <li><a href="#">Annaba</a></li>
                <li><a href="#">Bordj bou arrérige</a></li>
                <li><a href="#">Ghardaia</a></li>
                <li><a href="#">Tizi-Ouzou</a></li>
                <li><a href="#">Ain Temouchent</a></li>
                <li><a href="#">Setif</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-9">
          @foreach ($demandes as $demande)
            <article class="requestItem">
              <a class="requestItemLink" href="/demandeInfo/{{ $demande->id }}"></a>
              <div class="requestItemValues">
                <div class="requestItemDate">{{ $demande->datePub }}</div>
                <div class="requestItemLabel">{{ $demande->montant }}</div>
              </div>
              <div class="requestItemID">
                <div class="requestItemAvatar">
                  <img src="{{ asset($demande->utilisateur->photo) }}" alt="">
                </div>
                <div class="requestItemInfos">
                  <div class="requestItemName">{{ $demande->utilisateur->nom }} {{ $demande->utilisateur->prenom }}</div>
                  <h3 class="requestItemTitle">{{ $demande->titre }}</h3>
                  <div class="requestItemDescription">{{ $demande->description }}</div>
                  <div class="requestItemBottom">
                    <div class="requestItemLocation">
                      <i class="fa fa-1x fa-map-marker"></i>
                      {{ $demande->lieu }}
                    </div>
                    
                  </div>
                </div>
              </div>
            </article>
          @endforeach
          </div>
        </div>
      </div>
    </section>
    
		<!-- Scripts -->
		<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('/js/popper.min.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	</body>
</html>