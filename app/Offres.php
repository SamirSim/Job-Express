<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offres extends Model
{
    protected $fillable = ['contenu','datePub','idDemande','idUser',];
}
