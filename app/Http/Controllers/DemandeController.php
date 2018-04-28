<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande as Demande;
use Carbon\Carbon;
use DB;

class DemandeController extends Controller
{
    public function view(){
	    $demandes = Demande::all();
	   	return view('demande',array('demandes' => $demandes ));
	}

	public function insertform(){
		return view('demande');
	} 

	public function insert(Request $request){
		$titre = $request->input('titre');
		$datePub = Carbon::now();
		$dateService = $request->input('dateService');
		$lieu = $request->input('lieu');
		$description = $request->input('description');
		$montant = $request->input('montant');
		$categorie = $request->input('categorie');
		$idUser = $request->input('idUser');
		$data=array('titre'=>$titre,'datePub'=>$datePub,'dateService'=>$dateService,'lieu'=>$lieu,'description'=>$description,'montant'=>$montant,'categorie'=>$categorie,'idUser'=>$idUser);
		DB::table('demandes')->insert($data);
		return redirect()->action('DemandeController@demandes');
	}

    public function filter($categorie){
    	$demandes = Demande::orderBy('datePub', 'desc')->where('categorie', '=', $categorie)->get();
		return view('demandes', array('demandes' => $demandes));
    }

    public function demandes(){
    	$demandes = Demande::orderBy('datePub', 'desc')->get();
		return view('demandes', array('demandes' => $demandes));
    }

    public function demandeInfo($id){
    	$demande = Demande::find($id);
    	return view('demandeInfo', array('demande' => $demande));
    }

    public function lastDemandes(){
    	$numberLastDemandes = 4;
    	$demandes = Demande::orderBy('datePub', 'desc')->take($numberLastDemandes)->get();
		return view('index', array('demandes' => $demandes));
    }
}
