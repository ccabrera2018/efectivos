<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Servicios;


class HomeController extends Controller
{
    
    public function index()
    {
        $servicio=DB::table('servicios')->select(['id_servicios','nombre', 'resumen','imagen'])->where('id_servicios', '<=', 4)->get();

        $home=DB::table('home')->select(['id_home','titulo', 'descripcion','imagen'])->where('id_home', '<=', 3)->get();

        return view('home.home',['services'=> $servicio],['homes'=> $home]);
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
