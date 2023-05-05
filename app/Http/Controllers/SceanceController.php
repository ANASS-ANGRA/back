<?php

namespace App\Http\Controllers;

use App\Models\sceance;
use App\Http\Requests\StoresceanceRequest;
use App\Http\Requests\UpdatesceanceRequest;
use Illuminate\Http\Request;
class SceanceController extends Controller
{

    public function ajouter(Request $request){
        $sceance = new sceance ;
        $sceance->date_sceance=$request->date;
        $sceance->resumer=$request->resumer;
        $sceance->participant = $request->participant;
        $sceance->pov_id = $request->pov;
        $sceance->save();
    }
    public function edit(Request $request){
        $sceance = sceance::find($request->id);
        if(isset($sceance->id)){
            $sceance->date_sceance=$request->date;
          $sceance->resumer=$request->resumer;
          $sceance->participant = $request->participant;
           $sceance->save();
        }
    }
    public function delet($id){
        $sceance = sceance::find($id);
        $sceance->delete();
    }
}
