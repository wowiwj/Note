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




Route::redirect('/', '/articles', 301);

Auth::routes();

Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth', 'admin']], function () {

    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('users','UsersController@index')->name('admin.users.index');
    Route::get('users/{user}/edit','UsersController@edit')->name('admin.users.edit');
    Route::put('users/{user}','UsersController@update')->name('admin.users.update');
    Route::delete('users/{user}','UsersController@destroy')->name('admin.users.destroy');

});


Route::group(['namespace' => 'Auth'],function (){

    // note.dev/oauth/redirect/driver/github
    Route::get('oauth/callback/driver/{driver}', 'LoginController@handleProviderCallback');
    Route::get('oauth/redirect/driver/{driver}', 'LoginController@redirectToProvider')->name('oauth.redirect');
});


Route::group(['namespace' => 'Web'], function () {

    Route::post('login','SessionsController@store')->name('login');
    Route::post('register','UsersController@store')->name('register');
    Route::get('notifications','NotificationsController@index')->name('notifications.index');
    Route::get('email/verify/{token}',['as'=>'email.verify','uses'=>'UsersController@verify']);



    // 课程系列
    Route::get('series','SeriesController@index')->name('series.index');
    Route::get('series/{series}/{slug?}','SeriesController@show')->name('series.show');
    Route::get('series/{series}/lessons/{lesson}/{slug?}','LessonsController@show')->name('lessons.show');
    Route::get('series/create','SeriesController@create')->name('series.create');


    Route::get('articles', 'ArticlesController@index');
    Route::get('articles/create', 'ArticlesController@create')->name('articles.create');
    Route::get('articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
    Route::post('articles', 'ArticlesController@store')->name('articles.store');
    Route::delete('articles/{article}','ArticlesController@destroy')->name('articles.destroy');

    Route::get('articles/archive/{year}/{month}','ArticlesController@archive');

    Route::get('discussions','DiscussionsController@index')->name('discussions.index');
    Route::get('discussions/create', 'DiscussionsController@create')->name('discussions.create');
    Route::get('discussions/{discussion}/edit', 'DiscussionsController@edit')->name('discussions.edit');
    Route::get('discussions/{discussion}/{slug?}','DiscussionsController@show')->name('discussions.show');


    Route::get('users/{user}','UsersController@show')->name('users.show');
    Route::get('users/{user}/edit','UsersController@edit')->name('users.edit');
    Route::get('users/{user}/editAvatar','UsersController@editAvatar')->name('users.editAvatar');
    Route::put('users/{user}','UsersController@update')->name('users.update');

    Route::get('drafts','DraftsController@index')->name('drafts.index');
    Route::delete('drafts/{draft}','DraftsController@destroy')->name('drafts.destroy');
    Route::get('article/draft/{draft}','DraftsController@show')->name('drafts.show');
    Route::get('article/draft/{draft}/edit','DraftsController@edit')->name('drafts.edit');

    Route::get('categories', 'CategoriesController@show');
    Route::get('categories/create', 'CategoriesController@create');
    Route::post('categories/store', 'CategoriesController@store')->name('categories.store');

    Route::get('articles/{category}', 'ArticlesController@index');
    Route::get('articles/{category}/{article}/{slug?}','ArticlesController@show')->name('articles.show');

    Route::get('special_pages/create','SpecialPagesController@create')->name('special_pages.create');
    Route::get('special_pages/{page}/edit','SpecialPagesController@edit')->name('special_pages.edit');
    Route::delete('special_pages/{page}','SpecialPagesController@destroy')->name('special_pages.destroy');

    Route::get('{name}','SpecialPagesController@show')->name('special_pages.show');

});


