<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;


    protected $primaryKey='numero';

    public function lineas(){
        return $this->hasMany('App\Models\Linea');
    }
    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }
}
