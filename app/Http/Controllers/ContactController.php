<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Http\Requests\StorecontactRequest;
use App\Http\Requests\UpdatecontactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function delet($id){
       $contact=contact::find($id);
       $contact->delete();
   }
   public function edit(Request $request){
    $contact=contact::find($request->id);
      if(isset($contact->id)){
        $contact->nom=$request->nom;
        $contact->prenom=$request->prenom;
        $contact->fonction=$request->function;
        $contact->email=$request->email;
        $contact->telephon=$request->telephon;
        $contact->save();
      }
   }
   public function ajouter(Request $request){
       $contact=new contact;
       $contact->client_id=$request->client_id;
       $contact->nom=$request->nom;
       $contact->prenom=$request->prenom;
       $contact->fonction=$request->function;
       $contact->email=$request->email;
       $contact->telephon=$request->telephon;
       $contact->save();
   }
}
