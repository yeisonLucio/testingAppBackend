<?php

namespace App\Http\Controllers;

use App\Repository\CrudRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
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
        
        $materiales = $this->CrudRepository->getAll('App\Models\Material');

        return $materiales;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ruta){
            $extencionArchivo = $request->file('ruta')->extension();
            $archivo = $request->file('ruta')->storeAs('public','material'.time().'.'.$extencionArchivo);
            $url = Storage::url($archivo);
            $request->ruta = $url;

            $parameters = ['ruta','tipo'];
            $material = $this->CrudRepository->insert($request,$parameters,'App\Models\Material',0);
            return $material;
        }else{
            return response()->json(['mensaje'=>'No se adjunto un archivo']);
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Material = $this->CrudRepository->getOne($id,'App\Models\Material');
        
        return $Material;
        
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
        $parameters = ['ruta','tipo'];
        $Material = $this->CrudRepository->update($request,$parameters,'App\Models\Material',$id);
        return $Material;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Material = $this->CrudRepository->delete($id,'App\Models\Material');

        return $Material;

        
    }
}
