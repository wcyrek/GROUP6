<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('users', function()
{
	return 'Users!';
});
//Skills
Route::get('skills', array('as'=>'skills', 'uses'=>'SkillsController@getIndex'));
Route::get('skill/{id}', array('as'=>'skill', 'uses'=>'SkillsController@getView'));

Route::get('login/{username}/{password}', 'LoginController@login');