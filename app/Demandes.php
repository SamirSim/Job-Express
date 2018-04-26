<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demandes extends Model
{
    protected $fillable = ['contenu', 'datePub', 'idDemande','idUser',];
}
