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

Route::get('/','PostsController@home');
//Route::get('posts/{post}', 'PostsController@show');
Route::get('/posts/{slug}',['as'=>'post-show',
                             'uses' => 'PostsController@show'  ]);
Route::get('/posts', 'PostsController@postSend');
Route::post('/posts','PostsController@store');


//Route::resource('posts', 'PostController');


Route::get('/about','PagesController@about');
Route::get('/media','PagesController@media');
Route::get('/resources','PagesController@resources');
Route::get('/connect','PagesController@connect');
Route::get('/board', 'PagesController@board');

//Route::get('posts', )

Auth::routes(); //Register routes for authentication

//Route::get('/home', 'HomeController@index'); //route was created by make:auth
Route::get('/home', 'PostsController@home');
