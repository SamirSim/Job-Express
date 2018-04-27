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
</body>
</html>