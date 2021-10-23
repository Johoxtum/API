<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\login;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function autenticar(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string',
            'password' => 'required|string'
        ]);


        $consulta = "select * from dysy.login where usuario='$request->usuario' and contraseña = '$request->password'";
        $consulta1 = DB::select(DB::raw($consulta));

        if(empty($consulta1)){
            $consulta1 = "El usuario o contraseña no corresponden.";
        }

        return json_encode(
            array(
                'status' => 200,
                'response' => array(
                    'mensaje' => $consulta1
                )
            )
        );

    }
        

     public function registrar(Request $request){

        $credenciales = $request->validate([
            'usuario' => ['required'],
            'contraseña' => ['required'],
        ]);   
        $usuario = login::create($request->all());

        if ($usuario != '') {

            return response()->json([

                'Mensaje' => 'El usuario ha sido creado correctamente'
    
            ] ); 
        }
        else if($usuario==null) {

            return response()->json([

                'Mensaje' => 'Por favor ingrese los campos solicitados'
    
            ] );

        }
       


     }
     
     
    
}
