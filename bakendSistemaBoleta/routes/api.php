<?php
use App\Http\Controllers\BoletosController;
use App\Http\Controllers\ClientesController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('boletos', [BoletosController::class,'index']);
Route::post('boletos', [BoletosController::class,'store']);
Route::post('GuardarCliente', [ClientesController::class,'store']);