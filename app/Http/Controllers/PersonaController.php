<?php

namespace App\Http\Controllers;
use App\Models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function mostrar(Request  $request){


        $resultado = persona::all();
    
        return response()->json([
    
            'Mensaje' => 'Datos de los cliente:',
            'response' => $resultado,
    
            ] );
     
    }
    
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $clientes = persona::all(); //muestreme los clientes
            return \response($clientes);
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            
            $request-> validate([
    
                'nombres' => 'required',
                'apellidos' => 'required',
                'id_tipo_documento' => 'required',
                'numero_documento' => 'required|unique:persona,numero_documento',

                
            ]);
            
    
            $cliente = persona::create($request->all());
            return response()->json([
    
                'Mensaje' => 'El cliente ha sido guardado correctamente'
    
            ] );
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(persona $cliente)
        {
            return response ()->json([
                'cliente:'=> $cliente
            ]);
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
           return [
            'nombre' => 'required',
            'id_tipo_documento' => 'required',
            'numero_cedula' => 'required|unique:cliente,numero_cedula',
           ];
           $cliente -> update($request->all());
           return response()->json([
               'Mensaje' => 'Cliente actualizado correctamente'
           ]);
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(persona $cliente)
        {
            $cliente -> delete();
            return response()->json([
    
                'Mensaje' => 'Cliente eliminado correctamente'
    
            ] ); 
        }
}
