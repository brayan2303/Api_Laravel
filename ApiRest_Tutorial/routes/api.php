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

Route::get('category','App\Http\Controllers\categoriesController@getcategory');

Route::get('category/{id}','App\Http\Controllers\categoriesController@getCategoryForId');

Route::post('addCategory', 'App\Http\Controllers\categoriesController@insertCategory');

Route::put('updateCategory/{id}','App\Http\Controllers\categoriesController@updateCategory');

Route::delete('deleteCategory/{id}','App\Http\Controllers\categoriesController@deleteCategoty');