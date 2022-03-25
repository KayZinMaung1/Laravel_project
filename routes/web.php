<?php

use Illuminate\Support\Facades\Route;

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

route::get('/','App\Http\Controllers\ArticleController@index');
route::get('/articles','App\Http\Controllers\ArticleController@index');
route::get('/articles/detail/{id}','App\Http\Controllers\ArticleController@detail');
route::get('/articles/add','App\Http\Controllers\ArticleController@add');
route::post('/articles/add','App\Http\Controllers\ArticleController@create');
route::get('/articles/delete/{id}','App\Http\Controllers\ArticleController@delete');
route::get('/comments/delete/{id}','App\Http\Controllers\CommentController@delete');
route::post('/comments/add','App\Http\Controllers\CommentController@create');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
