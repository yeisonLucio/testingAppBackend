<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = "material";
    protected $primaryKey= "id_material";
    protected $fillable = array('ruta','tipo');

    public function historia(){
        return $this->belongsTo('App\Models\Historia');

    }
    public function test(){
        return $this->belongsTo('App\Models\Test');

    }

    public function Escenario(){
        return $this->belongsTo('App\Models\Escenario');

    }
}
