<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\CrudRepository;

class TestController extends Controller
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
        $tests = $this->CrudRepository->getAll('App\Models\Test');

        return $tests;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parameters = ['nombre_test','estado','historia_id','material_id'];
        $test = $this->CrudRepository->insert($request,$parameters,'App\Models\Test',1);
        
        return $test;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = $this->CrudRepository->getOne($id,'App\Models\Test');
        
        return $test;
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
        $parameters = ['nombre_test','estado','historia_id','material_id'];
        $test = $this->CrudRepository->update($request,$parameters,'App\Models\Test',$id);
        return $test;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = $this->CrudRepository->delete($id,'App\Models\Test');

        return $test;
    }
}
