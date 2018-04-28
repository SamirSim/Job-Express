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
		
		<title>Détail de la demande</title>
	</head>
	<body>
    
    <section class="RequestDetail">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="RequestDetail-item">
              <div class="RequestDetail-itemValues">
                <div class="RequestDetail-itemDate">{{$demande->datePub}}</div>
                <div class="RequestDetail-itemLabel">{{$demande->montant}}</div>
              </div>
              <div class="RequestDetail-itemId">
                <div class="RequestDetail-itemAvatar">
                  <img width="100%" height="100%" src="{{ asset($demande->utilisateur->photo) }}" alt="">
                </div>
                <div class="RequestDetail-itemInfo">{{$demande->utilisateur->nom}} {{$demande->utilisateur->prenom}}</div>
              </div>
              <div class="RequestDetail-itemTitle">{{$demande->titre}}</div>
              <div class="RequestDetail-itemDescription">{{$demande->description}}</div>
              <div class="RequestDetail-itemButton">
                <button class="btn btn-demande">Postuler une offre</button>
              </div>
              <div class="RequestDetail-itemBottom">
                <div class="RequestDetail-itemLocation">
                  <i class="fa fa-1x fa-map-marker"></i>
                  {{$demande->lieu}}  /    
                  <i class="far fa-calendar"></i>
                  {{$demande->dateService}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5"></div>
        </div>
      </div>
    </section>
    
    
    
    <section class="AllOffers">
      <div class="container">
        <div class="AllOffers-title text-center">
          <h2>Toutes les offres</h2>
        </div>
        <div class="ListOffers">
        @foreach($demande->offres as $offre)
          <article class="requestItem">
            <div class="requestItemValues">
              <div class="requestItemDate">{{$offre->datePub}}</div>
            </div>
            <div class="requestItemID">
              <div class="requestItemAvatar">
                <img width="100%" height="100%" src="{{ asset($offre->utilisateur->photo) }}" alt="">
              </div>
              <div class="requestItemInfos">
                <div class="requestItemName">{{ $offre->utilisateur->nom }} {{ $offre->utilisateur->prenom }}</div>
                <div class="requestItemDescription">{{ $offre->contenu }}</div>
              </div>
            </div>
          </article>
        @endforeach
        </div>
      </div>
    </section>

    <section class="AddComment">
      <div class="container">
        <div class="form-group">
          <form action="{{ action('OffreController@insert') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="idUser" value="6">
            <input type="hidden" name="idDemande" value="{{ $demande->id }}">
            <label class="control-label" for="job_description">Ajouter votre offre</label>
            <textarea name="contenu" id="job_description" placeholder="" data-provide="typeahead" data-address="" data-summary-field="" data-field-type="autocomplete" data-validation-type="required-if" data-target="[data-field=&quot;address_name&quot;]" data-value="" autocomplete="off" size="30" class="form-textarea" rows="4"></textarea>
            <button type="submit">OK</button>
          </form>
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