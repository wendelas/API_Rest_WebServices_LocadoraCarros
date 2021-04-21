<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*--------------------------------------------------------------------------
|                        API Routes
|--------------------------------------------------------------------------
|Aqui é onde pode registrar rotas de API para aplicativo.*/

Route::middleware('auth:api')->get('/user', function (Request $request) {return $request->user();});

Route::get('/', function  () {      return ['cheagamos ate aqui' => 'SIM'];});


// resourse:: cria todas as rotas para cada metodo do controlador

Route::apiResource('cliente', 'ClienteController');
Route::apiResource('carro', 'CarroController');
Route::apiResource('locacao', 'LocacaoController');
Route::apiResource('marca', 'MarcaController');
Route::apiResource('modelo', 'ModeloController');
