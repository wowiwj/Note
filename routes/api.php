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


    Route::post('auth/login','AuthenticateController@login');

    Route::get('articles','ArticlesController@index');
    Route::post('articles','ArticlesController@store');
    Route::get('articles/{article}','ArticlesController@show');
    Route::put('articles/{article}','ArticlesController@update');
    Route::delete('articles/{article}','ArticlesController@destroy');

    Route::get('discussions','DiscussionsController@index');
    Route::post('discussions','DiscussionsController@store');
    Route::get('discussions/{discussion}','DiscussionsController@show');
    Route::put('discussions/{discussion}','DiscussionsController@update');
    Route::delete('discussions/{discussion}','DiscussionsController@destroy');

    Route::post('discussions/{discussion}/best_answer','DiscussionsController@bestAnswer');
    Route::get('discussions/{discussion}/best_answer','CommentsController@bestAnswer');


    Route::post('uploadAvatar','UsersController@uploadAvatar');

    Route::get('categories','CategoriesController@index');
    Route::get('categories/all','CategoriesController@all');


    Route::get('tags','TagsController@index');

    Route::get('drafts/{draft}','DraftsController@show');
    Route::put('drafts/{draft}','DraftsController@update');

    Route::get('articles/{category}/{article}/{slug?}/comments','CommentsController@index');
    Route::get('articles/{category}/{article}/comments','CommentsController@index');
    Route::post('articles/{category}/{article}/{slug?}/comments','CommentsController@store');
    Route::post('articles/{category}/{article}/comments','CommentsController@store');

    Route::get('discussions/{discussion}/{slug?}/comments','CommentsController@discussionComments');
    Route::get('discussions/{discussion}/comments','CommentsController@discussionComments');
    Route::post('discussions/{discussion}/{slug?}/comments','CommentsController@storeDiscussionComments');
    Route::post('discussions/{discussion}/comments','CommentsController@storeDiscussionComments');


    Route::delete('comments/{comment}','CommentsController@destroy');

    Route::post('subscriptions','SubscriptionsController@store');
    Route::delete('subscriptions/{subscription}','SubscriptionsController@destroy');

    Route::post('image/upload','FilesController@ImageUpload');


    Route::get('{type}/{type_id}/favorites','FavoriteController@index');

    Route::post('favorites','FavoriteController@store');
    
    Route::delete('favorites','FavoriteController@destroy');

    Route::post('subscribes','SubscriptionsController@store');

    Route::delete('subscribes','SubscriptionsController@destroy');


    Route::post('special_pages','SpecialPagesController@store');


    Route::get('special_pages/{page}','SpecialPagesController@show');
    Route::put('special_pages/{page}','SpecialPagesController@update');

    Route::get('{name}/comments','CommentsController@pageComments');
    Route::post('{name}/comments','CommentsController@storePageComment');


});
