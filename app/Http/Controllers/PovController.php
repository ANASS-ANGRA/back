<?php

namespace App\Http\Controllers;

use App\Models\pov;
use App\Http\Requests\StorepovRequest;
use App\Http\Requests\UpdatepovRequest;
use Illuminate\Http\Request;

class PovController extends Controller
{
    public function ajouter_pov(Request $request){
        $p=pov::where('libelle_pov' , $request->libelle)->first();
        if(isset($p->libelle_pov)){
            $p->appliance_id=$request->appliance;
            $p->client_id=$request->client;
            $p->date_debut=$request->date_d;
            $p->date_fin=$request->date_f;
            $p->description=$request->descreption;
            $p->compte_manager=$request->compte;
            $p->ingenier_cybersecurite=$request->ingeneur;
            $p->analyse_cybersecurite=$request->analyse;
            $p->save();
        }else{
        $pov=new pov;
        $pov->libelle_pov=$request->libelle;
        $pov->appliance_id=$request->appliance;
        $pov->client_id=$request->client;
        $pov->date_debut=$request->date_d;
        $pov->date_fin=$request->date_f;
        $pov->description=$request->descreption;
        $pov->compte_manager=$request->compte;
        $pov->ingenier_cybersecurite=$request->ingeneur;
        $pov->analyse_cybersecurite=$request->analyse;
        $pov->save();
        }
    }
    public function all_pov(){
        $povs=pov::with("client")->with("appliance")->get();
        return $povs;
    }
    public function delet_pov($id){
        $pov=pov::find($id);
        $pov->delete();
    }

    public function info_pov($id){
        $pov=pov::with("client")->with("appliance")->with("science")->with("suivi")->find($id);
        return $pov;
    }
}
