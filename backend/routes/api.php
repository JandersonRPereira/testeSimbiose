<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetDataController;
use App\Models\GetData;

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

Route::get('/teste', function (Request $request) {
    $ret = "Teste de retorno!";
    return $ret;
});
Route::get('/getData', [GetDataController::class, 'getData']);
