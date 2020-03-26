<?php

namespace App\Http\Controllers;

use App\Repository\CrudRepository;
use Illuminate\Http\Request;

class EscenarioController extends Controller
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
        $escenario = $this->CrudRepository->getAll('App\Models\Escenario');

        return $escenario;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->estado){
            

        }
        $parameters = ['titulo',
                       'resultado_actual',
                       'resultado_previsto',
                       'pasos_para_reproducir',
                       'severidad_error',
                       'nota_adicional',
                       'estado',
                       'test_id',
                       'material_id'];

        $escenario = $this->CrudRepository->insert($request,$parameters,'App\Models\Escenario',0);
        
        return $escenario;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $escenario = $this->CrudRepository->getOne($id,'App\Models\Escenario');
        
        return $escenario;
        
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
        $parameters = ['titulo',
                       'resultado_actual',
                       'resultado_previsto',
                       'pasos_para_reproducir',
                       'severidad_error',
                       'nota_adicional',
                       'estado',
                       'test_id',
                       'material_id'];
        $escenario = $this->CrudRepository->update($request,$parameters,'App\Models\Escenario',$id);
        return $escenario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escenario = $this->CrudRepository->delete($id,'App\Models\Escenario');

        return $escenario;

        
    }
}
