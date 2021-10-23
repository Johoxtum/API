<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PersonaController;

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

Route::get('/cliente',[ClienteController::class,'index']);
Route::get('/cliente/mostrar', [ClienteController::class,'mostrar']);
Route::post('/cliente/crear', [ClienteController::class,'store']);
Route::delete('/cliente/eliminar/{cliente}', [ClienteController::class,'destroy']);
Route::get('/cliente/consultar/{cliente}', [ClienteController::class,'show']);
Route::put('/cliente/actualizar/{cliente}', [ClienteController::class,'update']);

Route::post('/cliente/login', [loginController::class,'autenticar']);
Route::post('/cliente/registrar', [loginController::class,'registrar']);

Route::post('/persona/funciona', [PersonaController::class,'saludar']);
