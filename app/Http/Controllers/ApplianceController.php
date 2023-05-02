<?php

namespace App\Http\Controllers;

use App\Models\appliance;
use App\Http\Requests\StoreapplianceRequest;
use App\Http\Requests\UpdateapplianceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplianceController extends Controller
{
   public function ajouter(Request $request){
    $app = Appliance::where('libelle_appliance', $request->libelle)->first();

    if (isset($app->libelle_appliance)) {
        $app->libelle_appliance = $request->libelle;
        $app->type_id = $request->type;
        $app->dbid = $request->DBID;
        $app->reference = $request->reference;
        $app->save();
    } else {
        $appliance = Appliance::create([
            'libelle_appliance' => $request->libelle,
            'type_id' => $request->type,
            'dbid' => $request->DBID,
            'reference' => $request->reference
        ]);
    }
   }
   public function tous_appliance(){
      $appliances=appliance::with("type")->get();
      return $appliances;
   }
   public function delet_appliance($id){
        $appliance= appliance::find($id);
        $appliance->delete();
   }
   public function appliance($id){
    $appliance = DB::select("select * FROM appliances , clients ,povs WHERE appliances.id=$id AND appliances.id=povs.appliance_id AND povs.client_id= clients.id;");
    return $appliance;
   }

   public function recherche_appliance($appliance, $client){
    $app = DB::select("select * FROM appliances, clients, povs WHERE appliances.libelle_appliance='$appliance' AND clients.libelle='$client' AND appliances.id=povs.id AND povs.id=clients.id");
    return $app;
}


}
