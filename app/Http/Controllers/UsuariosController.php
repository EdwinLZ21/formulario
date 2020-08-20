<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mostrar metodo de entrada
        return view('usuarios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mostrar metodo crear usuarios
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        
        ////////////////////////////////////////////////////////////////////

        //validar los datos
        
        $campos=[

            'Nombres'=>'required|string|max:100',
            'tipodedocumento'=>'required|string',
            'númerodedocumento'=>'required|string|max:15',
            'Correoelectrónico'=>'required|email|max:50',
            'dirección'=>'required|string|max:150',

        ];
        $Mensaje=["required"=>' :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);


        ////////////////////////////////////////////////////////////////////

        //
        $datosUsuario=request()->all();
        $datosUsuario=request()->except('_token');

        usuarios::insert($datosUsuario);

        //return response()->json($datosUsuario);
        //return with ('Mensaje','Usuario agregado correctamente');

        //retornar mensaje de usuario registrado correctamente
      




       

  return ('registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        // 
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
