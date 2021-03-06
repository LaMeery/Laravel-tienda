<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    
    public function lineas(){
        return $this->hasMany('App\Models\Linea');
    }
    public function familia(){
        return $this->belongsTo('App\Models\Familia');
    }
}
