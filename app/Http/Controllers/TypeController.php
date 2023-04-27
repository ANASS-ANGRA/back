<?php

namespace App\Http\Controllers;

use App\Models\type;
use App\Http\Requests\StoretypeRequest;
use App\Http\Requests\UpdatetypeRequest;

class TypeController extends Controller
{
   public function type_all(){
      $type=type::all();
      return $type;
   }
}
