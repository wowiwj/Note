<?php

use Illuminate\Http\Request;

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


Route::group(['prefix'=>'v1','namespace' => 'Api'],function (){
    Route::post('articles','ArticlesController@store');

    Route::get('categories','CategoriesController@index');
    Route::get('categories/all','CategoriesController@all');

    Route::get('articles/{category}/{article}/comments','CommentsController@index');

    Route::post('articles/{category}/{article}/comments','CommentsController@store');
});
