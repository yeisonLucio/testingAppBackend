<?php

namespace App\Http\Controllers;

use App\Repository\CrudRepository;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    protected $CrudRepository;
    public function __construct(CrudRepository $crudRepository){
        $this->CrudRepository = $crudRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tarea = $this->CrudRepository->getAll('App\Models\Tarea'); 

        return $tarea;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parameters = ['nombre_tarea',
                       'codigo_tarea',
                       'descripcion',
                       'servidor',
                       'proyecto_id',
                       'material_id'];
        $tarea = $this->CrudRepository->insert($request,$parameters,'App\Models\Tarea',0);
        
        return $tarea;
    }

    /**Material
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = $this->CrudRepository->getOne($id,'App\Models\Tarea');
        
        return $tarea;
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $parameters = ['nombre_tarea',
        'codigo_tarea',
        'descripcion',
        'servidor',
        'proyecto_id',
        'material_id'];
        $tarea = $this->CrudRepository->update($request,$parameters,'App\Models\Tarea',$id);
        return $tarea; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarea = $this->CrudRepository->delete($id,'App\Models\Tarea');

        return $tarea;

        
    }
}
