<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index'); // index

Route::get('new-post', 'PagesController@newpost'); // add new post
Route::post('new-post', 'PagesController@savepost'); // savepost post

Route::get('show-post/{id}', 'PagesController@showpost'); // see one post
Route::post('show-post/{id}', 'PagesController@savecomment'); // save comment for post
Route::get('show-comm/{id}', 'PagesController@showcomment'); // see one post

Route::get('edit-post/{id}', 'PagesController@editpost'); // edit post
Route::post('edit-post/{id}', 'PagesController@saveeditpost'); // edit post
