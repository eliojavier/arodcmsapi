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

Route::post('users/login', 'UserController@login');
Route::get('articles/permalink/{permalink}', 'ArticleController@getByPermalink');
//Route::get('articles/permalink/p', 'ArticleController@getByPermalinkTest');

Route::group(['prefix' => 'admin', 'middleware' => ['auth:api', 'isSuperAdmin']], function () {
    //USER CONTROLLER
    Route::get('users', 'UserController@index');
    Route::post('users', 'UserController@store');
    Route::get('users/{user}', 'UserController@show');
    Route::put('users/{user}', 'UserController@update');
    Route::delete('users/{user}', 'UserController@updateStatus');

    //ARTICLE CONTROLLER
    Route::get('articles', 'ArticleController@index');
    Route::get('articles/{article}', 'ArticleController@show');

    //CATEGORY CONTROLLER
    Route::get('categories', 'CategoryController@index');
    Route::get('categories/active', 'CategoryController@getActiveCategories');
    Route::post('categories', 'CategoryController@store');
    Route::put('categories/{category}', 'CategoryController@update');
    Route::delete('categories/{category}', 'CategoryController@updateStatus');
    Route::get('categories/{category}', 'CategoryController@show');
});

Route::group(['middleware' => ['auth:api']], function () {
    //USER CONTROLLER
    Route::get('users/info', 'UserController@showUserInfo');
    Route::put('users/password', 'UserController@updatePassword');

    //ARTICLE CONTROLLER
    Route::get('articles', 'ArticleController@index')->middleware('canSeeMyArticles');
    Route::put('articles/status/{article}', 'ArticleController@publish')->middleware('canEditArticle');
    Route::put('articles/{article}', 'ArticleController@update')->middleware('canEditArticle');
    Route::post('articles', 'ArticleController@store')->middleware('canWriteArticle');
    Route::post('articles/{article}/image', 'ArticleController@storeImage');
    Route::get('articles/{article}', 'ArticleController@show')->middleware('canSeeArticle');
    Route::delete('articles/{article}', 'ArticleController@destroy');

    //CATEGORY CONTROLLER
    Route::get('categories', 'CategoryController@index');
});


