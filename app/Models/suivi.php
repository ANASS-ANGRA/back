<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suivi extends Model
{
    use HasFactory;

    function type_presentatio(){
        return $this->belongsTo("type_presentation");
    }
}
