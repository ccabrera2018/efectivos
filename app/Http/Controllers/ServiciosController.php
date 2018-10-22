<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Servicios;

use DB;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           
           $servicios=Servicios::all();

            return view('servicios.detalles', ['servicios' => $servicios]);

    }

 
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
         $Servicios=DB::table('servicios')->select(['id_servicios','nombre', 'resumen','imagen'])->where('id_servicios', '=', $id)->first();

         $ServicesTotales=DB::table('servicios')->select(['id_servicios','nombre', 'resumen','imagen'])->get();
        
        return view('servicios.detalles', ['servicios'=>$Servicios],['serviciosTotales'=>$ServicesTotales]);
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
