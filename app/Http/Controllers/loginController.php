<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $credenciales = $request->validate([
            'usuario' => ['required'],
            'contraseña' => ['required'],
        ]);        

        
        $login = DB::table("login")->select("usuario","contraseña")->get(10,10);
        
        return $login;

        /*
        return response()->json([
            'Mensaje' => 'Bienvenido',
            'response' => $login,
        ]);*/
 
        
  
        

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
