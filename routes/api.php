<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/* Route::group(['middleware' => 'auth:sanctum'], function () {
 */
    Route::resource('categorias', 'App\Http\Controllers\Api\ApicategoriasController');
    Route::resource('productos', 'App\Http\Controllers\Api\ApiproductosController');
    Route::resource('users', 'App\Http\Controllers\Api\ApiusersController');
    Route::resource('ventas', 'App\Http\Controllers\Api\ApiventasController');
    Route::resource('ventasdetalle', 'App\Http\Controllers\Api\ApiventadetalleController');
    Route::resource('typeusers', 'App\Http\Controllers\Api\ApitypeusersController');
    Route::post('logout','App\Http\Controllers\Api\LoginController@logout');
    
/* });
 */


Route::post('login','App\Http\Controllers\Api\LoginController@login');
Route::post('register','App\Http\Controllers\Api\RegisterController@register');