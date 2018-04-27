<!doctype html>
<html lang="{{ config('app.locale') }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>

      <!-- Fonts -->
      
   </head>
      <body>
    
     
     <title>Form</title>
	<form action="{{ action('DemandeController@insert') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="titre" placeholder="titre">
    <input type="date" name="dateService" placeholder="dateService">
    <input type="text" name="lieu" placeholder="lieu">
    <input type="text" name="description" placeholder="description">
    <input type="text" name="montant" placeholder="montant">
    <input type="text" name="categorie" placeholder="categorie">
    <SELECT  type="text" name="categorie" size="1">
<OPTION>Ménage
<OPTION>Bricolage
</SELECT>
    <input type="hidden" name="idUser" value="105">
     <button type="submit" >Envoyer le message</button>
	</form>
     
  </div>


   

   </body>
</html>