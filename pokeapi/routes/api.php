<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::post('/pokemons/{id}',[PokemonController::class, 'getPokemon']);
    Route::delete('/pokemons/delete/{id}',[PokemonController::class, 'deletePokemon']);
    Route::post('/logout',[AuthController::class, 'logout']);
    Route::post('/user/{id}/getTeams',[UserController::class, 'getTeams']);
});
Route::post('/login',[AuthController::class, 'login']);
Route::get('/pokemons', [PokemonController::class, 'index']);
Route::post('/register',[AuthController::class, 'register']);
