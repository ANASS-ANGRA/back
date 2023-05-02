<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Http\Requests\StoreclientRequest;
use App\Http\Requests\UpdateclientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
   public function new_client(Request $request){
    $cli=client::where('libelle' , $request->nom )->first();
    if(isset($cli->libelle)){
       $cli->activite=$request->activite;
       $cli->secteur=$request->type;
       $cli->save();
    }else {
       $client=new client ;
       $client->libelle=$request->nom;
       $client->activite=$request->activite;
       $client->secteur=$request->type;
       $client->save();
    }
   }

   public function  clients(){
     $clients=client::all();
     return $clients;
   }

    public function delete_client($id){
      $client = client::find($id);
      $client->delete();
    }

    public function client_contact($id){
        $client = client::with("contact")->find($id);
        return $client;
    }
}
