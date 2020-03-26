<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = "test";
    protected $primaryKey= "id_test";
    protected $fillable = array('nombre_test','estado');

    public function user(){
        return $this->hasMany('App\Models\User');

    }

    public function tarea(){
        return $this->hasMany('App\Models\tarea');

    }

    public function material(){
        return $this->hasMany('App\Models\Material');

    }

    public function Escenario(){
        return $this->belongsTo('App\Models\Escenario');

    }

}
