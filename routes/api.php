<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LivroController;
use App\Http\Controllers\Api\AutorController;
use App\Http\Controllers\Api\AssuntoController;
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

/*
 * Livros
 */
Route::get('livro/list', [LivroController::class, 'getAllLivros']);
Route::post('livro/store', [LivroController::class, 'store']);
Route::put('livro/update/{id}', [LivroController::class, 'update']);
Route::delete('livro/destroy/{id}', [LivroController::class, 'destroy']);


/*
 * Autor
 */
Route::get('autor/list', [AutorController::class, 'getAll']);
Route::post('autor/store', [AutorController::class, 'store']);
Route::put('autor/update/{id}', [AutorController::class, 'update']);
Route::delete('autor/destroy/{id}', [AutorController::class, 'destroy']);


/*
 * Assunto
 */
Route::get('assunto/list', [AssuntoController::class, 'getAll']);
Route::post('assunto/store', [AssuntoController::class, 'store']);
Route::put('assunto/update/{id}', [AssuntoController::class, 'update']);
Route::delete('assunto/destroy/{id}', [AssuntoController::class, 'destroy']);
