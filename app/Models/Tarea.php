<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = "tarea";
    protected $primaryKey= "id_tarea";
    protected $fillable = array('nombre_tarea',
                                'descripcion',
                                'codigo_tarea',
                                'servidor');

    public function proyecto(){
        return $this->hasMany('App\Models\Proyecto');

    }

    public function material(){
        return $this->hasMany('App\Models\Material');

    }

    public function test(){
        return $this->belongsTo('App\Models\Test');

    }
}
