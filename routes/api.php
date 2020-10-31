<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('credit','App\Http\Controllers\creditcontroller@credit');
Route::get('credit/{id}','App\Http\Controllers\creditcontroller@creditbyid');

Route::post('credit','App\Http\Controllers\creditcontroller@creditCreate');

Route::put('credit/{task}','App\Http\Controllers\creditcontroller@creditEdit');

Route::delete('credit/{task}','App\Http\Controllers\creditcontroller@creditDelete');
