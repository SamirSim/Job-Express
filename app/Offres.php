<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offres extends Model
{
    protected $fillable = ['titre', 'datePub', 'dateService', ' lieu', 'description', 'montant', 'categorie', 'idUser',];

}
