<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escenario extends Model
{
    protected $table = "escenario";
    protected $primaryKey= "id_escenario";
    protected $fillable = array('titulo',
                                'resultado_actual',
                                'resultado_previsto',
                                'pasos_para_reproducir',
                                'severidad_error',
                                'nota_adicional',
                                'estado');
                                
    public function test(){
        return $this->hasMany('App\Test');

    }

    public function material(){
        return $this->hasMany('App\Material');

    }
}
