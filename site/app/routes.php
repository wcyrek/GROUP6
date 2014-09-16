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
	return 'hello';
});
Route::get('users', function()
{
	return 'Users!';
});
//Skills
Route::get(		'skills', 			array('as'=>'skills', 			'uses'=>'SkillsController@getIndex'));
Route::get(		'skill/{id}', 		array('as'=>'skill', 			'uses'=>'SkillsController@getSkill'));
Route::get(		'skills/new', 		array('as'=>'new_skill', 		'uses'=>'SkillsController@getNew'));
Route::post(	'skills/new', 		array('as'=>'create_skill', 	'uses'=>'SkillsController@postNew'));
Route::delete(	'skills/destroy', 	array('as'=>'delete_skill', 	'uses'=>'SkillsController@deleteSkill'));
Route::get(		'badges', 			array('as'=>'badges', 			'uses'=>'SkillsController@getBadges'));

//Skill Types
Route::get('skilltypes', array('as'=>'skilltypes', 'uses'=>'SkillTypesController@getIndex'));
Route::get('skilltypes/{id}', array('as'=>'skilltypes', 'uses'=>'SkillTypesController@getView'));

//Admin
Route::get('admin', array('as'=>'admin', 'uses'=>'AdminController@getIndex'));

//Login
Route::get('login', 'LoginController@getLogin');
Route::post('login', 'LoginController@postLogin');