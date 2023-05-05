<?php

namespace App\Http\Controllers;

use App\Models\suivi;
use App\Http\Requests\StoresuiviRequest;
use App\Http\Requests\UpdatesuiviRequest;
use Illuminate\Http\Request;

class SuiviController extends Controller
{
  public function delete($id){
      $suivi = suivi::find($id);
      $suivi->delete();
  }
}
