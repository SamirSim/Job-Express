<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    public function utilisateur(){
    	return $this->belongsTo('App\Utilisateur','idUser' ,'id');
    }
    public function offres(){
    	return $this->hasMany('App\Offre','idDemande' ,'id');
    }
}
