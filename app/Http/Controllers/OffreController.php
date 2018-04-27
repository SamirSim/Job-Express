<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Offre as Offre;
use Carbon\Carbon;
use DB;

class OffreController extends Controller
{
    public function insert(Request $request){
	$contenu = $request->input('contenu');
	$datePub = Carbon::now();//->toDateTimeString();
	$idDemande = $request->input('idDemande');
	$idUser = $request->input('idUser');
	$data=array('contenu'=>$contenu,'datePub'=>$datePub,'idDemande'=>$idDemande,'idUser'=>$idUser);
	DB::table('offres')->insert($data);
	//echo "Record inserted successfully.<br/>";
	return redirect()->action(
		'DemandeController@demandeInfo',['id'=>$idDemande]
	);
	}
}
