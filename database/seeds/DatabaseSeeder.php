<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/** table utilisateurs **/
    	DB::table('utilisateurs')->delete();
       	DB::table('utilisateurs')->insert([ 
       		['nom' => "Abboud", 'prenom' => "Bakir", 'dateNaissance' => "", 'photo' => "/imgs/photo1.jpg"],
       		['nom' => "Kellou", 'prenom' => "Brahim", 'dateNaissance' => "", 'photo' => "/imgs/photo2.jpg"],
       		['nom' => "Ahmed Bacha", 'prenom' => "Ibrahim", 'dateNaissance' => "", 'photo' => "/imgs/photo3.jpg"],
       		['nom' => "Si-mohammed", 'prenom' => "Samir", 'dateNaissance' => "", 'photo' => "/imgs/photo4.jpg"],
       		['nom' => "Ferhati", 'prenom' => "Amina", 'dateNaissance' => "", 'photo' => "/imgs/photo5.jpg"],
       		['nom' => "Maafi", 'prenom' => "Hanene",'dateNaissance' => "", 'photo' => "/imgs/photo6.jpg"]       			 
       	]);

       	/** table demandes **/
       	DB::table('demandes')->delete();
       	DB::table('demandes')->insert([ 
       		['titre' => "Cherche Menuiserie - Huisserie - Agencement", 'lieu' => "Beaulieu, 16004, Alger", 'description' => "Bonjour, je cherche un voisin pour m'aider à poser une terrasse en bois exotique", 'montant' => "7500 DA", 'categorie' => "Bricolage", 'idUser' => 2, 'datePub' => "2018-04-22", 'dateService' => "2018-05-03"],
       		['titre' => "Cherche Plomberie - Installation sanitaire", 'lieu' => "Hussein Dey, 16003, Alger", 'description' => "Bonjour, J ai des robinets exterieurs qui ont gelé cet hiver donc je cherche un plombier pour les changer ", 'montant' => "1500 DA", 'categorie' => "Bricolage", 'idUser' => 1, 'datePub' => "2018-04-25", 'dateService' => "2018-04-28"],
       		['titre' => "Cherche Peinture - Tapisserie", 'lieu' => "Sidi Mhamed, 16012, Alger", 'description' => "Bonjour, je recherche une personne pour peindre la cuisine", 'montant' => "120000 DA", 'categorie' => "Bricolage", 'idUser' => 3, 'datePub' => "2018-04-12", 'dateService' => "2018-05-15"],
       		['titre' => "Cherche Déménagement", 'lieu' => "Ain Naadja, 16065, Alger", 'description' => "Bonjour, J'aurai besoin d'une aide pour un déménagement qui aura lieu le samedi 19 mai. Le déménagement se fera de Méru à St Crépin Ibouvillers. C'est un petit déménagement.", 'montant' => "2000 DA", 'categorie' => "Demenagement", 'idUser' => 5, 'datePub' => "2018-04-19", 'dateService' => "2018-05-19"],
       		['titre' => "Cherche Déménagement", 'lieu' => "Bab El Oued, 16008, Alger", 'description' => "Bonjour, je recherche une personne costaude pour 2 heures de déménagement le 14/05/2018", 'montant' => "3000 DA", 'categorie' => "Demenagement", 'idUser' => 4, 'datePub' => "2018-04-26", 'dateService' => "2018-05-14"],
       	]);

       	/** table offres **/
       	DB::table('offres')->delete();
       	DB::table('offres')->insert([ 
       		['contenu' => "Bonjour, je suis intressée par votre offre. En faite, je serais disponible pour le 2018-05-04 si ca vous intresse", 'idDemande' => 1, 'idUser' => 5, 'datePub' => "2018-04-24"],
       		['contenu' => "Salut,je viens de voir votre demande et je veux juste savoir est-ce-que vous possedez cette terrasse ou voulez vous que je la ramene? ", 'idDemande' => 1, 'idUser' => 4, 'datePub' => "2018-04-25"],
       	]);
    }
}
