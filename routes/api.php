<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cliente',[PersonaController::class,'index']);
Route::get('/cliente/mostrar', [PersonaController::class,'mostrar']);
Route::post('/cliente/crear', [PersonaController::class,'store']);
Route::delete('/cliente/eliminar/{cliente}', [PersonaController::class,'destroy']);
Route::get('/cliente/consultar/{cliente}', [PersonaController::class,'show']);
Route::put('/cliente/actualizar/{cliente}', [PersonaController::class,'update']);


Route::post('/cliente/login', [loginController::class,'autenticar']);
Route::post('/cliente/registrar', [loginController::class,'registrar']);
