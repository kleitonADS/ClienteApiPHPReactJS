<?php
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\EstadoController;
use App\Http\Controllers\Api\CidadeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/clientes', [ClienteController::class, 'index']);
Route::put('/clientes/{cliente}', [ClienteController::class, 'update']);
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::get('/cidades', [CidadeController::class, 'index']);
Route::get('/estados', [EstadoController::class, 'index']);

