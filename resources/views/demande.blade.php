<!doctype html>
<html>
	<head>
		<meta charset="utf-8">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset('css/jquery.datetimepicker.css') }}">

		<title>Demander un service</title>
	</head>
	<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">Navbar</a>
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
    
		<header class="asking-post-cover">
      <div class="overlay">
        <div class="intro text-center">
          <div class="container">
            <h1 class="intro-title text-shadow">Demander un service</h1>
          </div>
        </div>
      </div>
    </header>
    
  
    <div class="how-post-steps text-center hidden-xs">
      <div class="container">
        <div class="row">
          <div class="how-post-step col-xs-12 col-sm-4">
            <span class="bullet-circle">1</span> 
            <p class="how-post-subtitle">Décrire votre besoin</p>
          </div>
          <div class="how-post-step col-xs-12 col-sm-4">
            <span class="bullet-circle">2</span> 
            <p class="how-post-subtitle">Consulter les offres</p>
          </div>
          <div class="how-post-step col-xs-12 col-sm-4">
            <span class="bullet-circle">3</span> 
            <p class="how-post-subtitle">Sélectionner un jobeur</p>
          </div>
        </div>
      </div>
    </div>

    
    <!-- Asking post -->
		<section>
      <div class="asking-post">
        <div class="container">
          <div class="asking-post-title">
            <h2></h2>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="card-head">
                <h5 class="card-title">Détail du besoin</h5>
              </div>
              <form action="{{ action('DemandeController@insert') }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label class="control-label" for="job_categorie">Catégorie du travail</label>
                    <select class="form-control" id="job_categorie" name="categorie">
                      <option>Bricolage</option>
                      <option>Jardinage</option>
                      <option>Déménagement</option>
                      <option>Ménage</option>
                      <option>Garde d'enfants</option>
                      <option>Animaux</option>
                      <option>Informatique</option>
                      <option>Conciergerie</option>
                    </select> 
                  </div>
                  <div class="form-group col-sm-6">
                    <label class="control-label" for="job_title">Titre du job</label>
                    <input placeholder="De quoi avez-vous besoin ?" maxlength="80" class="form-control" data-component="field-validator" data-summary-field="" size="80" type="text" name="titre" id="job_title">
                  </div>
                </div>
                  
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label" for="job_location">Adresse complète</label>
                      <input name="lieu" type="text" id="job_location" placeholder="Lieu du travail" data-provide="typeahead" data-address="" data-summary-field="" data-field-type="autocomplete" data-validation-type="required-if" data-target="[data-field=&quot;address_name&quot;]" data-value="" autocomplete="off" size="30" class="form-control">
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label class="control-label" for="job_date">Date</label>
                        <input name="dateService" type="date" id="" placeholder="Quand vous en avez besoin ?" data-provide="typeahead" data-address="" data-summary-field="" data-field-type="autocomplete" data-validation-type="required-if" data-target="[data-field=&quot;address_name&quot;]" data-value="" autocomplete="off" size="30" class="form-control">
                      </div>
                      <div class="form-group col-sm-6">
                        <label class="control-label" for="job_budget">Budget</label>
                        <input name="montant" type="text" id="job_budget" placeholder="Budget estimé" data-provide="typeahead" data-address="" data-summary-field="" data-field-type="autocomplete" data-validation-type="required-if" data-target="[data-field=&quot;address_name&quot;]" data-value="" autocomplete="off" size="30" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="job_description">Description</label>
                      <textarea name="description" id="job_description" placeholder="Décrivez votre besoin" data-provide="typeahead" data-address="" data-summary-field="" data-field-type="autocomplete" data-validation-type="required-if" data-target="[data-field=&quot;address_name&quot;]" data-value="" autocomplete="off" size="30" class="form-textarea" rows="4"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div id="map"></div>
                  </div>                  
                </div> 
                <!-- user id -->
                <input type="hidden" name="idUser" value="6">
                <button type="submit" class="btn btn-post">Demander</button>
              </form>
            </div>

          </div>
        </div>
      </div>
    </section>
  
    
		<!-- Scripts -->
		<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('js/jquery.datetimepicker.full.min.js') }}"></script>
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		

	</body>
</html>