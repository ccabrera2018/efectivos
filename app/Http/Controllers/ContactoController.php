<?php

namespace App\Http\Controllers;

use App\Contactos;
use Mail;
use Session;
use Redirect;
use Illuminate\Http\Request;


class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            return view('home.contactanos');
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
          return view('home.contactanos');
          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $rules = [
            'name' => 'required',
            'email' => 'required|email|',
            'telefono' => 'required',
            'direccion' => 'required',
        ];

        $messages = [
    'name.required' => 'El nombre es requerido.',
    'email.required' =>'El correo es requerido',
    'email.email' =>'El correo electronico es invalido',
    'telefono.required' => 'El telefono es requerido',
    'direccion.required' => 'La direccion es requerido',
   
    ];

       

        $this->validate($request, $rules, $messages);
        $contacto= new Contactos;

        $contacto->nombre=$request->get('name');

        $contacto->correo=$request->get('email');

        $contacto->telefono=$request->get('telefono');

        $contacto->direccion=$request->get('direccion');

        $contacto->save();

        Mail::send('email.contato',$request->all(),function($msj)  use ($contacto){

                $msj->subject('EFECTIVOS EN EL CONTROL DE PLAGAS');
                $msj->to($contacto->correo,'cliente');

                Session::flash('success', 'EN UNOS MOMENTO UNO DE NUESTROS ESPECIALISTAS SE PONDRA EN CONTACTO CON USTED');
                
               

        });

         return redirect::to('/contactanos');
      


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
