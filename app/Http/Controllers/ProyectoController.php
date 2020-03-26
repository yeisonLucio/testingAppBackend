<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\CrudRepository;


class ProyectoController extends Controller
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
        $proyectos = $this->CrudRepository->getAll('App\Models\Proyecto');

        return $proyectos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parameters = ['nombre_proyecto','version','descripcion'];
        $proyecto = $this->CrudRepository->insert($request,$parameters,'App\Models\Proyecto',1);
        
        return $proyecto;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = $this->CrudRepository->getOne($id,'App\Models\Proyecto');
        
        return $proyecto;
        
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
        $parameters = ['nombre_proyecto','version','descripcion'];
        $proyecto = $this->CrudRepository->update($request,$parameters,'App\Models\Proyecto',$id);
        return $proyecto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = $this->CrudRepository->delete($id,'App\Models\Proyecto');

        return $proyecto;

        
    }
}
