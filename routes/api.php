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

Route::group(['prefix' => 'admin', 'middleware' => ['auth:api', 'isSuperAdmin']], function () {
    //USER CONTROLLER
    Route::get('users', 'UserController@index');
    Route::post('users', 'UserController@store');
    Route::get('users/{user}', 'UserController@show');
    Route::put('users/{user}', 'UserController@update');
    Route::put('users/{user}/status', 'UserController@updateStatus');

    //ARTICLE CONTROLLER
    Route::get('users/articles', 'ArticleController@index');
    Route::get('users/articles/{article}', 'ArticleController@show');
});

Route::group(['middleware' => ['auth:api']], function () {
    //ARTICLE CONTROLLER
    Route::get('articles', 'ArticleController@index')->middleware('canSeeMyArticles');
    Route::put('articles', 'ArticleController@update')->middleware('canEditArticle');
    Route::post('articles', 'ArticleController@store')->middleware('canWriteArticle');
    Route::post('articles', 'ArticleController@store');
    Route::get('articles/{article}', 'ArticleController@show')->middleware('canSeeArticle');

    //CATEGORY CONTROLLER
    Route::get('categories', 'CategoryController@index');
    Route::post('categories', 'CategoryController@store');
    Route::put('categories/{category}', 'CategoryController@update');
    Route::put('categories/{category}/status', 'CategoryController@updateStatus');

});


