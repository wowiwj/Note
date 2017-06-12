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

    Route::get('articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');

    Route::get('articles/{category}', 'ArticlesController@index');

    Route::get('articles/{category}/{article}','ArticlesController@show');
    Route::post('articles', 'ArticlesController@store')->name('articles.store');
    Route::delete('articles/{article}','ArticlesController@destroy')->name('articles.destroy');
    Route::post('register','UsersController@store')->name('register');
    Route::get('users/{user}','UsersController@show')->name('users.show');
    Route::get('users/{user}/edit','UsersController@edit')->name('users.edit');
    Route::get('users/{user}/editAvatar','UsersController@editAvatar')->name('users.editAvatar');
    Route::put('users/{user}','UsersController@update')->name('users.update');

    Route::post('login','SessionsController@store')->name('login');

    Route::get('email/verify/{token}',['as'=>'email.verify','uses'=>'UsersController@verify']);


    Route::get('categories', 'CategoriesController@index');

    Route::get('categories/create', 'CategoriesController@create');
    Route::post('categories/store', 'CategoriesController@store')->name('categories.store');
    Route::get('tags/create', 'TagsController@create');

    Route::post('tags/store', 'TagsController@store')->name('tags.store');

    Route::post('articles/{article}/comments','CommentsController@store')->name('comments.store');


});


/* Dashboard Index */
Route::group(['prefix' => 'home','namespace' => 'Web','middleware' => ['auth', 'admin']], function () {
    Route::get('{path?}', 'HomeController@index')->where('path', '[\/\w\.-]*');
});






Route::get('/home', 'HomeController@index')->name('home');
