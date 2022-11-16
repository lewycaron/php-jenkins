<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/profille', function (Request $request) {
    return response(['foo' => [
        'adsa' => 'bar'
    ]]);
});

Route::post('/usuario', [UsuarioController::class, 'cadastrarUsuario']);
