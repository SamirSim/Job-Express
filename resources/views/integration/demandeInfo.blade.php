<!DOCTYPE html>
<html>
<head>
	<title>Demande</title>
</head>
<body>
	
	<h3>Titre : {{ $demande->titre }}</h2>
	<h3>{{ $demande->utilisateur->nom }} {{ $demande->utilisateur->prenom }}</h3>
	<h3>Categorie : {{ $demande->categorie }}</h3>
	<h3>Lieu : {{ $demande->lieu }}</h3>
	<h3>Montant : {{ $demande->montant }}</h3>
	<h3>Date de publication : {{ $demande->datePub }}</h3>
	<h3>Date de travaille : {{ $demande->dateService }}</h3>
	<h3>Description :</h3>
	<p>{{ $demande->description }}</p>

	@foreach ($demande->offres as $offre)
	<h3>User : {{ $offre->utilisateur->nom }}</h3>
			<h3>Date de publication : {{ $offre->datePub }}</h3>
			<h3>Contenu :</h3>
			<p>{{ $offre->contenu }}</p>
	@endforeach

    <title>Form</title>
	<form action="{{ action('OffreController@insert') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="contenu" placeholder="contenu">
    <input type="hidden" name="idUser" value="6">
    <input type="hidden" name="idDemande" value="{{ $demande->id }}">
     <button type="submit"> OK </button>
	</form>
</body>
</html>