<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return redirect('articles');

    //return view('welcome');
});


Route::get('/demo', function () {

    return view('demo');

    //return view('welcome');
});

Auth::routes();

Route::group(['namespace' => 'Web'], function () {
    Route::get('articles', 'ArticlesController@index');
    Route::get('articles/create', 'ArticlesController@create');
    Route::get('categories/{category}/articles/{article}','ArticlesController@show');
    Route::post('articles', 'ArticlesController@store')->name('articles.store');
    Route::delete('articles/{article}','ArticlesController@destroy')->name('articles.destroy');
    Route::post('register','UsersController@store');
    Route::get('users/{user}','UsersController@store')->name('users.show');

    Route::post('login','SessionsController@store');

    Route::get('email/verify/{token}',['as'=>'email.verify','uses'=>'UsersController@verify']);


    Route::get('categories', 'CategoriesController@index');

    Route::get('categories/create', 'CategoriesController@create');
    Route::post('categories/store', 'CategoriesController@store')->name('categories.store');
    Route::get('tags/create', 'TagsController@create');

    Route::post('tags/store', 'TagsController@store')->name('tags.store');

    Route::post('articles/{article}/comments','CommentsController@store')->name('comments.store');


});


Route::get('/home', 'HomeController@index')->name('home');
