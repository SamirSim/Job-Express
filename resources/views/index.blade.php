<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		
    
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-grid.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-reboot.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
		
		<title>Index</title>
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
              <a class="nav-link" href="#">Toutes les demandes</a>
            </li>
            <li id="notification-sub-menu" class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#notification-sub-menu" role="button">
                <i class="far fa-bell fa-lg"></i>
                <span class="badge secondary-bg-color">1</span>
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
    
		<header class="bg-cover">
      <div class="overlay">
        <div class="intro text-center">
          <div class="container">
            <h1 class="intro-title text-shadow">Service à domicile entre particuliers !</h1>
            <p>Trouvez la personne qui vous sert en tout moment</p>
            <a data-scroll="true" class="btn" href="#post-job">De quel service avez-vous besoin ?</a>
            
          </div>
        </div>
      </div>
    </header>
    
    <!-- Jobs Section -->
    <section class="jobs">
      <div class="container text-center">
        <div class="jobs-title">
          <h2>Les categories</h2>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-lg-4">
            <a class="link-categories-block" href="">
              <div class="categories-block category-bg bg-category-bricolage"></div>
              <h2 class="category-title">Bricolage</h2>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-4">
            <a class="link-categories-block" href="">
              <div class="categories-block category-bg bg-category-gardening"></div>
              <h2 class="category-title">Transport</h2>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-4">
            <a class="link-categories-block" href="">
              <div class="categories-block category-bg bg-category-removal"></div>
              <h2 class="category-title">Déménagement</h2>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-lg-4">
            <a class="link-categories-block" href="">
              <div class="categories-block category-bg bg-category-cleaning"></div>
              <h2 class="category-title">Ménage</h2>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-4">
            <a class="link-categories-block" href="">
              <div class="categories-block category-bg bg-category-informatique"></div>
              <h2 class="category-title">Informatique</h2>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-4">
            <a class="link-categories-block" href="">
              <div class="categories-block category-bg bg-category-event"></div>
              <h2 class="category-title">Autres</h2>
            </a>
          </div>
        </div>
      </div>
    </section>
    
    <!-- How does it work -->
		<section class="concept">
      <div class="container-fluid text-center">
        <div class="concept-title text-center">
          <h2>Comment ça marche ?</h2>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <span class="bullet-circle-big">1</span>
            <h4>Décrire votre besoin</h4>
            <p>Décrire votre service en remplissant le formulaire automatisé</p>
          </div>
          <div class="col-sm-4">
            <span class="bullet-circle-big">2</span>
            <h4>Consulter les offres</h4>
            <p>Recevoir des offres des jobeurs compétants et consulter leurs profils</p>
          </div>
          <div class="col-sm-4">
            <span class="bullet-circle-big">3</span>
            <h4>Sélectionner un jobeur</h4>
            <p>Sélectionner le jobeur qui vous parait le plus convenable à votre demande</p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Last -->
    <section class="lastRequests">
      <div class="overlay">
        <div class="container">
          <div class="lastRequests-title text-center">
            <h2>Les dernières demandes</h2>
          </div>
          <div class="row">
            @foreach ($demandes as $demande)
              <div class="col-xs-12 col-lg-3">
                <div class="LastRequestItem">
                  <a class="LastRequestItemLink" href="demandeInfo/{{$demande->id}}"></a>
                  <div class="LastRequestItemValues">
                    <div class="LastRequestItemDate">{{$demande->dateService}}</div>
                    <div class="LastRequestItemBudget">{{$demande->montant}}</div>
                  </div>
                  <div class="LastRequestItemID">
                    <div class="LastRequestItemAvatar avatar-mini">
                      <img src="{{ asset($demande->utilisateur->photo) }}" alt="">
                    </div>
                    <div class="LastRequestItemInfos">
                      <div class="LastRequestItemName">{{$demande->utilisateur->prenom}}</div>
                    </div>
                  </div>
                  <div class="LastRequestItemTitle">{{$demande->titre}}</div>
                  <div class="LastRequestItemLocation">
                    <i class="fa fa-map-marker"></i>
                    {{$demande->lieu}}
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    
    <!-- Features -->
    <section class="features">
      <div class="container-fluid text-center">
        <div class="features-title">
          <h2>Pourqoui nous ?</h2>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <span class="feature-icon"><i class="fas fa-bolt"></i></span>
            <h4>Facilité</h4>
            <p>JobExpress vous permet de proposer votre demande et de trouver un jobeur proche de vous en quelques clics</p>
          </div>
          <div class="col-sm-4">
            <span class="feature-icon">2</span>
            <h4>Rapidité</h4>
            <p>JobExpress vous permet de trouver un jobeur dans un délai de temps minimum grâce au système de la géolocalisation</p>
          </div>
          <div class="col-sm-4">
            <span class="feature-icon"><i class="fas fa-bolt"></i></span>
            <h4>Efficacité</h4>
            <p>JobExpress vous permet de trouvez une solution à tous vos besoins et amélirer votre quotidien</p>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div></div>
            <ul></ul>
          </div>
          <div class="col-md-3">
            <h4 class="footer-title-section">Découvrir</h4>
            <ul>
              <li>Tous les services</li>
              <li>Toutes les villes</li>
              <li>Tous les jobeurs</li>
              <li>Tous les jobs</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4 class="footer-title-section">Top recherches</h4>
            <ul>
              <li>Motchotcho</li>
              <li>Motchotcho</li>
              <li>Motchotcho</li>
              <li>Motchotcho</li>
              <li>Motchotcho</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4 class="footer-title-section">Informations utiles</h4>
            <ul>
              <li>Motchotcho</li>
              <li>Motchotcho</li>
              <li>Motchotcho</li>
              <li>Motchotcho</li>
              <li>Motchotcho</li>
            </ul>
          </div>
        </div>
      </div>
    </footer> 
    
		<!-- Scripts -->
		<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('/js/popper.min.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	</body>
</html>