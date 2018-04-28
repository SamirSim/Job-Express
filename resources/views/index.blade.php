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
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/logo.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto navbar-white">
            <li class="nav-item active">
              <a class="nav-link" href="/">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/demandeInsertForm">Demander un service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tousLesDemandes">Toutes les demandes</a>
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
            <button data-scroll="true" class="btn btn-intro" href="#post-job">De quel service avez-vous besoin ?</button>
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
                  <a class="LastRequestItemLink" href="/demandeInfo/{{$demande->id}}"></a>
                  <div class="LastRequestItemValues">
                    <div class="LastRequestItemDate">{{$demande->dateService}}</div>
                    <div class="LastRequestItemBudget">{{$demande->montant}}</div>
                  </div>
                  <div class="LastRequestItemID">
                    <div class="LastRequestItemAvatar avatar-mini">
                      <img width="100%" height="100%" src="{{ asset($demande->utilisateur->photo) }}" alt="">
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
          <h2>Pourquoi nous ?</h2>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <span class="feature-icon ease">
              <svg style="height: 70px;" aria-hidden="true" data-prefix="fal" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-check fa-w-14 fa-2x"><path fill="currentColor" d="M413.505 91.951L133.49 371.966l-98.995-98.995c-4.686-4.686-12.284-4.686-16.971 0L6.211 284.284c-4.686 4.686-4.686 12.284 0 16.971l118.794 118.794c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-11.314-11.314c-4.686-4.686-12.284-4.686-16.97 0z" class=""></path></svg>
            </span>
            <h4>Facilité</h4>
            <p>JobExpress vous permet de proposer votre demande et de trouver un jobeur proche de vous en quelques clics</p>
          </div>
          <div class="col-sm-4">
            <span class="feature-icon speed">
              <svg style="height: 70px;" aria-hidden="true" data-prefix="fal" data-icon="tachometer" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-tachometer fa-w-18 fa-2x"><path fill="currentColor" d="M365.42 136.945c-8.319-2.99-17.482 1.322-20.475 9.635l-51.013 141.704C256.145 284.81 224 314.519 224 352c0 35.346 28.654 64 64 64s64-28.654 64-64c0-21.976-11.081-41.36-27.956-52.884l51.011-141.696c2.992-8.315-1.322-17.482-9.635-20.475zM288 384c-17.645 0-32-14.355-32-32s14.355-32 32-32 32 14.355 32 32-14.355 32-32 32zm0-352C128.942 32 0 160.942 0 320c0 48.556 12.023 94.3 33.246 134.429A48.018 48.018 0 0 0 75.693 480h424.613a48.02 48.02 0 0 0 42.448-25.571C563.977 414.3 576 368.556 576 320c0-159.058-128.942-288-288-288zm226.466 407.469a15.983 15.983 0 0 1-14.16 8.531H75.693a15.983 15.983 0 0 1-14.16-8.531C42.68 403.819 32 363.175 32 320 32 178.677 146.473 64 288 64c141.323 0 256 114.472 256 256 0 40.599-9.481 81.553-29.534 119.469z" class=""></path></svg>
            </span>
            <h4>Rapidité</h4>
            <p>JobExpress vous permet de trouver un jobeur dans un délai de temps minimum grâce au système de la géolocalisation</p>
          </div>
          <div class="col-sm-4">
            <span class="feature-icon">
              <svg style="height: 70px;" aria-hidden="true" data-prefix="fal" data-icon="bolt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-bolt fa-w-10 fa-1x "><path fill="currentColor" d="M186.071 32c10.515 0 18.18 9.991 15.453 20.149L168.268 176h103.678c12.176 0 19.904 13.181 13.965 23.809L133.967 471.798A16.033 16.033 0 0 1 119.983 480c-10.146 0-18.187-9.689-15.457-20.074L153.926 272H48.004c-9.409 0-16.819-8.12-15.928-17.511L51.792 46.49A15.934 15.934 0 0 1 67.72 32h118.351m0-32H67.72C42.965 0 22.271 18.825 19.934 43.469l-19.716 208C-2.453 279.642 19.729 304 48.004 304h64.423l-38.85 147.79C65.531 482.398 88.788 512 119.983 512c16.943 0 33.209-9.005 41.919-24.592l151.945-271.993C331.704 183.461 308.555 144 271.945 144h-61.951l22.435-83.552C240.598 30.026 217.678 0 186.071 0z" class=""></path></svg>
            </span>
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
            <div style="width: 200px; padding: 30px 0;">
              <img src="{{ asset('/img/logo2.png') }}" style="width: 100%">
            </div>
            <ul style="display: inline-block; padding: 0 27px;">
              <li style="display: inline-block; margin-right: 10px"><i class="fab fa-facebook fa-2x"></i></li>
              <li style="display: inline-block; margin-right: 10px"><i class="fab fa-instagram fa-2x"></i></li>
              <li style="display: inline-block; margin-right: 10px"><i class="fab fa-twitter fa-2x"></i></li>
              <li style="display: inline-block; margin-right: 10px"><i class="fab fa-youtube fa-2x"></i></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4 class="footer-title-section">Découvrir</h4>
            <ul>
              <li>Demander un service</li>
              <li>Trouver un job</li>
              <li>Avis clients</li>
              <li>Tous les services</li>
              <li>Toutes les villes</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4 class="footer-title-section">Top recherches</h4>
            <ul>
              <li>Bricolage</li>
              <li>Déménagement</li>
              <li>Alger</li>
              <li>Mecanicien</li>
              <li>Plombier</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4 class="footer-title-section">Informations utiles</h4>
            <ul>
              <li>Qui sommes-nous ?</li>
              <li>Centre d'aide</li>
              <li>Règles de diffusion des annonces</li>
              <li>Assurances</li>
              <li>Plan de site</li>
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
    <script src="{{ asset('js/main.js') }}"></script>
	</body>
</html>