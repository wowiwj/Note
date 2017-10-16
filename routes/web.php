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

//    return view('admin.home.index');

    return redirect('articles');

});


Route::get('/demo', function () {

    return view('demo');
});


Auth::routes();

Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth', 'admin']], function () {

    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('users','UsersController@index')->name('admin.users.index');
    Route::get('users/{user}/edit','UsersController@edit')->name('admin.users.edit');
    Route::put('users/{user}','UsersController@update')->name('admin.users.update');
    Route::delete('users/{user}','UsersController@destroy')->name('admin.users.destroy');

});


Route::group(['namespace' => 'Web'], function () {



//    Route::get('login',function (){
//        return '1';
//    });



    Route::post('login','SessionsController@store')->name('login');

    Route::get('articles', 'ArticlesController@index');

    Route::get('articles/create', 'ArticlesController@create');

    Route::get('articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');







    Route::post('articles', 'ArticlesController@store')->name('articles.store');
    Route::delete('articles/{article}','ArticlesController@destroy')->name('articles.destroy');
    Route::post('register','UsersController@store')->name('register');
    Route::get('users/{user}','UsersController@show')->name('users.show');
    Route::get('users/{user}/edit','UsersController@edit')->name('users.edit');
    Route::get('users/{user}/editAvatar','UsersController@editAvatar')->name('users.editAvatar');
    Route::put('users/{user}','UsersController@update')->name('users.update');



    Route::get('email/verify/{token}',['as'=>'email.verify','uses'=>'UsersController@verify']);


    Route::get('categories', 'CategoriesController@index');

    Route::get('categories/create', 'CategoriesController@create');
    Route::post('categories/store', 'CategoriesController@store')->name('categories.store');
    Route::get('tags/create', 'TagsController@create');

    Route::post('tags/store', 'TagsController@store')->name('tags.store');

    Route::post('articles/{article}/comments','CommentsController@store')->name('comments.store');


    Route::get('articles/{category}', 'ArticlesController@index');
    Route::get('articles/{category}/{article}','ArticlesController@show');

    Route::get('special_pages/create','SpecialPagesController@create')->name('special_pages.create');
    Route::get('special_pages/{page}/edit','SpecialPagesController@edit')->name('special_pages.edit');
    Route::delete('special_pages/{page}','SpecialPagesController@destroy')->name('special_pages.destroy');




    Route::get('{name}','SpecialPagesController@show')->name('special_pages.show');




});





/* Dashboard Index */






//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
