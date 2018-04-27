<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande as Demande;

class DemandeController extends Controller
{
    public function demandes(){
    	$demandes = Demande::all();
		return view('demandes', array('demandes' => $demandes));
    }

    public function demandeInfo($id){
    	$demande = Demande::find($id);
    	return view('demandeInfo', array('demande' => $demande));
    }
}
