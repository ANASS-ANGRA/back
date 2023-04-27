<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appliance extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'type_id', 'dbid', 'reference', 'disponabilite'];

    function type(){
        return $this->belongsTo(type::class);
    }
}
