<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = "proyecto";
    protected $primaryKey= "id_proyecto";
    protected $fillable = array('nombre_proyecto','version','descripcion');
    protected $hidden = ['created_at','updated_at'];

    public function usuario(){
        return $this->hasMany('App\Models\User','usuario_id','id_proyecto');

    }

    public function tarea(){
        return $this->belongsTo('App\Models\Tarea');

    }
}
