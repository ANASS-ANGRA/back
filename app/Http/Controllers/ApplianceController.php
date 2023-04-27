<?php

namespace App\Http\Controllers;

use App\Models\appliance;
use App\Http\Requests\StoreapplianceRequest;
use App\Http\Requests\UpdateapplianceRequest;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
   public function ajouter(Request $request){
       $appliance = Appliance::create([
        'libelle' => $request->libelle ,
        'type_id' =>$request->type,
        'dbid' => $request->DBID,
        'reference' => $request->reference,
    ]);
   }
   public function tous_appliance(){
      $appliances=appliance::with("type")->get();
      return $appliances;
   }
   public function delet_appliance($id){
        $appliance= appliance::find($id);
        $appliance->delete();
   }

}
