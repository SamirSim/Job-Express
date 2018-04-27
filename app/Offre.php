<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    public function utilisateur(){
    	return $this->belongsTo('App\Utilisateur','idUser' ,'id');

    }
    public function demande(){
    	return $this->belongsTo('App\Demande','idDemande' ,'id');
    }
}
