<?php 
namespace App\Repository;

use Illuminate\Support\Facades\Auth;
use App\Models\Material;
class CrudRepository {

    public function insert($data){

       
        $material = new Material();

        $material->tipo = $data->tipo;
        $material->ruta = $data->ruta;
        $material->save();

        return response()->json(['status' => 'success'], 200);

    }

}