<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demandes extends Model
{
    protected $fillable = ['titre','datePub','dateService','lieu','description','montant','categorie','idUser',];
}
